import Vue from 'vue';


Vue.component('homepage-news', require('./components/HomepageNews.vue'));
Vue.component('homepage-post', require('./components/HomapagePost.vue'));
Vue.component('homepage-announcements', require('./components/HomepageAnnouncements.vue'));
Vue.component('homepage-announcement', require('./components/HomepageAnnouncement.vue'));
Vue.component('homepage-slider', require('./components/HomepageSlider.vue'));
Vue.component('homepage-slider-element', require('./components/HomepageSliderElement.vue'));
Vue.component('news-posts', require('./components/NewsPosts.vue'));
Vue.component('news-post', require('./components/NewsPost.vue'));
Vue.component('news-announcements', require('./components/NewsAnnouncements.vue'));
Vue.component('news-announcement', require('./components/NewsAnnouncement.vue'));

new Vue({
    el: '#app'
});

window.api = function (url, method = 'get', data = null) {
    $.ajax({
        url: url,
        method: method,
        data: data
    })
        .always(function (response) {
            console.log(response);
        });
};

$(document).ready(function () {
    $('.unwrap-nav, .wrap-nav').on('click', function () {
        const nav = $('nav.main');
        nav.toggleClass('unwrapped');
    });
});