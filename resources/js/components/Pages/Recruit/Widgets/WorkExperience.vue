<template>
  <div>
    <h2 class="step-title">Professional Details</h2>

    <div class="row">
      <div class="col-sm-6 col-md-6">
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
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <div class="step-label">Your Preferred Job Option</div>
          <select
            id="preferred_role"
            name="preferred_role"
            class="selectpicker form-control"
            required
            aria-required=""
            v-model="$parent.form.preferred_role"
          >
            <option value="">Select an option</option>
            <option v-for="(item, i) in roles" :key="i" :value="item">
              {{ item }}
            </option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
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
      roles: [
        "PETROLEUM ENGINEER (RESERVOIR, P.TECH, PETROPHYSICS)",
        "GEOSCIENCES (GEOLOGIST, SEISMOLOGIST)",
        "PROJECT ENGINEER",
        "ASSET INTEGRITY ENGINEER",
        "DRILLING (COMPLETIONS) ENGINEER",
        "PRODUCTION OPERATOR",
        "MAINTENANCE OPERATOR (MECH, ELECT, INSTRUMENT)",
        "PRODUCTION SUPERVISOR",
        "MAINTENANCE SUPERVISOR",
        "PRODUCTION PLANNER",
        "FACILITY ENGINEER",
        "DICSIPLINE ENGINEER (INSTR; CIVIL, ELECT)",
        "PROJECT ENGINEER",
        "COMMUNITY RELATIONS OFFICER",
        "COMMUNITY RELATIONS SUPERVISOR",
        "SECURITY MANAGER",
        "SECURITY COORDINATOR",
        "BASE MANAGER",
        "LOGISTICS COORDINATOR",
        "HSE LEAD (PROJECT, CORPORATE, ENVIRONMENT)",
        "HSE OFFICER",
        "ACCOUNTANTS (TREASURY, TAX, GL, JV)",
        "COMMERCIAL LEAD",
        "CORPORATE PLANNING ANALYST",
        "ECONOMIST",
        "LEGAL COUNSEL",
        "HR BUSINESS PARTNER",
        "HR ANALYST",
        "SCM ANALYST",
      ],
    };
  },
};
</script>
