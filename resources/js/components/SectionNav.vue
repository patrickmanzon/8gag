<template>
    <aside class="menu">
        <p class="menu-label">
            Sections
        </p>
        <ul class="menu-list">
            <li v-for="section in sections" :key="section.id">
                <router-link :to="{ name: 'Section', params: { slug: section.name } }">{{ section.name }}</router-link>
            </li>>
        </ul>
    </aside>
</template>

<script>

import { mapState, mapActions } from 'vuex'
export default {
    computed: mapState({
        sections: state => state.sections.all
    }),
    async created() {
        this.$store.dispatch('sections/getAllSections');
    }
}
</script>

<style>
    
</style>