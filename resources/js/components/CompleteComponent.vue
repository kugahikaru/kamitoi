<template>
    <div>
        <h1>問い合わせ完了</h1>
            <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'home' }" class="btn btn-primary">Create Post</router-link>
            </div>
            </div><br />
            <img src="">
    </div>
</template>

<script>
    export default {
            data() {
                return {
                    posts: []
                }
            },
            created() {
                let uri = 'api/posts';
                this.axios.get(uri).then(response => {
                    this.posts = response.data.data;
                    console.log(response.data.data);
                });
            },
        methods: {
            deletePost(id)
            {
                let uri = `api/post/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.posts.splice(this.posts.indexOf(id), 1);
                });
            }
        }
    }
</script>