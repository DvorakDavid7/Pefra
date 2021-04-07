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
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/carousel_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">First slide label</h5>
            </div>
            <div class="carousel-item">
                <img src="../assets/carousel_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">Second slide label</h5>
            </div>
            <div class="carousel-item">
                <img src="../assets/carousel_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                <h5 class="carousel-title d-xl-block d-md-none d-sm-none d-none">Third slide label</h5>
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

.carousel-indicators button {
    position: relative;
}

.carousel-item {
    position: relative !important;
}



.carousel-title {
    width: fit-content !important;
    position: absolute;
    padding-right: 5rem;
    padding-left: 5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    left: 0%;
    top: 80%;
    background-color: blue;
    z-index: 999;

    animation: main 1s;
    transform-origin: left;

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

</style>
