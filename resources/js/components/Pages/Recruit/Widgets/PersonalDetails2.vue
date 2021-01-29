<template>
  <div>
    <h1 class="step-title">Personal Details</h1>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <div class="step-label">What is your gender?</div>
          <label class="radio-inline"
            ><input
              type="radio"
              value="male"
              name="gender"
              v-model="$parent.form.gender"
              checked
            />
            Male</label
          >
          <label class="radio-inline"
            ><input
              type="radio"
              value="female"
              name="gender"
              v-model="$parent.form.gender"
            />
            Female</label
          >
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <!-- <label class="formLabel" for="dob">Date of Birth</label> -->
          <input
            type="text"
            class="formInput"
            placeholder="Date of Birth"
            required
            id="dob"
            name="dob"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.dob"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
          />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <div class="step-label">Marital Status</div>
          <select
            id="marital_status"
            name="marital_status"
            class="selectpicker form-control"
            required
            aria-required=""
            v-model="$parent.form.marital_status"
          >
            <option value="">Select an option</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
            <option value="seperated">Seperated</option>
          </select>
        </div>
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
