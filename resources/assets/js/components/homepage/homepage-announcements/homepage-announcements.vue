<!-- Templates -->
<template>
    <div>
        <h2>Анонсы</h2>
        <homepage-announcement
                v-for="announcement in announcements"
                :key="announcement.id"
                :announcement="announcement">
        </homepage-announcement>
        <div class="clear"></div>
        <a :href="'/news/announcements'">Все анонсы ›</a>
    </div>
</template>

<!-- Logic -->
<script src="./homepage-announcements.js"></script>