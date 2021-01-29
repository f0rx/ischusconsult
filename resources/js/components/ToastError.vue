<template>
    <div id="toast-container" class="toast-container toast-top-right" v-show="errors.length > 0">
        <div
        class="toast toast-error box"
        aria-live="polite"
        v-for="error in errors"
        :key="error.unique_id">
            <span class="close-box" @click="removeSpecific(error.unique_id)">x</span>
            <div class="toast-title">{{ error.title }}</div>
            <div class="toast-message">{{ error.body }}</div>
        </div>
    </div>
</template>

<script>
const { v4: uuidv4 } = require('uuid');

export default {
  props: {
      title: {
          type: String,
          required: true
      },
      body: {
          type: String,
          required: true
      }
  },

  data() {
    return {
      errors: [],
      timeoutStarted: false
    };
  },

  created() {
    if (this.title) {
      this.insertToerror(this.title, this.body);
    }
    window.Emitter.$on("toast-error", (title, body) => {
      this.insertToerror(title, body);
    });
  },

  mounted() {
    this.startTimeout();
  },

  methods: {
    insertToerror(title, body, visible) {
      this.errors.push({
        unique_id: uuidv4(),
        title: title,
        body: body,
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
    },

    removeSpecific(uuid) {
        this.errors = this.errors.filter((item) => item.unique_id != uuid);
    }
  },
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
    padding: 6px 6px 10px 6px !important;
}
</style>
