// Components
import HomepageSliderElement from '../homepage-slider-element/homepage-slider-element.vue';

export default {
  // Imported components
  components: {HomepageSliderElement},

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
      data: {'limitTo': 5}
    }).done(function (response) {
      this.news = response;
      this.news[0].active = true;
    }.bind(this)).fail(function (error) {
      console.log(error);
    });
  }
};