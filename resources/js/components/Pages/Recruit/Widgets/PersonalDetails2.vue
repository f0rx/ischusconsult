<template>
  <div>
    <h1 class="step-title">Personal Details</h1>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <div class="step-label">Gender</div>
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

      <div class="col-sm-6" v-show="!isSafari">
        <div class="form-group">
          <!-- <label class="formLabel" for="dob">Date of Birth</label> -->
          <input
            type="text"
            class="formInput"
            placeholder="Date of Birth"
            id="dob"
            name="dob"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.dob"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            @input="_calculateAge"
          />
        </div>
      </div>

      <div class="col-sm-6 col-md-6" v-show="isSafari">
        <div class="form-group">
          <div class="step-label">Age</div>
          <select
            id="age"
            name="age"
            class="selectpicker form-control"
            aria-required=""
            v-model="$parent.form.age"
          >
            <option value="">Select your age</option>
            <option
              v-for="(index, i) in 100"
              :key="i"
              :value="i"
              v-show="i > 20"
            >
              {{ i }}
            </option>
          </select>
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
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
            <option value="Seperated">Seperated</option>
          </select>
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
import moment from "moment";

export default {
  data() {
    return {
      //
    };
  },

  computed: {
    isSafari() {
      return (
        /^((?!chrome|android).)*safari/i.test(navigator.userAgent) ||
        window.safari !== undefined
      );
    },

    isFireFox() {
      return navigator.userAgent.toLowerCase().indexOf("firefox") > -1;
    },

    isChrome() {
      return navigator.userAgent.toLowerCase().indexOf("chrome") > -1;
    },
  },

  methods: {
    _calculateAge(event) {
      var age = moment().diff(event.target.value, "years");
      this.$parent.form.age = age;
    },
  },
};
</script>