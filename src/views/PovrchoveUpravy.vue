<template>
    <div>
        <div style="min-height: 100vh">
            <Navigation/>
            <div class="surfacing-body">
                <div class="container mt-5 text-center">
                    <h1>Povrchové úpravy</h1>
                    <p class="mt-3">Nerezový, ocelový, dřevěný, skleněný, plastový, hliníkový, měděný
                        materiál žárový zinek, základní nátěr, vrchní nátěr alkydovými i
                        synteckými barvami, prášková barva (komaxit) galvanické pokovení
                        Cortenové plechy – zrezlé materiály.</p>
                    <div class="row mt-5">
                        <div class="col-12 col-md-4 ">
                            <img class="surfacing-img" src="../assets/locksmithing/locksmithing_1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="surfacing-img" src="../assets/locksmithing/locksmithing_2.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="surfacing-img" src="../assets/locksmithing/locksmithing_3.jpg" alt="">
                        </div>
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
    name: 'povrchoveUpravy',
    components: {
        Footer,
        Navigation,
    }

}
</script>

<style scoped>
.surfacing-img {
    width: 50%;
    height: 70%;
}
</style>