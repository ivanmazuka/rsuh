<!-- Template -->
<template>
    <div class="homePagePost">
        <a :href="'/post/' + post.id" class="homePagePost-picture">
            <div class="homePagePost-picture"
                 :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
            >
            </div>

            <h4 class="post-title">
                {{ post.title }}
            </h4>

            <span class="date">{{ post.created_at | moment }}</span>
        </a>
    </div>
</template>

<!-- Logic -->
<script src="./homepage-post.js"></script>

<!-- Styles -->
<style lang="sass" src="./homepage-post.sass" scoped></style>