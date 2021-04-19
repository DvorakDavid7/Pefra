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

    computed: {
        url() {
            if (location.hostname === "localhost")
                return "http://localhost:5000/api/track.php"
            return "https://pefra.cz/api/track.php"
        }
    },

    async mounted() {
        const response = await fetch(this.url, {
            method: "POST"
        })
        const responseData = await response.json()
        console.log(responseData)
    }
}
</script>

<style lang="scss">

@import "../node_modules/bootstrap/scss/bootstrap";

</style>
