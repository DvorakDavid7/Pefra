<template>
    <div>
        <div style="min-height: 100vh">
            <Navigation/>
            <div class="workshop-body">
                <div class="container mt-5 text-center">
                    <h1>Ostatní práce</h1>
                    <p class="mt-3">Svářečské práce montážní práce vypracování technické dokumentace
                        včetně statických výpočtů (externí spolupracovníci) spolupracujeme
                        s osvědčenými firmami a dodavateli spolupracujeme se sklenářskou,
                        truhlářskou, stavební, zahradní.</p>
                    <div class="row mt-5">
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/locksmithing/locksmithing_1.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/locksmithing/locksmithing_2.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <img class="other-img" src="../assets/locksmithing/locksmithing_3.jpg" alt="">
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
    }

}
</script>

<style scoped>

.other-img {
    width: 50%;
    height: 70%;
}
</style>