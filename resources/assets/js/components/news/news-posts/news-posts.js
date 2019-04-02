import NewsPost from '../news-post/news-post.vue';
import newsService from '../../../services/news';

export default {
  components: {NewsPost},

  data() {
    return {
      list: [],
      count: 0,
      latest: 0
    };
  },

  // Methods
  methods: {
    /**
     * Gets posts from the database.
     *
     * @param offset — Number of posts to fetch.
     * @return {void}
     */
    getPosts(offset) {
      newsService.getPosts(offset)
        .then((response) => {
          const posts = response.data;

          this.list = posts;
          this.latest = posts[posts.length - 1].id;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    },

    /**
     * Counts the number of posts.
     *
     * @returns {void}
     */
    countPosts() {
      newsService.countPosts()
        .then((response) => {
          this.count = response.data;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    },

    /**
     * Gets more posts.
     *
     * @return {void}
     */
    morePosts() {
      newsService.morePosts(this.latest)
        .then((response) => {
          const posts = response.data;

          this.list = [...this.list, ...posts];
          this.latest = this.list[this.list.length - 1].id;
          this.count -= posts.length;
        })
        .catch((err) => {
          console.error(err.response.statusText);
        });
    }
  },

  /**
   * React lifecycle hook.
   *
   * @returns {void}
   */
  created() {
    this.getPosts(6);
    this.countPosts();
  },
};