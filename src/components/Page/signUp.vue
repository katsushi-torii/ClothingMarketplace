<template>
    <HeaderSection />
    <section class="sign-in">
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="passwaord" class="form-label">Passwaord</label>
                <input type="password" class="form-control" id="passwaord" name="passwaord" placeholder="Passwaord">
            </div>
            <div>
                <label for="avatar">Avatar</label>
                <label for="avatar" class="fileButton">Select file</label>
                <input type="file" name="avatar" id="avatar" hidden>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </section>
    <FooterSection />
</template>

<script>
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';
export default {
    name: 'signUp',
    components: {
        FooterSection,
        HeaderSection
    }
}

</script>
<style>
/* @import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"); */
</style>