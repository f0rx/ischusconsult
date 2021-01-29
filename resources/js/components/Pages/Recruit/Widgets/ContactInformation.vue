<template>
  <div>
    <h2 class="step-title">Contact Information</h2>
    <div class="form-group">
      <div class="step-label">
        Would you like to recieve free Job postings via e-mail?
      </div>
      <label class="radio-inline"
        ><input type="radio" value="Yes" name="requestcatalog" checked />
        Yes</label
      >
      <label class="radio-inline"
        ><input type="radio" value="No" name="requestcatalog" /> No</label
      >
    </div>
    <div class="form-group">
      <div class="step-label">Which kind of communication do you prefer?</div>
      <label class="radio-inline"
        ><input type="radio" value="Email" name="communicationprefer" checked />
        Email</label
      >
      <label class="radio-inline"
        ><input type="radio" value="Phone" name="communicationprefer" />
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
