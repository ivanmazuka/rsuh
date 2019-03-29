export default {
  props: {
    element: {
      required: true,
      type: Object,
    }
  },

  computed: {
    backgroundImage() {
      if (this.element.picture) {
        return this.element.picture;
      }

      return 'default.jpg';
    }
  }
};