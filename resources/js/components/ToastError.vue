<template>
  <div>
      <div id="toast-container" class="toast-container toast-top-right"
            v-for="error in errors"
            :key="error._uid">
        <div
            class="toast toast-error box"
            aria-live="polite"
            v-show="error.visible">
        <span class="close-box" @click="this.splice()">x</span>
        <div class="toast-title">{{ error.title }}</div>
        <div class="toast-message">{{ error.body }}</div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [ "title", "body", "visible" ],
  data() {
    return {
      errors: [],
      timeoutStarted: false
    };
  },
  created() {
    if (this.title) {
      this.insertToerror(this.title, this.body, this.visible);
    }
    window.Emitter.$on("toast-error", (title, body, visible) => {
      this.insertToerror(title, body, visible);
    });
  },
  mounted() {
    this.startTimeout();
  },
  methods: {
    insertToerror(title, body, visible) {
        console.log("Is visible ==> " + visible);
      this.errors.push({
        title: title,
        body: body,
        visible: visible
      });
      this.timeoutStarted == false ? this.startTimeout() : null;
    },

    startTimeout() {
      this.timeoutStarted = true;
      setTimeout(() => {
        this.removeFirstItem();
      }, window.toastTimeout);
    },

    removeFirstItem() {
      this.errors.splice(0, 1);
      if (this.errors.length > 0) {
        this.startTimeout();
      } else {
        this.timeoutStarted = false;
      }
    }
  }
};
</script>

<style>
@import "toastr";
.box {
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    height: inherit;
    width: inherit;
}
.box > .close-box {
    align-self: flex-end !important;
    position: absolute !important;
    color: white !important;
    cursor: pointer !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    line-height: 0rem !important;
    margin: 0rem !important;
    padding: 0rem !important;
}
</style>
