import Vue from 'vue';

Vue.component('homepage-news', require('./components/HomepageNews.vue'));
Vue.component('homepage-post', require('./components/HomapagePost.vue'));
Vue.component('homepage-announcements', require('./components/HomepageAnnouncements.vue'));
Vue.component('homepage-announcement', require('./components/HomepageAnnouncement.vue'));
Vue.component('homepage-slider', require('./components/HomepageSlider.vue'));
Vue.component('homepage-slider-element', require('./components/HomepageSliderElement.vue'));

new Vue({
    el: '#app'
});

window.$(document).ready(function () {
});