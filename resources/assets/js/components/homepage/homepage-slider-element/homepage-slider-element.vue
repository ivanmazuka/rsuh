<!-- Template -->
<template>
    <div class="homePageSliderElement-wrapper"
         :style="{ 'background-image': 'url(/img/' + backgroundImage + ')' }"
         :class="{ active: element.active }"
    >
        <strong class="homePageSliderElement-title">{{ element.title }}</strong>
    </div>
</template>

<!-- Logic -->
<script src="./homepage-slider-element.js"></script>

<!-- Styles -->
<style lang="sass" src="./homepage-slider-element.sass" scoped></style>