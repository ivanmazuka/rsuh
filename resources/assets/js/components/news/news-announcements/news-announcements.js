import NewsAnnouncement from '../news-announcement/news-announcement.vue';

// Libs
import $ from 'jquery';
import axios from 'axios';

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
      axios.get('/api/announcements/get/' + number)
        .then((response) => {
          const announcements = response.data;

          this.list = announcements;
          this.latest = announcements[announcements.length - 1].date;
        });
    },

    countAnnouncements() {
      $.get('/api/announcements/count', (result) => {
        this.count = result;
      });
    },

    moreAnnouncements() {
      $.get('/api/announcements/more/' + this.latest, (announcements) => {
        console.log(this.latest);

        for (let i = 0; i < announcements.length; i++) {
          this.list.push(announcements[i]);
        }

        this.latest = this.list[this.list.length - 1].date;
        this.count -= announcements.length;
      });
    }
  },

  // Get all the posts
  created() {
    this.getAnnouncements(6);
    this.countAnnouncements();
  },
};