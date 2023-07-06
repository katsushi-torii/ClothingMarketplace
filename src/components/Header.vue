<template>
    <header>
        <section>
            <img src="../img/logo.png" alt="">
        </section>
        <h1>{{ this.userName }}</h1>
        <aside>
            <button>
                <router-link class="nav-link" to="/">Home</router-link>
            </button>
            <button v-if="this.logged">
                <router-link class="nav-link" :to="`/profile?userId=${this.userId}`">Profile</router-link>
            </button>
            <button>
                <router-link class="nav-link" to="/addForm">Add Product</router-link>
            </button>
            <button v-if="this.logged" @click="logout">
                <router-link class="nav-link" to="/signIn">Sign Out</router-link>
            </button>
            <button v-if="!this.logged">
                <router-link class="nav-link" to="/signIn">Sign In</router-link>
            </button>
            <button v-if="!this.logged">
                <router-link class="nav-link" to="/signUp">Sign Up</router-link>
            </button>
        </aside>
    </header>
</template>

<script>
import VueCookies from 'vue-cookies';

export default {
    name: 'HeaderSection',
    data() {
        return {
            logged: false,
            userName: "",
            userId:null
        }
    },
    methods: {
        logout() {
                VueCookies.remove("user");
                this.userName="";
                this.logged = false;
        }
    },
    created() {
        if (VueCookies.isKey("user")) {
            this.userName ="Welcome, "+ VueCookies.get("user").userName + "!";
            this.userId = VueCookies.get("user").userId;
            this.logged = true;
        } else {
            this.logged = false;
        }
    }
}

</script>
