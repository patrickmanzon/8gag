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
export default {
    data() {
        return {
            sections: []
        }
    },
    async created() {
        const {data} = await axios.get('/api/sections');
        this.sections = data;
        
    }
}
</script>

<style>
    
</style>