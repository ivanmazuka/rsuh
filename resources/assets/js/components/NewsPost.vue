<template>
    <div class="animated fadeIn post">
        <a :href="'/post/' + post.id" class="picture">
            <div
                    class="picture"
                    :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
            >
            </div>

            <h2 class="post-title">
                {{ post.title }}
            </h2>

            <span class="date">{{ post.created_at | moment }}</span>

            <span class="body">
                {{ post.body }}
            </span>
        </a>

    </div>
</template>

<script>
    const moment = require('moment');
    moment().format();
    moment.locale('ru');

    export default {
        props: ['post'],

        filters: {
            moment: function (date) {
                return moment(date).format("dddd, Do MMMM");
            }
        },

        computed: {
            backgroundImage: function () {
                if (this.post.picture) {
                    return this.post.picture;
                }
                return 'default.jpg';
            }
        }
    }
</script>

<style lang="sass">
    @import "../../sass/_variables.sass"

    div.post
        position: relative

        margin-bottom: 64px
        padding-bottom: 32px
        padding-left: 288px

        width: 100%

        border-bottom: $blueLight solid thin
        box-sizing: border-box
        overflow: hidden

        h2.post-title
            font-size: 1.25em
            font-weight: normal

        span.body
            display: block

            margin: 0.83em 0

        span.date
            color: grey
            font-size: 1em

        div.picture
            position: absolute

            top: 0
            left: 0
            bottom: 32px

            width: 256px

            background-position: center
            background-size: cover

    @media screen and (max-width: 768px)
        div.post
            padding-left: 0

            div.picture
                position: static

                height: 128px
                width: 100%

</style>