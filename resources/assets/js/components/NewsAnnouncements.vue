<!-- Template -->
<template>
    <div>
        <news-announcement
                v-for="announcement in list"
                :key="announcement.id"
                :announcement="announcement"
                ref="announcement"
        >
        </news-announcement>
        <button v-if="count > 6" @click="moreAnnouncements()">Загрузить ещё</button>
    </div>
</template>

<!-- Logic -->
<script>
  import NewsAnnouncement from './NewsAnnouncement';

  export default {
    components: {NewsAnnouncement},

    data() {
      return {
        list: [],
        count: 0,
        latest: 0
      };
    },

    // Methods
    methods: {
      getAnnouncements(number) {
        $.getJSON('/api/announcements/get/' + number, function (announcements) {
          this.list = announcements;
          this.latest = announcements[announcements.length - 1].date;
        }.bind(this));
      },

      countAnnouncements() {
        $.get('/api/announcements/count', function (result) {
          this.count = result;
        }.bind(this));
      },

      moreAnnouncements() {
        $.get('/api/announcements/more/' + this.latest, function (announcements) {
          for (let i = 0; i < announcements.length; i++) {
            this.list.push(announcements[i]);
          }
          this.latest = this.list[this.list.length - 1].date;
          this.count -= announcements.length;
        }.bind(this));
      }
    },

    // Get all the posts
    created() {
      this.getAnnouncements(6);
      this.countAnnouncements();
    },
  };
</script>

<style lang="sass" scoped>
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