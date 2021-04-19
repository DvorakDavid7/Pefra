<template>
    <div>
        <div style="min-height: 100vh">
            <Navigation/>
            <!-- content goes here -->
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";


export default {
    name: 'novinky',
    components: {
        Footer,
        Navigation,
    },


    created() {
        // fetch
    }
}
</script>

<style scoped>

</style>