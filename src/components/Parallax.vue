<template>

    <div class="parallax">
        <div class="parallax-img">
            <div class="container d-flex justify-content-center align-items-end text-center">
                <div class="row text-center">
                    <a class="col-12 col-md-4 mb-4 m-auto m-md-auto" href="#">
                        <div class="parallax-content" >
                            <h3 class="parallax-content_title">O NÁS</h3>
                        </div>
                    </a>
                    <a class="col-12 col-md-4 mb-4 m-auto m-md-auto" href="#">
                        <div class="parallax-content">
                                <h3 class="parallax-content_title">KONTAKT</h3>
                        </div>
                    </a>
                    <a class="col-12 col-md-4 mb-4 m-auto m-md-auto" href="#">
                        <div class="parallax-content">
                                <h3 class="parallax-content_title">POKRYTÍ</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    //sem mi nešel dát import vůbec, takže ani ten parallax se nenacetl. Posílám to bez toho package možna jsem to spatne naistnaloval
    name: "Parallax",


}

</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";


.parallax {
    height: 70vh;
}

.parallax-img .container {
    height: 100%;
    width: 100%;
}

.parallax-content {
    display: inline-block;
    position: relative;
    width: 12rem;
    height: 5rem;
    font-size: 5px;
    background: $pefra-background-secondary;
    margin: auto;
    border-radius: 20%;
    opacity: 0.8;
    transition: 0.5s;
    margin-left: 3rem;
    margin-right: 3rem;
    margin-bottom: 3rem;
}

.parallax-content:hover {
    opacity: 1;
}

.parallax-img {
    background: url("../../src/assets/paralax.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    color: black;
    background-attachment: fixed;

}

.parallax-column_img:hover {

    opacity: 0.8;

}

.parallax-content_title {
    position: absolute;
    left: 20%;
    right: 25%;
    top: 30%;
    opacity: 0.7;
    pointer-events: none;
    text-decoration: none;
    color: $pefra-color-white !important;

}

</style>
