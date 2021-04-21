<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="container mt-5 text-center">
                <h1>Dílenské práce</h1>
                <p class="mt-3">{{ content }}</p>
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
    },

    data() {
        return {
            content: "Svařování metodou TIG a MAG stříhání a ohýbání plechů\n" +
                "soustružnické a frézařské práce lakování řezání a broušení\n" +
                "materiálů.."
        }
    },

    metaInfo() {
        return {
            title: 'Dílenské práce',
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
@import "../scss/_globals.scss";

.workshop-img {
    width: 70%;
    height: 70%;
    border-radius: 5px;
}

</style>