<template>
    <div class="galerie">
        <Navigation/>
        <div class="img-gallery">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="../assets/gallery/gallery_1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// @ is an alias to /src
import Navigation from "../components/Navigation";


export default {
    name: 'galerie',
    components: {
        Navigation,
    }

}
</script>

<style scoped  lang="scss">
@import "../scss/_variables.scss";
    .container {
        margin-top: 100px;
    }

    .img-gallery img {
        width: 100%;
        border-radius: 5px;
        filter: drop-shadow(10px 5px 10px #b2bbc4);
    }
</style>