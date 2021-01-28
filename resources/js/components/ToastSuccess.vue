<template>
  <div id="toast-container" class="toast-container toast-bottom-right" v-show="successMsgs.length > 0">
    <div
      class="toast toast-success"
      aria-live="polite"
      style="display: block;"
      v-for="successMsg in successMsgs"
      :key="successMsg._uid"
    >
      <div class="toast-title">{{ successMsg.title }}</div>
      <div class="toast-message">{{ successMsg.body }}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: [ "title", "body" ],
  data() {
    return {
      successMsgs: [],
      timeoutStarted: false
    };
  },
  created() {
    if (this.title) {
      this.insertTosuccessMsg(this.title, this.body);
    }
    window.Emitter.$on("toast-success", (title, body) => {
      this.insertTosuccessMsg(title, body);
    });
  },
  mounted() {
    this.startTimeout();
  },
  methods: {
    insertTosuccessMsg(title, body) {
      this.successMsgs.push({
        title: title,
        body: body
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
      this.successMsgs.splice(0, 1);
      if (this.successMsgs.length > 0) {
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
</style>
