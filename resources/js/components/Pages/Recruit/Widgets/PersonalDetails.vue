<template>
  <div>
    <h1 class="step-title">Personal Details</h1>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="formLabel" for="first_name">First Name</label>
          <input
            type="text"
            class="formInput"
            v-model="$parent.form.first_name"
            required
            id="first_name"
            name="first_name"
            autocomplete="off"
            spellcheck="false"
          />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label class="formLabel" for="last_name">Last Name</label>
          <input
            type="text"
            class="formInput"
            v-model="$parent.form.last_name"
            required
            id="last_name"
            name="last_name"
            autocomplete="off"
            spellcheck="false"
          />
        </div>
      </div>
    </div>

    <div class="row m-b-10">
      <div class="col-sm-6">
        <div class="form-group m-b-0">
          <label class="formLabel" for="email">Email Address</label>
          <input
            type="email"
            class="formInput"
            required
            id="email"
            name="email"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.email"
          />
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group m-b-0">
          <label class="formLabel" for="phone">Phone Number</label>
          <input
            type="text"
            class="formInput"
            required
            id="phone"
            name="phone"
            autocomplete="off"
            spellcheck="false"
            @input="$parent.form.phone = $event.target.value.trim()"
          />
          <div class="help-block">
            Please enter a valid 11 digit Nigeria phone number without country
            code
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="step-label">Address</div>
      <textarea
        class="formInput"
        name="address"
        id="address"
        required
        v-model="$parent.form.address"
      ></textarea>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="form-group m-b-0">
          <label class="formLabel" for="city">City</label>
          <input
            type="city"
            class="formInput"
            required
            id="city"
            name="city"
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.city"
          />
        </div>
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <div class="step-label">State</div>
          <select
            id="state"
            name="state"
            class="selectpicker form-control"
            required
            aria-required=""
            v-model="$parent.form.state"
          >
            <option value="">Select an option</option>
            <option v-for="(item, i) in states" :key="i" :value="item">
              {{ item }}
            </option>
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
      states: [
        "Abia",
        "Adamawa",
        "Akwa Ibom",
        "Anambra",
        "Bauchi",
        "Bayelsa",
        "Benue",
        "Borno",
        "Cross River",
        "Delta",
        "Ebonyi",
        "Edo",
        "Ekiti",
        "Enugu",
        "Gombe",
        "Imo",
        "Jigawa",
        "Kaduna",
        "Kano",
        "Katsina",
        "Kebbi",
        "Kogi",
        "Kwara",
        "Lagos",
        "Nasarawa",
        "Niger",
        "Ogun",
        "Ondo",
        "Osun",
        "Oyo",
        "Plateau",
        "Rivers",
        "Sokoto",
        "Taraba",
        "Yobe",
        "Zamfara",
        "Abuja (FCT)",
      ],
    };
  },
};
</script>

<style scoped>
@media (min-width: 767px) and (max-width: 1650px) {
  .m-b-10 {
    margin-bottom: 10px !important;
  }
  .m-b-0 {
    margin-bottom: 0px !important;
  }
}
</style>
