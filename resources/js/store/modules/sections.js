
const state = {
    all:[]
}

const getters = {

    getSections(state) {
        return state.all
    }

}

const mutations = {
    setSections(state, payload) {
        state.all = payload
    }
}

const actions = {

    async getAllSections({ commit }) {
        const {data} = await axios.get('/api/sections');
        commit('setSections', data);

    }

}


export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}