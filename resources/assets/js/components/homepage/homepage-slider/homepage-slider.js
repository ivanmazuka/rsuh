// Components
import HomepageSliderElement from '../homepage-slider-element/homepage-slider-element.vue';
import homepageService from '../../../services/homepage';

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
      news: [],
      error: null,
    };
  },

  /**
   * Created Vue hook.
   *
   * @returns {void}
   */
  created() {
    homepageService.getNews(9)
      .then((response) => {
        this.news = response.data;
        this.news[0].active = true;
      })
      .catch((err) => {
        this.error = err.response.statusText;
      });
  }
};