<template>
    <div>
        <homepage-slider-element
                v-for="element in news"
                :key="element.id"
                :element="element"
        >
        </homepage-slider-element>

        <div class="buttons-wrapper">
            <button class="previous">1</button>
            <button class="next">2</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                news: []
            }
        },

        created() {
            $.getJSON({
                url: 'api/posts',
                data: {'limitTo': 5}
            }).done(function (response) {
                this.news = response;
                this.news[0].active = true;
            }.bind(this)).fail(function (error) {
                console.log(error);
            });
        }
    }
</script>

<style scoped lang="sass">
    @import "../../sass/_variables.sass"

    div.buttons-wrapper
        position: absolute
        z-index: 3

        top: 50%
        right: 0
        left: 0

        width: 100%

    button
        position: absolute

        margin-top: -24px

        height: 48px
        width: 48px

        background: white
        border: 0
        border-radius: 50%
        cursor: pointer
        transition: box-shadow 125ms ease

        +shadow(0, 5px, 10px, 0, 0.25)

    button:hover
        +shadow(0, 10px, 25px, 0, 0.25)

    button:active, button:focus
        outline: none

    button.previous
        left: 48px

    button.next
        right: 48px
</style>