<template>
    <div id="app">
        <!--
        <div id="nav">
            <router-link to="/">Home</router-link>
            |
            <router-link to="/about">About</router-link>
        </div>
        -->
        <router-view/>
        <img hidden :src="this.API_URL" alt="">
    </div>
</template>

<script>
export default {
    name: "App",

    data() {
        return {
            API_URL: "https://web-statistics.azurewebsites.net/track.php"
        }
    },
}
</script>

<style lang="scss">

@import "../node_modules/bootstrap/scss/bootstrap";

</style>
