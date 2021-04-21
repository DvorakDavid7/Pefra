<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="surfacing-body">
                <div class="container mt-5 text-center">
                    <h1>Povrchové úpravy</h1>
                    <p class="mt-3">{{ content }}</p>
                    <div class="row mt-5">
                        <div class="col-12 col-md-4 ">
                            <img class="surfacing-img" src="../assets/surfacing/surfacing_1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="surfacing-img" src="../assets/surfacing/surfacing_2.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="surfacing-img" src="../assets/surfacing/surfacing_3.jpg" alt="">
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
    },

    data() {
        return {
            content: "Nerezový, ocelový, dřevěný, skleněný, plastový, hliníkový, měděný\n" +
                "materiál žárový zinek, základní nátěr, vrchní nátěr alkydovými i\n" +
                "synteckými barvami, prášková barva (komaxit) galvanické pokovení\n" +
                "Cortenové plechy – zrezlé materiály."
        }
    },

    metaInfo() {
        return {
            title: 'Povrchové úpravy',
            meta: [
                {
                    name: 'description',
                    content: this.content
                }
            ]
        }
    }

}
</script>

<style scoped>
.surfacing-img {
    width: 70%;
    height: 70%;
    border-radius: 5px;
}
</style>