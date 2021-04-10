<template>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 17rem; height: 17rem">
                    <img class="card-img-top" alt="..." src="../assets/service_1.jpg">
                    <div class="card-body">
                        <h6 class="card-title">Stavební zámečnictví</h6>
<!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk-->
<!--                            of the card's content.</p>-->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 17rem; height: 17rem">
                    <img class="card-img-top" alt="..." src="../assets/service_2.jpg">
                    <div class="card-body">
                        <h6 class="card-title">Dílenské práce</h6>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 17rem; height: 17rem">
                    <img class="card-img-top" alt="..." src="../assets/service_3.jpg">
                    <div class="card-body">
                        <h6 class="card-title">Povrchové úpravy</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card text-center" style="width: 15rem; height: 17rem">
                    <img class="card-img-top" alt="..." src="../assets/service_4.jpg">
                    <div class="card-body">
                        <h6 class="card-title">Ostatní práce a služby</h6>
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
    width: 80% !important;
}

.card img:hover + .card-body>h6 {
    font-size: 20px !important;
}



.card img {
    opacity: 0.9;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

</style>
