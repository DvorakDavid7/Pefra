<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="container mt-5 text-center">
                <h1>Dílenské práce</h1>
                <p class="mt-3">Svařování metodou TIG a MAG stříhání a ohýbání plechů
                    soustružnické a frézařské práce lakování řezání a broušení
                    materiálů..</p>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/workshop/workshop_1.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/workshop/workshop_2.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/workshop/workshop_3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";


export default {
    name: 'dilenskePrace',
    components: {
        Footer,
        Navigation,
    }

}
</script>

<style scoped>
@import "../scss/_globals.scss";

.workshop-img {
    width: 70%;
    height: 70%;
    border-radius: 5px;
}

</style>