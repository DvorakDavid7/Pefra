<template>
    <div class="dilenske-prace">
        <Navigation/>
        <div class="workshop-body">
            <div class="container mt-5 text-center">
                <h1>Dílenské práce</h1>
                <p class="mt-3">Svařování metodou TIG a MAG stříhání a ohýbání plechů
                    soustružnické a frézařské práce lakování řezání a broušení
                    materiálů..</p>
                <div class="row mt-5">
                    <div class="col-12 col-md-4 ">
                        <img class="workshop-img ml" src="../assets/locksmithing/locksmithing_1.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="workshop-img" src="../assets/locksmithing/locksmithing_2.jpg">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="workshop-img mr" src="../assets/locksmithing/locksmithing_3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";


export default {
    name: 'dilenskePrace',
    components: {
        Navigation,
    }

}
</script>

<style scoped>
.workshop-img {
    width: 40%;
    height: 70%;
    border-radius: 5px;
}

.ml {
    margin-left: 250px;
}

.mr {
    margin-right: 250px;
}
</style>