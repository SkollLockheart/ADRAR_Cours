<template>
<section>
    <form @submit.prevent="update">
        <label class="form-label">Formulaire d'édition :</label>

        <div class="mb-3">
            <input v-model="inputName" type="text" class="form-control form-control-sm"  placeholder="votre nom">
        </div>
        <div class="mb-3">
            <input v-model="inputAge" type="number" class="form-control form-control-sm"  placeholder="votre age">
        </div>
        <button class="btn btn-outline-dark">MAJ des Datas</button>
    </form>
</section>
</template>

<script>
export default {
    name: "user-data",
    data(){
        return {
            inputName : "",
            inputAge: 0,
        }
    },
    methods:{
        update(){
            this.$emit("update-user", {
                name: this.inputName,
                age: this.inputAge
            });
        }
    }
}
</script>