<template>
    <div class="post">
        <a :href="'/post/' + post.id" class="picture">
            <div
                    class="picture"
                    :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
            >
            </div>

            <h4 class="post-title">
                {{ post.title }}
            </h4>

            <span class="date">{{ post.created_at | moment }}</span>
        </a>

    </div>
</template>

<script>
  const moment = require('moment');
  moment().format();
  moment.locale('ru');

  export default {
    props: ['post'],

    computed: {
      backgroundImage: function () {
        if (this.post.picture) {
          return this.post.picture;
        }
        return 'default.jpg';
      }
    },

    filters: {
      moment: function (date) {
        return moment(date).format('dddd, Do MMMM');
      }
    }
  };
</script>

<style lang="sass" scoped>
    div.post
        margin-bottom: 48px

        width: 100%

        overflow: hidden

        span.date
            color: grey
            font-size: 1em

        div.picture
            height: 128px
            width: 100%

            background-size: cover
            transition: transform 125ms ease

        div.post:hover
            div.picture
                transform: scale(1.125)
</style>