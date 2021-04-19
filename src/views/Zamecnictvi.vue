<template>
    <div>
        <div style="min-height: 100vh">
            <Navigation/>
            <div class="container text-center mt-5">
                <div class="row">
                    <h1>STAVEBNÍ ZÁMEČNICTVÍ</h1>
                    <p class="mt-3"> Ocelová schodiště včetně zábradlí brány posuvné, dvoukřídlé,
                        samonosné, na dálkové ovládání, či ruční branky zábradlí interiérové,
                        venkovní, ( nerezová, skleněná, dřevěná, ocelová) mříže pevné i
                        otvírací, do sklepů, oken, kanceláře plotové díly ( tahokov, kované
                        komponenty, jeklové, plechové, dřevěné) výstavní prvky, dekorace
                        ocelové portály Lávky přístřešky s výplní skla, makrolon
                        podpůrné konstrukce dle zadán přístřešky pro popelnicové stání
                        reklamní stojany a cedul poklopy, dvířka, madla, držáky, atd.
                        atypické práce dle dokumentace.</p>
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
    }

}
</script>


<style scoped>

.locksmithing-img {
    width: 50%;
    height: 70%;
}
</style>