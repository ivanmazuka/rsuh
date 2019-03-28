import HomepagePost from '../HomapagePost';

export default {
  // Imported components
  components: {HomepagePost},

  /**
   * Data function.
   *
   * @returns {object}
   */
  data() {
    return {
      news: []
    };
  },

  /**
   * Created Vue hook.
   *
   * @returns {void}
   */
  created() {
    $.getJSON({
      url: 'api/posts',
      data: {'limitTo': 9}
    }).done(function (response) {
      this.news = response;
    }.bind(this)).fail(function (error) {
      console.log(error);
    });
  }
};