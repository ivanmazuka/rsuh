<template>
    <div class="animated fadeIn announcement">
        <a :href="'/announcement/' + announcement.id">
            <div class="circle">
                <div class="background">

                </div>
                <div class="day">
                    {{ announcement.date | day }}
                </div>
                <div class="month">
                    {{ announcement.date | month }}
                </div>
            </div>
            <h4 class="title">
                {{ announcement.title}}
            </h4>

            <div class="clear"></div>
        </a>
    </div>
</template>

<script>
    const moment = require('moment');
    moment().format();
    moment.locale('ru');

    export default {
        data() {
            return {}
        },

        props: ['announcement'],

        filters: {
            day: function (date) {
                return moment(date).format("D");
            },

            month: function (date) {
                return moment(date).format("MMM");
            }
        }
    }
</script>

<style lang="sass">
    @import "../../sass/_variables.sass"

    div.announcement
        float: left

        margin-bottom: 48px

        h4
            width: 176px

        .announcement:last-of-type
            margin-bottom: 0

        div.circle
            position: relative

            float: left

            margin-right: 16px
            padding: 11px 0

            height: 64px
            width: 64px

            box-sizing: border-box
            text-align: center

            div.day, div.month
                position: relative
                z-index: 2

            div.day
                font-size: 1.5em
                line-height: 24px

            div.month
                line-height: 18px

        div.background
            position: absolute
            z-index: 1

            top: 0
            right: 0
            bottom: 0
            left: 0

            border-radius: 50%
            transition: transform 125ms ease, box-shadow 125ms ease

            +gradient($blueLight, $blueDark)
            +shadow(0, 5px, 10px, 0, 0.25)

    div.announcement:hover
        div.background
            transform: scale(1.125)
            +shadow(0, 10px, 25px, 0, 0.25)

    @media screen and (max-width: 1024px)
        div.announcement
            margin-right: 16px

</style>