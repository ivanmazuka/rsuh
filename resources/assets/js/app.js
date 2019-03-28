import Vue from 'vue';

// Components
import HomepageNews from './components/homepage/homepage-news/homepage-news.vue';
import HomePagePost from './components/homepage/HomapagePost.vue';
import HomepageAnnouncements from './components/homepage/HomepageAnnouncements.vue';
import HomepageAnnouncement from './components/homepage/HomepageAnnouncement.vue';
import HomepageSlider from './components/homepage/HomepageSlider.vue';
import HomepageSliderElement from './components/homepage/HomepageSliderElement.vue';
import NewsPosts from './components/NewsPosts.vue';
import NewsPost from './components/NewsPost.vue';
import NewsAnnouncements from './components/NewsAnnouncements.vue';
import NewsAnnouncement from './components/NewsAnnouncement.vue';

new Vue({
  el: '#app',
  components: {
    HomepageNews,
    HomePagePost,
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