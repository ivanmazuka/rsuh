// Libs
import Vue from 'vue';

// Components
import HomepageNews from './components/homepage/homepage-news/homepage-news.vue';
import HomepagePost from './components/homepage/homepage-post/homepage-post.vue';
import HomepageAnnouncements from './components/homepage/homepage-announcements/homepage-announcements.vue';
import HomepageAnnouncement from './components/homepage/homepage-announcement/homepage-announcement.vue';
import HomepageSlider from './components/homepage/homepage-slider/homepage-slider.vue';
import HomepageSliderElement from './components/homepage/homepage-slider-element/homepage-slider-element.vue';
import NewsAnnouncements from './components/news/news-announcements/news-announcements.vue';
import NewsAnnouncement from './components/news/news-announcement/news-announcement.vue';
import NewsPosts from './components/news/news-posts/news-posts.vue';
import NewsPost from './components/news/news-post/news-post.vue';

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