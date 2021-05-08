<template>
    <div class="footer">
        <div class="container">
            <div class="text-center pt-3 mb-5">
                <h4>Kontaktní <strong>informace</strong></h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <h1></h1>
                    <p>Mlýnská 115, 683 33 Brankovice</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <p>mobil: 773 134 166</p>
                    <p>tel: 725 355 655</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h1></h1>
                    <p>email: kovovyroba@pefra.cz</p>
                </div>
            </div>
            <div class="text-center">
                <span>© DJ</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";


.footer {
    background-color: $pefra-background-secondary;
    color: $pefra-color-white;
}


</style>
