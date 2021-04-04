<template>
    <div class="parallax">
        <div class="parallax-img">
            <div class="container d-flex justify-content-center align-items-end">
                <div class="row text-center">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content">
                            <a href="#">
                                <img src="../assets/paralaxColumn_1.jpg" alt="parallax" class="parallax-column_img">
                                <h3 class="parallax-content_title">O NÁS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content">
                            <a href="#">
                                <img src="../assets/paralaxColumn_2.jpg" alt="parallax" class="parallax-column_img">
                                <h3 class="parallax-content_title">KONTAKT</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="parallax-content">
                            <a href="#">
                                <img src="../assets/paralaxColumn_3.jpg" alt="parallax" class="parallax-column_img">
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

<style scoped>

.parallax {
    height: 70vh;
}

.parallax-img .container {
    height: 100%;
    width: 100%;
}

.parallax-content {
    position: relative;
    width: 100%;
    height: 100%;
    font-size: 5px;
}


.parallax-img {
    background: url("../../src/assets/paralax.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    color: black;
    filter: grayscale(30%);
}

.parallax-column_img {
    width: 50%;
    height: 100%;
    border-radius: 30%;
    opacity: 0.2;
    transition: 1s;

    -webkit-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(1px);

}

.parallax-column_img:hover {

    opacity: 0.8;

}

.parallax-content_title {
    position: absolute;
    left: 25%;
    right: 25%;
    top: 35%;
    opacity: 0.7;
    color: black;
    pointer-events: none;
    text-decoration: none;
}
</style>
