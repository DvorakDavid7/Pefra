<template>
    <div class="parallax">
        <div class="parallax-img">
            <div class="container d-flex justify-content-center align-items-end text-center">
                <div class="row text-center">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content" href="">
                            <a href="">
                                <h3 class="parallax-content_title">O NÁS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content">
                            <a href="#">
                                <h3 class="parallax-content_title">KONTAKT</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content">
                            <a href="#">
                                <h3 class="parallax-content_title">POKRYTÍ</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    name: "Parallax"
    // const paralax = document.querySelector(".paralax-img");
    // window.addEventListener("scroll", function () {
    //     let offset: number = window.pageYOffset;
    //     console.log(offset);
    //     paralax.style.backgroundPositionY = offset * 0.5 + "px";
    // })
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
    position: relative;
    width: 12rem;
    height: 7rem;
    font-size: 5px;
    background: $pefra-background-secondary;
    margin: auto;
    border-radius: 20%;
    opacity: 0.8;
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
    top: 35%;
    opacity: 0.7;
    color: black;
    pointer-events: none;
    text-decoration: none;
    color: $pefra-color-white !important;
}

</style>
