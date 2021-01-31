<template>
  <div
    class="help-block"
    :class="[
      tint,
      marginTop ? 'margin-top' : 'no-margin-top',
      marginBottom ? 'margin-bottom' : 'no-margin-bottom',
    ]"
    v-text="text"
  ></div>
</template>

<script>
export default {
  props: {
    text: {
      type: String,
      required: true,
    },
    tint: {
      type: String,
      required: false,
      default: () => "red",
    },
    marginTop: {
      type: Boolean,
      required: false,
      default: () => true,
    },
    marginBottom: {
      type: Boolean,
      required: false,
      default: () => true,
    },
  },
  data() {
    return {
      //
    };
  },
};
</script>

<style scoped>
.no-margin-top {
  margin-top: 0px !important;
}
.no-margin-bottom {
  margin-bottom: 0px !important;
}
.margin-top {
  margin-top: 5px !important;
}
.margin-bottom {
  margin-bottom: 5px !important;
}
.blue {
  color: #3490dc !important;
}
.indigo {
  color: #6574cd !important;
}
.purple {
  color: #9561e2 !important;
}
.pink {
  color: #f66d9b !important;
}
.red {
  color: #e3342f !important;
}
.orange {
  color: #f6993f !important;
}
.yellow {
  color: #ffed4a !important;
}
.green {
  color: #38c172 !important;
}
.teal {
  color: #4dc0b5 !important;
}
.cyan {
  color: #6cb2eb !important;
}
</style>
