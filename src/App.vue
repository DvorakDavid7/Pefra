<template>
    <div id="app">
        <!--
        <div id="nav">
            <router-link to="/">Home</router-link>
            |
            <router-link to="/about">About</router-link>
        </div>
        -->
        <router-view/>
    </div>
</template>

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
