<!-- Template -->
<template>
    <div>
        <news-post
                v-for="post in list"
                :key="post.id"
                :post="post"
                ref="post"
        >
        </news-post>
        <button v-if="count > 6" @click="morePosts()">Загрузить ещё</button>
    </div>
</template>

<!-- Logic -->
<script>
    import NewsPost from "./NewsPost";

    export default {

        // Component data
        components: {NewsPost},
        data() {
            return {
                list: [],
                count: 0,
                latest: 0
            };
        },

        // Methods
        methods: {
            getPosts(number) {
                $.getJSON('/api/posts/get/' + number, function (posts) {
                    this.list = posts;
                    this.latest = posts[posts.length - 1].id;
                }.bind(this));
            },

            countPosts() {
                $.get('/api/posts/count', function (result) {
                    this.count = result;
                }.bind(this));
            },

            morePosts() {
                $.get('/api/posts/more/' + this.latest, function (posts) {
                    for (let i = 0; i < posts.length; i++) {
                        this.list.push(posts[i]);
                    }
                    this.latest = this.list[this.list.length - 1].id;
                    this.count -= posts.length;
                }.bind(this));
            }
        },

        // Get all the posts
        created() {
            this.getPosts(6);
            this.countPosts()
        },
    }
</script>

<style lang="sass">
    @import "../../sass/_variables.sass"

    button
        padding: 16px

        width: 100%

        border: 0
        border-radius: 4px
        box-sizing: border-box
        color: white
        cursor: pointer
        font-family: 'Ubuntu', sans-serif
        font-size: 1em
        opacity: 0.5
        transition: box-shadow 125ms ease, opacity 125ms ease

        +gradient($blueLight, $blueDark)
        +shadow(0, 5px, 10px, 0, 0.25)

    button:hover
        opacity: 1

        +shadow(0, 10px, 25px, 0, 0.25)
</style>