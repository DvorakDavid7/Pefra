<template>
    <div class="zamecnictvi">
        <Navigation/>
        <div class="locksmith-body">
            <div class="container mt-5 text-center">
                <h1>STAVEBNÍ ZÁMEČNICTVÍ</h1>
                <p class="mt-3">  Ocelová schodiště včetně zábradlí brány posuvné, dvoukřídlé,

                    samonosné, na dálkové ovládání, či ruční branky zábradlí interiérové,

                    venkovní, ( nerezová, skleněná, dřevěná, ocelová) mříže pevné i

                    otvírací, do sklepů, oken, kanceláře plotové díly ( tahokov, kované

                    komponenty, jeklové, plechové, dřevěné) výstavní prvky, dekorace

                    ocelové portály Lávky přístřešky s výplní skla, makrolon

                    podpůrné konstrukce dle zadán přístřešky pro popelnicové stání

                    reklamní stojany a cedul poklopy, dvířka, madla, držáky, atd.

                    atypické práce dle dokumentace.</p>
                <div class="row mt-5">
                    <div class="col-12 col-md-4 ">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_2.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="locksmithing-img" src="../assets/locksmithing/locksmithing_3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";


export default {
    name: 'zamecnictvi',
    components: {
        Navigation,
    }

}
</script>


<style scoped>
.locksmithing-img {
    width: 50%;
    height: 70%;
}
</style>