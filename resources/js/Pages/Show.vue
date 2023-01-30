<template>
    <div class="vue-modal rounded bg-whitesmoke text-gray" v-show="open">
        <div class="vue-modal-inner">
            <div class="vue-modal-content">
                <slot />
                <h3 class="text-xl underline">Estación {{ nombre }}</h3>
                Horarios: {{ horario }}
                <br />
                <button type="button" @click="open = false" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6" style="float:right">Cerrar</button>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name: "Show",
    props: {
        nombre: String,
        horario: String,
        open: {type: Boolean, required: true}
    }
}
</script>
<style scoped>
.vue-modal{
    width: 40rem;
    position: fixed;
    left: 25%;
    top: 25%;
    z-index: 1;
    border: 1px solid gray;
    background-color: white;
    color: black;
    padding: 2rem
}
</style>
