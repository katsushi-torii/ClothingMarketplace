<template>
    <header>
        <section>
            <img src="../img/logo.png" alt="">
        </section>
        <aside>
            <button>
                <router-link class="nav-link" to="/">Home</router-link>
            </button>
            <button>
                <router-link class="nav-link" to="/profile">Profile</router-link>
            </button>
            <button>
                <router-link class="nav-link" to="/addForm">Add Product</router-link>
            </button>
            <!-- <button>
                <router-link class="nav-link" to="/">Sign In</router-link>
            </button>
            <button>
                <router-link class="nav-link" to="/">Sign Up</router-link>
            </button> -->
        </aside>
    </header>
</template>

<script>

export default{
    name: 'HeaderSection'
}

</script>
