import moment from 'moment';

moment().format();
moment.locale('ru');

export default {
  props: ['announcement'],

  filters: {
    moment(date) {
      return moment(date).format('dddd, Do MMMM');
    }
  },

  computed: {
    backgroundImage() {
      if (this.announcement.picture) {
        return this.announcement.picture;
      }

      return 'default.jpg';
    }
  }
};