<template>
    <div>
        <div class="top-nav p-2">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <span class="top-nav-text">
                    <span>ZÁKAZNICKÁ LINKA: </span>
                    <strong>722 523 963</strong>
                </span>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";

.top-nav {
    background: $pefra-background-secondary;
}

.top-nav-text {
    margin-left: 15px;
    color: $pefra-fontcolor-light;
}

.navbar-brand img {
    width: 200px;
}

.nav-link {
    color: $pefra-fontcolor-dark !important;
}

.nav-item {
    margin-left: 2rem;
    margin-right: 2rem;
}
</style>
