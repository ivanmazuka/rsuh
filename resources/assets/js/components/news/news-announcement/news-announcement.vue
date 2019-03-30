<!-- Template -->
<template>
    <div class="animated fadeIn newsAnnouncements-post">
        <a :href="'/announcement/' + announcement.id" class="newsAnnouncements-picture">
            <div class="newsAnnouncements-picture"
                 :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
            >
            </div>

            <h2 class="newsAnnouncements-postTitle">
                {{ announcement.title }}
            </h2>

            <span class="newsAnnouncements-date">{{ announcement.date | moment }}</span>

            <span class="newsAnnouncements-body">
                {{ announcement.body }}
            </span>
        </a>

    </div>
</template>

<!-- Logic -->
<script src="./news-announcement.js"></script>

<!-- Styles -->
<style lang="sass" src="./news-announcement.sass" scoped></style>