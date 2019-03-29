<template>
    <div>
        <homepage-slider-element
                v-for="element in news"
                :key="element.id"
                :element="element"
        >
        </homepage-slider-element>
    </div>
</template>

<script src="./homepage-slider.js"></script>

<style lang="sass" scoped></style>