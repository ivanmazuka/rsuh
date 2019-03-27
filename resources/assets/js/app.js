import Vue from 'vue';

// Components
import HomepageNews from './components/HomepageNews.vue';
import HomepagePost from './components/HomapagePost.vue';
import HomepageAnnouncements from './components/HomepageAnnouncements.vue';
import HomepageAnnouncement from './components/HomepageAnnouncement.vue';
import HomepageSlider from './components/HomepageSlider.vue';
import HomepageSliderElement from './components/HomepageSliderElement.vue';
import NewsPosts from './components/NewsPosts.vue';
import NewsPost from './components/NewsPost.vue';
import NewsAnnouncements from './components/NewsAnnouncements.vue';
import NewsAnnouncement from './components/NewsAnnouncement.vue';

new Vue({
  el: '#app',
  components: {
    HomepageNews,
    HomepagePost,
    HomepageAnnouncements,
    HomepageAnnouncement,
    HomepageSlider,
    HomepageSliderElement,
    NewsPosts,
    NewsPost,
    NewsAnnouncements,
    NewsAnnouncement,
  },
});

// window.api = function (url, method = 'get', data = null) {
//   $.ajax({
//     url: url,
//     method: method,
//     data: data
//   })
//     .always(function (response) {
//       console.log(response);
//     });
// };

$(document).ready(function () {
  $('.unwrap-nav, .wrap-nav').on('click', function () {
    const nav = $('nav.main');
    nav.toggleClass('unwrapped');
  });
});