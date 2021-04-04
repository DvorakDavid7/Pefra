<template>
    <div class="parallax">
        <div class="parallax-img">
            <div class="container">
                <div class="row h-75">
                    <div class="col-12 col-md-4 "></div>
                    <div class="col-12 col-md-4"></div>
                    <div class="col-12 col-md-4"></div>
                </div>
                <div class="row text-center">
                    <div class="col-12 col-md-4 ">
                        <h1>TITLE TEXT</h1>
                    </div>
                    <div class="col-12 col-md-4"><h1>TITLE TEXT</h1></div>
                    <div class="col-12 col-md-4"><h1>TITLE TEXT</h1></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Parallax"
}
</script>

<style scoped>

.parallax {
    height: 70vh;
}

.parallax-img {
    background: url("../assets/parallax.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    color: black;
}
</style>
