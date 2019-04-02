import moment from 'moment';

moment().format();
moment.locale('ru');

export default {
  /**
   * Component props.
   */
  props: {
    announcement: {
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
      if (this.announcement.picture) {
        return this.announcement.picture;
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