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
          <label class="formLabel" for="email">What is your email?</label>
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
            id="phone"
            name="phone"
            required
            autocomplete="off"
            spellcheck="false"
            v-model="$parent.form.phone"
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
      <div class="col-md-6">
        <div class="form-group">
          <div class="step-label">City</div>
          <select
            id="city"
            name="city"
            class="selectpicker form-control"
            required
            aria-required=""
            v-model="$parent.form.city"
          >
            <option value="">Select an option</option>
            <option value="Alabama ">Alabama</option>
            <option value="Alaska ">Alaska</option>
            <option value="Arizona ">Arizona</option>
            <option value="Arkansas ">Arkansas</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
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
            <option value="lagos">Lagos</option>
            <option value="abuja">Abuja</option>
            <option value="ogun ">Ogun</option>
            <option value="rivers">Rivers</option>
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
