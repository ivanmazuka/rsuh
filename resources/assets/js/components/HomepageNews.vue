<!-- Template -->
<template>
    <div class="animated fadeIn">
        <h2>Новости</h2>
        <div class="left-column">
            <homepage-post
                    v-for="(post, index) in news"
                    v-if="(index + 1) % 3 === 1"
                    :key="post.id"
                    :post="post"
            >
            </homepage-post>
        </div>

        <div class="center-column">
            <homepage-post
                    v-for="(post, index) in news"
                    v-if="(index + 1) % 3 === 2"
                    :key="post.id"
                    :post="post"
            >
            </homepage-post>
        </div>

        <div class="right-column">
            <homepage-post
                    v-for="(post, index) in news"
                    v-if="(index + 1) % 3 === 0"
                    :key="post.id"
                    :post="post"
            >
            </homepage-post>
        </div>

        <div class="clear"></div>
        <a href="/news/posts">Все посты ›</a>
    </div>
</template>

<!-- Logic -->
<script>
    export default {
        data() {
            return {
                news: []
            }
        },

        created() {
            $.getJSON({
                url: 'api/posts',
                data: {'limitTo': 9}
            }).done(function (response) {
                this.news = response;
            }.bind(this)).fail(function (error) {
                console.log(error);
            });
        }
    }
</script>

<!-- Styles -->
<style lang="sass">
    .left-column, .center-column, .right-column
        float: left
        
        width: 30%

    .left-column, .center-column
        margin-right: 5%
</style>
