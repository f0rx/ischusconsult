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
          accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
        />
        <error-widget :text="cv.error" v-if="cv.hasError"></error-widget>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <div class="step-label">Attach other supporting documents</div>
        <input
          type="file"
          id="documents"
          name="documents[]"
          multiple
          class="formInput"
          autocomplete="off"
          spellcheck="false"
          accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
        />
        <error-widget
          :text="documents.error"
          v-if="documents.hasError"
        ></error-widget>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cv: {
        hasError: false,
        error: "",
      },
      documents: {
        hasError: false,
        error: "",
      },
    };
  },
  created() {
    this.$parent.errors.filter(
      (i) =>
        (this.cv = {
          hasError: true,
          error: i.filter((e) => e.includes("cv") || e.includes("CV"))[0],
        })
    );

    this.$parent.errors.filter(
      (i) =>
        (this.documents = {
          hasError: true,
          error: i.filter(
            (e) => e.includes("documents") || e.includes("Documents")
          )[0],
        })
    );
  },
};
</script>
