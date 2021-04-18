<template>
    <div class="pokryti">
        <Navigation/>
        <div class="cover-section text-center">
            <div class="container">
                <div class="map-container">
                    <img src="../assets/cover_map.png">
                    <div class="point Prague tippy" title="Praha"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";


export default {
    name: 'pokryti',
    components: {
        Navigation,
    }

}
</script>

<style scoped  lang="scss">
@import "../scss/_variables.scss";

html, body {
    height: 100%;
}

.cover-section {
    background-color: $pefra-color-dark;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    animation: main 1.5s;
    transform-origin: center;
}

@keyframes main {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}

.map-container {
    padding: 3.2rem .8rem;
    position: relative;
    display: inline-block;
    z-index: 998;
}

.map-container img {
    width: 100%;
}

.point {
    cursor: pointer;
    position: absolute;
    width: 1.6rem;
    height: 1.6rem;
    background-color:  white;
    border-radius: 50%;
    transition: all .3s ease;
    will-change: transform, box-shadow;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 0 rgba(174, 165, 165, 0.3);
    animation: pulse 3s infinite;
    z-index: 999;
}

.point:hover {
     animation: none;
     transform:  translate(-50%, -50%) scale3D(1.35, 1.35 ,1);
     box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
 }

.Prague{
    top: 40%;
    left: 35%;
}


@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(105, 105, 105, 0.3); }
    70% { box-shadow: 0 0 0 25px rgba(159, 122, 122, 0.3); }
    100% { box-shadow: 0 0 0 0 rgba(243, 70, 70, 0.3); }
}
</style>
