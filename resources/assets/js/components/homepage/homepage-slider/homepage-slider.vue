<template>

    <!-- Outer wrapper -->
    <div class="homePageSlider-wrapper">

        <!-- Slider -->
        <div v-if="!error">
            <homepage-slider-element
                    v-for="element in news"
                    :key="element.id"
                    :element="element"
            >
            </homepage-slider-element>
        </div>

        <!-- Error block -->
        <div v-else class="homePageSlider-errorBlock homePage-errorBlock">
            <span>Ошибка загрузки новостей (код: {{ error }})</span>
        </div>

    </div>

</template>

<script src="./homepage-slider.js"></script>

<style lang="sass" src="./homepage-slider.sass" scoped></style>