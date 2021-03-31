<template>
    <div class="home">
        <Navigation/>
        <Carousel/>
        <Products/>
        <News/>
        <Parallax/>
        <Footer/>
    </div>
</template>

<script>
// @ is an alias to /src
import Navigation from "../components/Navigation";
import Carousel from "../components/Carousel";
import Products from "../components/Products";
import News from "../components/News";
import Parallax from "../components/Parallax";
import Footer from "../components/Footer";

export default {
    name: 'Home',
    components: {
        Navigation,
        Carousel,
        Products,
        News,
        Parallax,
        Footer
    }
}
</script>

<style scoped lang="scss">

</style>
