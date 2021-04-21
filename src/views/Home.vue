<template>
    <div class="home">
        <Navigation/>
        <Carousel/>
        <Products class="mt-5 pt-4"/>
        <div data-aos="fade-up" class="text-center container mt-5">
            <p>
            {{ content }}
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
    },

    data() {
        return {
            content: "Naše firma se zabývá zpracováním kovových materiálů, a následnou výrobou\n" +
                "svařovaných produktů. Jsou to převážně ocelové konstrukce a jiné\n" +
                "výrobky, brány , ozdobné kované mříže, okenní mříže, kovová reklamní\n" +
                "písmena , konstrukce billboardů, zábradlí, a jiné atypické výrobky na\n" +
                "zakázku."
        }
    },

    metaInfo() {
        return {
            title: 'Domů',
            meta: [
                {
                    name: 'description',
                    content: this.content
                }
            ]
        }
    }
}
</script>

<style scoped lang="scss">


</style>
