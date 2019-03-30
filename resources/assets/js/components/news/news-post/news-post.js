import moment from 'moment';

moment().format();
moment.locale('ru');

export default {
  props: ['post'],

  filters: {
    moment: function (date) {
      return moment(date).format('dddd, Do MMMM');
    }
  },

  computed: {
    backgroundImage: function () {
      if (this.post.picture) {
        return this.post.picture;
      }
      return 'default.jpg';
    }
  }
};