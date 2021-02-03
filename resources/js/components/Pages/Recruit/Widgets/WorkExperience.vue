<template>
  <div>
    <h2 class="step-title">Professional Details</h2>

    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="form-group">
          <label class="formLabel" for="recent_job_title"
            >Most Recent Role</label
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
    </div>



    <div class="row">
      <div class="col-sm-8 col-md-8" v-show="!isOtherVisible">
        <div class="form-group">
          <div class="step-label">Your Preferred Role Option 1</div>
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

      <div class="col-sm-8 col-md-8" v-show="isOtherVisible">
        <div class="form-group">
          <label class="formLabel" for="preferred_role">
            Your Preferred Role Option 1</label
          >
          <input
            type="text"
            class="formInput"
            required
            id="preferred_role"
            name="preferred_role"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.preferred_role"
          />
        </div>
      </div>

      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label class="checkbox-inline agreement">
            <input
              id="other-box"
              name="other_box"
              type="checkbox"
              @input="isOtherVisible = !isOtherVisible"
            /> Other Role 
          </label>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-sm-8 col-md-8" v-show="!isOther2Visible">
        <div class="form-group">
          <div class="step-label">Your Preferred Role Option 2</div>
          <select
            id="preferred_role_2"
            name="preferred_role_2"
            class="selectpicker form-control"
            v-model="$parent.form.preferred_role_2"
          >
            <option value="">Select an option</option>
            <option v-for="(item, i) in roles" :key="i" :value="item">
              {{ item }}
            </option>
          </select>
        </div>
      </div>

      <div class="col-sm-8 col-md-8" v-show="isOther2Visible">
        <div class="form-group">
          <label class="formLabel" for="preferred_role_2">
            Your Preferred Role Option 2</label
          >
          <input
            type="text"
            class="formInput"
            id="preferred_role_2"
            name="preferred_role_2"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.preferred_role_2"
          />
        </div>
      </div>

      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label class="checkbox-inline agreement">
            <input
              id="other-box-2"
              name="other_box_2"
              type="checkbox"
              @input="isOther2Visible = !isOther2Visible"
            /> Other Role
          </label>
        </div>
      </div>

    </div>
    
    
    <div class="row">
      <div class="col-sm-8 col-md-8" v-show="!isOther3Visible">
        <div class="form-group">
          <div class="step-label">Your Preferred Role Option 3</div>
          <select
            id="preferred_role_3"
            name="preferred_role_3"
            class="selectpicker form-control"
            v-model="$parent.form.preferred_role_3"
          >
            <option value="">Select an option</option>
            <option v-for="(item, i) in roles" :key="i" :value="item">
              {{ item }}
            </option>
          </select>
        </div>
      </div>

      <div class="col-sm-8 col-md-8" v-show="isOther3Visible">
        <div class="form-group">
          <label class="formLabel" for="preferred_role_3">
            Your Preferred Role Option 3</label
          >
          <input
            type="text"
            class="formInput"
            id="preferred_role_3"
            name="preferred_role_3"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.preferred_role_3"
          />
        </div>
      </div>

      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label class="checkbox-inline agreement">
            <input
              id="other-box-3"
              name="other_box_3"
              type="checkbox"
              @input="isOther3Visible = !isOther3Visible"
            /> Other Role
          </label>
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
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      isOtherVisible: false,
      isOther2Visible: false,
      isOther3Visible: false,
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
