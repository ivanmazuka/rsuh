<!-- Template -->
<template>
    <div>
        <news-post v-for="post in list"
                   :key="post.id"
                   :post="post"
                   ref="post"
        >
        </news-post>
        <button v-if="count > 6" @click="morePosts()">Загрузить ещё</button>
    </div>
</template>

<!-- Logic -->
<script src="./news-posts.js"></script>

<!-- Styles -->
<style lang="sass" src="./news-posts.sass" scoped></style>