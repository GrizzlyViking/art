<template>
    <button type="button" @click="placeInBasket" class="btn btn-primary shadow-lg">
        <slot />
    </button>
</template>

<script>
export default {
    name: "BuyButton",
    props: ['art-id'],
    methods: {
        placeInBasket() {
            axios.put('/basket', {
                artworkId: this.artId
            });
        }
    }
}
</script>

<style scoped>
    .btn:hover {
        box-shadow: #0a0b0d;
    }
</style>
