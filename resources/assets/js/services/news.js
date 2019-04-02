import axios from 'axios';

export default {
  /**
   * Fetches announcements from the database.
   *
   * @param {number} offset — Number of announcements to fetch.
   * @returns {AxiosPromise}
   */
  getAnnouncements(offset) {
    return axios.get('/api/announcements/get/' + offset);
  },

  /**
   * Fetches the number of announcements.
   *
   * @return {AxiosPromise}
   */
  countAnnouncements() {
    return axios.get('/api/announcements/count');
  },

  /**
   * Fetches more announcements.
   *
   * @param {string} latestDate — Date string.
   * @return {AxiosPromise}
   */
  moreAnnouncements(latestDate) {
    return axios.get('/api/announcements/more/' + latestDate);
  },

  /**
   * Fetches posts from the database.
   *
   * @param {number} offset — Number of posts to fetch.
   * @returns {AxiosPromise}
   */
  getPosts(offset) {
    return axios.get('/api/posts/get/' + offset);
  },

  /**
   * Fetches the number of posts.
   *
   * @return {AxiosPromise}
   */
  countPosts() {
    return axios.get('/api/announcements/count');
  },

  /**
   * Fetches more posts.
   *
   * @param {number} latestId — Latest post id.
   * @return {AxiosPromise}
   */
  morePosts(latestId) {
    return axios.get('/api/posts/more/' + latestId);
  },
};