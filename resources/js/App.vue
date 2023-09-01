<template>
    <router-view></router-view>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: 'App',

    created() {
        this.$store.dispatch('getAllInfo')
    }
}
</script>

<style scoped>

</style>
