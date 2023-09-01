<template>
    <div class="container-fluid p-0 m-0">
        <div class="row header">
            <Header/>
        </div>
        <div class="row body">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Header from "./Header/Header.vue";

export default {
    components: {
        Header,
    },

    created() {

    },

    methods: {

    },
}
</script>

<style  scoped>
.header {
    font-size: 14px;
    color: #ffffff;
    padding-top: 10px;
    margin: 0;
    background: #2d7232;
    height: 50px;
}
</style>
