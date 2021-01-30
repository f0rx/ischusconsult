<template>
  <div>
    <div class="col-md-12">
      <div class="form-group">
        <div class="step-label">Attach your CV</div>
        <input
          type="file"
          id="cv"
          name="cv"
          class="formInput"
          autocomplete="off"
          spellcheck="false"
          accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing,application/vnd.ms-fontobject"
        />
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <div class="step-label">Attach other supporting documents</div>
        <input
          type="file"
          id="others"
          name="others"
          class="formInput"
          autocomplete="off"
          spellcheck="false"
          accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing,application/vnd.ms-fontobject"
        />
      </div>
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
