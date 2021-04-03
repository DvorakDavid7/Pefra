<template>
    <div class="footer">
        <div class="container">
            <div class="text-center mb-5">
                <h4>Kontaktní <strong>informace</strong></h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <h1>TITLE</h1>
                    <p>Some random text</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h1>TITLE</h1>
                    <p>Some random text</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h1>TITLE</h1>
                    <p>Some random text</p>
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
