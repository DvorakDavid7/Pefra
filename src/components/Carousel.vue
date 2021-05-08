<template>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-text d-xl-block d-md-none d-sm-none d-none">
            <h5 class="carousel-info1">ZPRACOVÁNÍ A SVÁŘENÍ</h5>
            <h3 class="carousel-info2">OCELOVÝCH KONSTRUKCÍ A JINÝCH VÝROBKŮ</h3>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/carousel_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <p></p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">Kovovýroba a zámečnické práce</h5>

            </div>
            <div class="carousel-item">
                <img src="../assets/carousel_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p></p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">Svařování metodou TIG a MAG</h5>
            </div>
            <div class="carousel-item">
                <img src="../assets/carousel_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p></p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">Teamwork</h5>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: "Carousel"
}
</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";

.carousel-indicators button {
    position: relative;
}

.carousel-item {
    position: relative !important;
}

.carousel-item img {
    position: relative !important;
    filter: brightness(75%) !important;
}

.carousel-title {
    width: fit-content !important;
    position: absolute;
    padding-right: 5rem;
    padding-left: 20rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    top: 75%;
    background-color: $pefra-background-primary;
    z-index: 998;
    opacity: 0.7 !important;
    animation: main 1s;
    transform-origin: left;
    color: $pefra-color-light-blue;

}

.active .carousel-title{
    visibility: visible;
    opacity: 1;
}

@keyframes main {
    0% {
        transform: scalex(0);
    }
    50% {
        transform: scalex(0);
    }
    100% {
        transform: scalex(1);
    }
}

.carousel-text {
    position: absolute;
    left: 55%;
    top: 73%;
    z-index: 999 !important;
    color: $pefra-background-primary;
    transform-origin: bottom;
}

.carousel-info1 {
    margin: 0;
}

.carousel-info2 {
    font-size: 30px;
}
</style>
