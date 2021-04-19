<template>
    <div>
        <div style="min-height: 100vh;">
            <Navigation/>
            <div class="img-gallery mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                            <img src="../assets/gallery/gallery_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer class="mt-5"/>
    </div>

</template>

<script>
// @ is an alias to /src
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";


export default {
    name: 'galerie',
    components: {
        Footer,
        Navigation,
    }

}
</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";


.img-gallery img {
    width: 100%;
    border-radius: 5px;
    filter: drop-shadow(10px 5px 10px #b2bbc4);
}
</style>