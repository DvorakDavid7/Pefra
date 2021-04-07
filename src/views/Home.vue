<template>
    <div class="home">
        <Navigation/>
        <Carousel/>
        <Products class="mt-5 pt-4"/>
        <div class="text-center container mt-5">
            <p>
                Naše firma se zabývá zpracováním kovových materiálů, a následnou výrobou
                svařovaných produktů. Jsou to převážně ocelové konstrukce a jiné
                výrobky, brány , ozdobné kované mříže, okenní mříže, kovová reklamní
                písmena , konstrukce billboardů, zábradlí, a jiné atypické výrobky na
                zakázku.
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
