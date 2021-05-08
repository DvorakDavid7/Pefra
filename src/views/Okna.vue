<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="workshop-body">
                <div class="container mt-5 text-center">
                    <h1>Okna</h1>
                    <p class="mt-3">{{ content }}</p>
                    <div class="row mt-5">
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/okna/okna_1.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/okna/okna_2.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/okna/okna_3.jpg" alt="">
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
    name: 'ostatni',
    components: {
        Footer,
        Navigation,
    },

    data() {
        return {

        }
    },

    metaInfo() {
        return {
            title: 'Okna',
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

.other-img {
    width: 70%;
    height: 70%;
    border-radius: 5px;
}
</style>