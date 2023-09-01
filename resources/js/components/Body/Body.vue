<template>

</template>

<script>

export default {
    components: {

    },
    data: () => ({

    }),

    computed: {
        slug() {
            return this.$route.params.category;
        },
    },

    watch: {
        slug(newVal, oldVal){
            this.$store.dispatch('getInfoBySlug', newVal.toLowerCase())
        }
    }
}

</script>

<style scoped>

</style>
