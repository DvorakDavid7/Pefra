<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="container text-center mt-5">
                <div class="row">
                    <h1>Stavební zámečnictví</h1>
                    <p class="mt-3">{{ content }}</p>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_1.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_2.jpg" alt="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_3.jpg" alt="">
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
    name: 'zamecnictvi',
    components: {
        Footer,
        Navigation
    },

    data() {
        return {
            content: "Ocelová schodiště včetně zábradlí brány posuvné, dvoukřídlé,\n" +
                "samonosné, na dálkové ovládání, či ruční branky zábradlí interiérové,\n" +
                "venkovní, ( nerezová, skleněná, dřevěná, ocelová) mříže pevné i\n" +
                "otvírací, do sklepů, oken, kanceláře plotové díly ( tahokov, kované\n" +
                "komponenty, jeklové, plechové, dřevěné) výstavní prvky, dekorace\n" +
                "ocelové portály Lávky přístřešky s výplní skla, makrolon\n" +
                "podpůrné konstrukce dle zadán přístřešky pro popelnicové stání\n" +
                "reklamní stojany a cedul poklopy, dvířka, madla, držáky, atd.\n" +
                "atypické práce dle dokumentace."
        }
    },

    metaInfo() {
        return {
            title: 'Zámečnictví',
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

.locksmithing-img {
    width: 70%;
    height: 70%;
    border-radius: 5px;
}
</style>