<!-- Template -->
<template>
    <div class="animated fadeIn homePageAnnouncement">
        <a :href="'/announcement/' + announcement.id">
            <div class="homePageAnnouncement-circle">
                <div class="homePageAnnouncement-background">

                </div>
                <div class="homePageAnnouncement-day">
                    {{ announcement.date | day }}
                </div>
                <div class="homePageAnnouncement-month">
                    {{ announcement.date | month }}
                </div>
            </div>
            <h4 class="homePageAnnouncement-title">
                {{ announcement.title}}
            </h4>

            <div class="clear"></div>
        </a>
    </div>
</template>

<!-- Logic -->
<script src="./homepage-announcement.js"></script>

<!-- Styles -->
<style lang="sass" src="./homepage-announcement.sass" scoped></style>