import NewsPost from '../news-post/news-post.vue';

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
    getPosts(number) {
      $.getJSON('/api/posts/get/' + number, function (posts) {
        this.list = posts;
        this.latest = posts[posts.length - 1].id;
      }.bind(this));
    },

    countPosts() {
      $.get('/api/posts/count', function (result) {
        this.count = result;
      }.bind(this));
    },

    morePosts() {
      $.get('/api/posts/more/' + this.latest, function (posts) {
        for (let i = 0; i < posts.length; i++) {
          this.list.push(posts[i]);
        }
        this.latest = this.list[this.list.length - 1].id;
        this.count -= posts.length;
      }.bind(this));
    }
  },

  // Get all the posts
  created() {
    this.getPosts(6);
    this.countPosts();
  },
};