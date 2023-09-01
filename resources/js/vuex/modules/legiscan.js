export default {
    state: {
        legInfo: [],
        slugInfo: [],
    },

    mutations: {
        setInfo(state, payload){
            state.legInfo = payload
        },

        setInfoBuySlug(state, payload){
          state.slugInfo = payload
        },
    },

    getters: {
        getInfo(state){
            return state.legInfo;
        },

        getInfoBuySlug(state) {
            return state.slugInfo
        }
    },

    actions: {
        getInfoBySlug(context, payload){
            axios.post('/get-info-by-slug', {
                slug: payload
            })
                .then((response) => {
                    console.log(response.data)
                    context.commit('setInfoBuySlug', response.data)
                })
                .catch(err => console.log(err))
        },

        getAllInfo(context) {
            axios.post('/get-legiscan-info')
                .then((response) => {
                    for (const responseKey in response.data) {
                        context.commit('setInfo', {
                            key: responseKey,
                            content: response.data[responseKey]
                        })
                    }
                })
                .catch(err => console.log(err))

        }
    },
}
