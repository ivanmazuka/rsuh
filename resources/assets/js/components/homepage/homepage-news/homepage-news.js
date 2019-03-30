// Components
import HomepagePost from '../homepage-post/homepage-post.vue';
import homepageService from '../../../services/homepage';

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
      })
      .catch((err) => {
        this.error = err.response.statusText;
      });
  }
};