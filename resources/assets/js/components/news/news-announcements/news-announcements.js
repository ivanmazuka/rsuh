// Services
import newsService from '../../../services/news';

// Components
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
    /**
     * Gets announcements from the database.
     *
     * @param offset — Number of announcements to fetch.
     * @return {void}
     */
    getAnnouncements(offset) {
      newsService.getAnnouncements(offset)
        .then((response) => {
          const announcements = response.data;

          this.list = announcements;
          this.latest = announcements[announcements.length - 1].date;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    },

    /**
     * Counts the number of announcements.
     *
     * @returns {void}
     */
    countAnnouncements() {
      newsService.countAnnouncements()
        .then((response) => {
          this.count = response.data;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    },

    /**
     * Gets more announcement.
     *
     * @return {void}
     */
    moreAnnouncements() {
      newsService.moreAnnouncements(this.latest)
        .then((response) => {
          const announcements = response.data;

          this.list = [...this.list, ...announcements];
          this.latest = this.list[this.list.length - 1].date;
          this.count -= announcements.length;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    }
  },

  /**
   * React lifecycle hook.
   *
   * @returns {void}
   */
  created() {
    this.getAnnouncements(6);
    this.countAnnouncements();
  },
};