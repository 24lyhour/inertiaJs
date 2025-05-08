<template>
    <div>   
        <h1 v-for="menu in menuItems">{{ menu }}</h1>
    </div>
</template>

<script setup>
import { ref } from 'vue';

   const props = defineProps({
    menuItems: Array,
    default: [],
   })
</script>

<style lang="scss" scoped>

</style>