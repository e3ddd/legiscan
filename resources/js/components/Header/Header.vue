<template>
    <div class="col-3">
        <div class="row logo">
            <div class="col title_name">
                <a href="/">LegiScan Info</a>
            </div>
        </div>
    </div>
    <div class="col-3 d-flex justify-content-center categories">
        <div class="row" v-for="(category, key) in this.categories">
            <div class="col category">
                <router-link :to="'/' + key">{{category}}</router-link>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        categories: {
            legislatures: 'Legislatures',
            committees: 'Committees',
        }
    }),
}
</script>

<style scoped>
a {
    text-decoration: none;
    color: #ffffff;
}

.logo {
    font-style: italic;
}

.categories a {
    margin-top: 5px !important;
    font-size: 10px !important;
}

.category {

}
</style>
