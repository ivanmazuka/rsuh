// Components
import HomepageAnnouncement from '../homepage-announcement/homepage-announcement.vue';

// Services
import homepageService from '../../../services/homepage';

export default {
  // Imported components
  components: {HomepageAnnouncement},

  /**
   * Data function.
   *
   * @returns {object}
   */
  data() {
    return {
      announcements: [],
      error: null,
    };
  },

  /**
   * Created Vue hook.
   *
   * @returns {void}
   */
  created() {
    homepageService.getAnnouncements(5)
      .then((response) => {
        this.announcements = response.data;
      })
      .catch((err) => {
        this.error = err.response.statusText;
      });
  }
};