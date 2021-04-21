<template>
    <div id="app">
        <router-view/>
    </div>
</template>

<script>
export default {
    metaInfo: {
        // if no subcomponents specify a metaInfo.title, this title will be used
        title: 'App',
        // all titles will be injected into this template
        titleTemplate: '%s | Pefra'
    }
}

</script>

<style lang="scss">

@import "../node_modules/bootstrap/scss/bootstrap";
@import "./scss/_globals.scss";


* {
    outline: 0;
    padding: 0;
    margin: 0;
    border: 0;
    box-sizing: border-box;
}
</style>
