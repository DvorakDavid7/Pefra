<template>
    <div>
        <div style="min-height: 100vh">
            <Navigation/>
            <div class="container mt-5 text-center">
                <h1>Dílenské práce</h1>
                <p class="mt-3">Svařování metodou TIG a MAG stříhání a ohýbání plechů
                    soustružnické a frézařské práce lakování řezání a broušení
                    materiálů..</p>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/locksmithing/locksmithing_1.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/locksmithing/locksmithing_2.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="workshop-img" src="../assets/locksmithing/locksmithing_3.jpg" alt="">
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

.workshop-img {
    width: 50%;
    height: 70%;
}

</style>