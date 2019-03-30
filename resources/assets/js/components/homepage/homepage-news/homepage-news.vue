<!-- Template -->
<template>

    <div class="animated fadeIn homePageNews">

        <!-- Heading -->
        <h2>Новости</h2>

        <!-- News -->
        <div v-if="!error">

            <!-- First column -->
            <div class="homePageNews-leftColumn">
                <homepage-post
                        v-for="(post, index) in news"
                        v-if="(index + 1) % 3 === 1"
                        :key="post.id"
                        :post="post"
                >
                </homepage-post>
            </div>

            <!-- Second column -->
            <div class="homePageNews-centerColumn">
                <homepage-post
                        v-for="(post, index) in news"
                        v-if="(index + 1) % 3 === 2"
                        :key="post.id"
                        :post="post"
                >
                </homepage-post>
            </div>

            <!-- Last column -->
            <div class="homePageNews-rightColumn">
                <homepage-post
                        v-for="(post, index) in news"
                        v-if="(index + 1) % 3 === 0"
                        :key="post.id"
                        :post="post"
                >
                </homepage-post>
            </div>

            <!-- Clear -->
            <div class="clear"></div>

        </div>

        <!-- Error block -->
        <div v-else class="homePage-errorBlock">
            <span>Ошибка загрузки новостей (код: {{ error }})</span>
        </div>

        <!-- All posts -->
        <a :href="'/news/posts'" class="homePage-allLink">Все посты ›</a>

    </div>

</template>

<!-- Logic -->
<script src="./homepage-news.js"></script>

<!-- Styles -->
<style lang="sass" src="./homepage-news.sass" scoped></style>
