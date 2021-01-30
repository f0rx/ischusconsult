<template>
  <div>
    <h2 class="step-title">Contact Information</h2>
    <div class="form-group">
      <div class="step-label">
        Would you like to recieve free Job postings via e-mail?
      </div>
      <label class="radio-inline"
        ><input type="radio" value="yes" name="subscribed" checked /> Yes</label
      >
      <label class="radio-inline"
        ><input type="radio" value="no" name="subscribed" /> No</label
      >
    </div>
    <div class="form-group">
      <div class="step-label">Which kind of communication do you prefer?</div>
      <label class="radio-inline"
        ><input type="radio" value="email" name="communicationprefer" checked />
        Email</label
      >
      <label class="radio-inline"
        ><input type="radio" value="phone" name="communicationprefer" />
        Phone</label
      >
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      //
    };
  },
};
</script>
