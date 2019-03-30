<!-- Templates -->
<template>
    <div>

        <!-- Heading -->
        <h2>Анонсы</h2>

        <!-- Announcements -->
        <div v-if="!error">
            <homepage-announcement
                    v-for="announcement in announcements"
                    :key="announcement.id"
                    :announcement="announcement">
            </homepage-announcement>

            <div class="clear"></div>
        </div>

        <!-- Error block -->
        <div v-else class="homePage-errorBlock">
            <span>Ошибка загрузки анонсов (код: {{ error }})</span>
        </div>

        <!-- All link -->
        <a :href="'/news/announcements'" class="homePage-allLink">Все анонсы ›</a>

    </div>
</template>

<!-- Logic -->
<script src="./homepage-announcements.js"></script>