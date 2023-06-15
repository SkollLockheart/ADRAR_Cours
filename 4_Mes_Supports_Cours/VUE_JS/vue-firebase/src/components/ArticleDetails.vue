<template>
    <div v-if ="currentArticle" class="edit-form">
        <form>
            <div class="form-group">
                <label for="title">Titre</label>
                <input v-model="currentArticle.title" type="text" class="form-control" id="title"/>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea v-model="currentArticle.description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label><strong>Status:{{ currentArticle.published ? 'Publié' : 'En attente' }}</strong></label>
            </div>
        </form>

        <button v-if="currentArticle.published" @click="updatePublished(false)" class="btn btn-outline-dark">Dépublier</button>
        <button v-else @click="updatePublished(true)" class="btn btn-info mx-1">Publier</button>
        <button @click="deleteArticle" class="btn btn-danger mx-1" >Supprimer</button>
        <button @click="updateArticle" type="submit" class="btn btn-success mx-1">Metre à jour</button>
        <p>{{ message }}</p>
    </div>

    <div v-else >
        <p>Cliquez sur un article Por Favor</p>
    </div>
</template>


<script>
import ArticleDataService from "../services/ArticleDataService"
export default {
    name : "article-details",
    props : ["article"],
    data(){
        return {
            currentArticle : null,
            message : ""
        }

    },
    watch: {
        article(article){
            this.currentArticle = {...article};
            this.message = "";
        }
    },
    methods: {
        updatePublished(status){
            ArticleDataService.update(this.currentArticle.key,{
                published : status
            }).then(()=>{
                this.currentArticle.published = status,
                this.message = "Le Status à bien été MAJ"
            }).catch(()=>{e=>console.log(e)})
        },
        updateArticle(){
            const data = {
                title : this.currentArticle.title,
                description : this.currentArticle.description
            }
            ArticleDataService.update(this.currentArticle.key,data).then(()=>{
                this.message = "L'article a bien été MAJ"
            }).catch(e=>console.log(e))
        },
        deleteArticle(){
            ArticleDataService.delete(this.currentArticle.key).then(()=>{
                this.$emit("refeshList")
            }).catch(e=>console.log(e))
        }
    },
    mounted(){
        this.message = "";
        this.currentArticle = {...this.article}
    }
}
</script>
