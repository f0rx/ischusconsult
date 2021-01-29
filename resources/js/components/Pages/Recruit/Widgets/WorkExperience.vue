<template>
  <div>
    <h2 class="step-title">Work Experience</h2>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="formLabel" for="specialization">Specialization</label>
          <input
            type="text"
            class="formInput"
            required
            id="specialization"
            name="specialization"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.specialization"
          />
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="step-label">Preferred Role</div>
          <select
            id="preferred_role"
            name="preferred_role"
            class="selectpicker form-control"
            required
            aria-required=""
            v-model="$parent.form.preferred_role"
          >
            <option value="">Select an option</option>
            <option value="manager">Manager</option>
            <option value="cto">Chief Technology Officer</option>
            <option value="ceo">Chief Executive Officer</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="formLabel" for="recent_job_title"
        >Most Recent Job Title</label
      >
      <input
        type="text"
        class="formInput"
        required
        id="recent_job_title"
        name="recent_job_title"
        autocomplete="off"
        spellcheck="false"
        v-model="$parent.form.recent_job_title"
      />
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="formLabel" for="highest_role">Highest Role</label>
          <input
            type="text"
            class="formInput"
            required
            id="highest_role"
            name="highest_role"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.highest_role"
          />
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label class="formLabel" for="total_years_of_xp"
            >Years of Experience</label
          >
          <input
            type="text"
            class="formInput"
            required
            id="total_years_of_xp"
            name="total_years_of_xp"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.total_years_of_xp"
          />
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="step-label">About Me (Optional)</div>
      <textarea
        class="formInput"
        name="summary"
        id="summary"
        v-model="$parent.form.summary"
        placeholder="e.g Passionate science teacher with 8+ years of experience and a track record of.."
      ></textarea>
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
