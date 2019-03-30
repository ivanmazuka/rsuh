<template>
    <div class="animated fadeIn post">
        <a :href="'/post/' + post.id" class="picture">
            <div
                    class="picture"
                    :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
            >
            </div>

            <h2 class="post-title">
                {{ post.title }}
            </h2>

            <span class="date">{{ post.created_at | moment }}</span>

            <span class="body">
                {{ post.body }}
            </span>
        </a>

    </div>
</template>

<script src="./news-post.js"></script>

<style lang="sass" src="./new-post.sass" scoped></style>