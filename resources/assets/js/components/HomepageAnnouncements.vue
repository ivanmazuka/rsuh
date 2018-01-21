<template>
    <div>
        <h2>Анонсы</h2>
        <homepage-announcement
                v-for="announcement in announcements"
                :key="announcement.id"
                :announcement="announcement"
        >

        </homepage-announcement>
        <a href="/news/announcements">Все анонсы ›</a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                announcements: []
            }
        },

        created() {
            $.get({
                url: 'api/announcements',
                data: {'limitTo': 5}
            }).done(function (response) {
                this.announcements = response;
            }.bind(this)).fail(function (error) {
                console.log(error);
            });
        }
    }
</script>

<style scoped>

</style>