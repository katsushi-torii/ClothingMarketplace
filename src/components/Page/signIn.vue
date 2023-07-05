<template>
    <HeaderSection />
    <section class="sign-in">
        <form @submit.prevent="login">
            <div class="mb-3">
                <label for="userName" class="form-label">userName</label>
                <input v-model.lazy="userName" type="text" class="form-control" id="userName" name="userName"
                    placeholder="userName">
            </div>
            <div class="mb-3">
                <label for="passwaord" class="form-label">Passwaord</label>
                <input v-model.lazy="password" type="password" class="form-control" id="passwaord" name="passwaord"
                    placeholder="Passwaord">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </section>
    <FooterSection />
</template>

<script>
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';
import VueCookies from 'vue-cookies';

export default {
    name: 'signIn',
    components: {
        FooterSection,
        HeaderSection
    },
    data() {
        return {
            userName: "",
            password: "",
            userId: "",
            loginUrl: "http://localhost:80/karigui/rest-api/rest/api/V1/login.php",
            token: "",
            loaclUserName: "",
            loaclUserId: null
        }
    },
    methods: {
        async login() {
            try {
                await fetch(this.loginUrl, {
                    method: "POST",
                    body: JSON.stringify({
                        userName: this.userName,
                        password: this.password
                    })
                }).then((response) => response.json()
                ).then((data) => {
                    if (data.success) {
                        this.token = data.sessionToken;
                        VueCookies.set("user", data.user);
                    }
                });

            } catch (error) {
                console.log(error);
            }
            if (this.token) {
                VueCookies.set("session", this.token, "30d");
                this.logged = true;
                this.loaclUserName = VueCookies.get("user").userName;
                this.loaclUserId = VueCookies.get("user").userId;
                this.$router.push('/');
            }
        },
    },
    mounted() {
    if (localStorage.getItem('reloaded')) {
        // The page was just reloaded. Clear the value from local storage
        // so that it will reload the next time this page is visited.
        localStorage.removeItem('reloaded');
    } else {
        // Set a flag so that we know not to reload the page twice.
        localStorage.setItem('reloaded', '1');
        location.reload();
    }
    }
}
</script>
