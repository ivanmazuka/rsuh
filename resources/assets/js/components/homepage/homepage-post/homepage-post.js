// Libs
import moment from 'moment';

// Moment.js initialization
moment().format();
moment.locale('ru');

export default {
  /**
   * Component props.
   */
  props: {
    post: {
      required: true,
      type: Object,
    }
  },

  computed: {
    /**
     * Renders the background image URI.
     *
     * @returns {string}
     */
    backgroundImage() {
      if (this.post.picture) {
        return this.post.picture;
      }

      return 'default.jpg';
    }
  },

  filters: {
    /**
     * Formats the date.
     *
     * @param {string} date — Date/time timestamp.
     * @returns {string}
     */
    moment(date) {
      return moment(date).format('dddd, Do MMMM');
    }
  },
};