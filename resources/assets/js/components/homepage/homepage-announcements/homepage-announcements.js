// Components
import HomepageAnnouncement from '../homepage-announcement/homepage-announcement';

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
      announcements: []
    };
  },

  /**
   * Created Vue hook.
   *
   * @returns {void}
   */
  created() {
    $.get({
      url: 'api/announcements',
      data: {'limitTo': 5}
    }).done(function (response) {
      this.announcements = response;
    }.bind(this)).fail(function (error) {
      console.log(error);
    });
  }
};