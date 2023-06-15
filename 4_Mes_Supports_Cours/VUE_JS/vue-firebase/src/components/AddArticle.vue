<template>
    <h1>Ajouter Articles</h1>

    <div class="form-group" style="width:500px">
        <label for="exampleInputEmail1" class="form-label mt-4">Titre</label>
        <input v-model="article.title" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter titre">
        <label for="exampleTextarea" class="form-label mt-4">Déscription</label>
        <br>
        <textarea v-model="article.description" class="form-control" id="exampleTextarea" rows="3"></textarea>
        <br>
        <button v-on:click="saveArticle" type="button" class="btn btn-dark btn-lg">Ajouter</button>    
    </div>
</template>

<script>
import ArticleDataService from "../services/ArticleDataService"

export default {
    name: 'add-article',
    data(){
        return{
            submitted : false,
            article : {
                title : "",
                decription : "",
                published : false
            }
        }
    },
    methods: {
        saveArticle(){
            const data = {
                title : this.article.title,
                description : this.article.description,
                published : false
            }
            ArticleDataService.create(data)
            .then(
                ()=>{
                    this.submitted = true;
                    console.log('article créé')
                }
            ).catch(error=>console.log(error))
        },
        newArticle(){
            this.submitted = false;
            this.article = {
                title : "",
                description : "",
                published : false
            }
        }
    }
}
</script>
