<template>
    <div class="home">
        <Navigation/>
        <Carousel/>
        <Products class="mt-5"/>
        <div class="text-center container mt-5">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum
            </p>
        </div>
        <News class="mt-5"/>
        <Parallax class="mt-5"/>
        <Footer class="mt-0"/>
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
