<template>
    <div
            class="wrapper"
            :style="{ 'background-image': 'url(/img/' + element.picture + ')' }"
            :class="{ active: element.active }"
    >
        <strong class="title">{{ element.title }}</strong>
    </div>
</template>

<script>
    export default {
        props: ['element']
    }
</script>

<style scoped lang="sass">
    div
        height: 100%

        div.wrapper
            position: absolute
            z-index: 2

            width: 100%

        strong.title
            position: absolute

            right: 0
            bottom: 32px
            left: 0

            margin: auto

            max-width: 1024px

            font-size: 48px
</style>