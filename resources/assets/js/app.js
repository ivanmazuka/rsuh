// Libs
import Vue from 'vue';

// Components
import HomepageNews from './components/homepage/homepage-news/homepage-news.vue';
import HomepagePost from './components/homepage/homepage-post/homepage-post.vue';
import HomepageAnnouncements from './components/homepage/homepage-announcements/homepage-announcements.vue';
import HomepageAnnouncement from './components/homepage/homepage-announcement/homepage-announcement.vue';
import HomepageSlider from './components/homepage/homepage-slider/homepage-slider.vue';
import HomepageSliderElement from './components/homepage/homepage-slider-element/homepage-slider-element.vue';
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

const handleContentLoaded = () => {
  document.querySelectorAll('.unwrap-nav, .wrap-nav')
    .forEach((el) => {
      el.addEventListener('click', hamburgerClickHandler);
    });
};

const hamburgerClickHandler = () => {
  const nav = document.querySelector('nav.main');
  nav.classList.toggle('unwrapped');
};

document.addEventListener('DOMContentLoaded', handleContentLoaded);