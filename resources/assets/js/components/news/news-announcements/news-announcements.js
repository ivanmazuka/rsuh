import NewsAnnouncement from '../news-announcement/news-announcement.vue';

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