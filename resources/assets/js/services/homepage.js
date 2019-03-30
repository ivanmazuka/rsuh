import axios from 'axios';

export default {
  /**
   * Fetches announcements from the database.
   *
   * @param {number} limitTo — Maximum offset.
   * @returns {AxiosPromise}
   */
  getAnnouncements(limitTo) {
    return axios.get(`api/announcements?limitTo=${limitTo}`);
  },

  /**
   * Fetches news from the database.
   *
   * @param {number} limitTo — Maximum offset.
   * @returns {AxiosPromise}
   */
  getNews(limitTo) {
    return axios.get(`api/posts?limitTo=${limitTo}`);
  }
};