export default {
  /**
   * Component props.
   */
  props: {
    element: {
      required: true,
      type: Object,
    }
  },

  computed: {
    /**
     * Renders the background image URI.
     *
     * @returns {string}
     */
    backgroundImage() {
      if (this.element.picture) {
        return this.element.picture;
      }

      return 'default.jpg';
    }
  }
};