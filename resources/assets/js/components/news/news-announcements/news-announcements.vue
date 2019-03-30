<!-- Template -->
<template>
    <div>
        <news-announcement
                v-for="announcement in list"
                :key="announcement.id"
                :announcement="announcement"
                ref="announcement"
        >
        </news-announcement>
        <button v-if="count > 6" @click="moreAnnouncements()">Загрузить ещё</button>
    </div>
</template>

<!-- Logic -->
<script src="./news-announcements.js"></script>

<!-- Styles -->
<style lang="sass" src="./news-announcements.sass" scoped></style>