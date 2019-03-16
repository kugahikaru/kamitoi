<template>
    <div>
        <form @submit.prevent="addPost">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="radio" v-model="post.title" value="query" checked="checked">問い合わせ
                    <input type="radio" v-model="post.title" value="wish">願い
                    <input type="radio" v-model="post.title" value="confession">懺悔
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <textarea class="form-control" v-model="post.body" rows="5"></textarea>
                </div>
            </div>
            </div><br />
            <div class="form-group">
            <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post:{}
            }
        },
        methods: {
            addPost(){
                let uri = '/api/post/create';
                this.axios.post(uri, this.post).then((response) => {
                    this.$router.push({name: 'complete'});
                });
            }
        }
    }
</script>