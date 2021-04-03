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
//Global variables
$pefra-background1: white;
$pefra-background2: #2B77B5;
$pefra-color_white: white;
$pefra-color_light: #55738D;
$pefra-color_dark: #3D4851;

//Section sizing
.Paralax {
  height: 70vh;
}

.Footer {
  height: 30vh;
}

//Global paddings
.Products {
  margin-top: 0rem;
}

.News {
  margin-top: 2rem;
}

.Paralax {
  margin-top: 2rem;
}

.Footer {
  margin-top: 2rem;
}
</style>
