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
    announcement: {
      required: true,
      type: Object,
    }
  },

  filters: {
    /**
     * Formats Moment.js date.
     *
     * @param {string} date — Date timestamp.
     * @returns {string}
     */
    day(date) {
      return moment(date).format('D');
    },

    /**
     * Formats Moment.js date.
     *
     * @param {string} date — Date timestamp.
     * @returns {string}
     */
    month(date) {
      return moment(date).format('MMM');
    }
  }
};