<template>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem; height: 15rem">
                    <img class="card-img-top" alt="..." src="../assets/service_1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Stavební zámečnictví</h5>
<!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk-->
<!--                            of the card's content.</p>-->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem; height: 15rem">
                    <img class="card-img-top" alt="..." src="../assets/service_2.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Dílenské práce</h5>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem; height: 15rem">
                    <img class="card-img-top" alt="..." src="../assets/service_3.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Povrchové úpravy</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem; height: 15rem">
                    <img class="card-img-top" alt="..." src="../assets/service_4.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Ostatní práce a služby</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Products"
}
</script>

<style scoped>

.card {
    border: none;
    color: black;
    cursor: pointer;
}

.card img {
    border-radius: 42%;
    filter: brightness(70%) !important;
    transition: 0.7s;
}

.card-title {
    transition: 0.2s;
}

.card img {
    width: 65% !important;
}

.card img:hover {
    border-radius: 50%;
    filter: brightness(100%) !important;
}

/*.card img:hover + .card-body>h6 {*/
/*    font-size: 20px !important;*/
/*}*/



.card img {
    opacity: 0.9;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

</style>
