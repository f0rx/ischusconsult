<template>
  <div>
    <h2 class="step-title">Confirm Details</h2>

    <div class="fadeTop">
      <h3 class="step-sub-title">Personal Details</h3>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        First Name
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text first_name"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Last Name
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text last_name"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Email
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text email"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Phone Number
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text phone"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Address
      </div>

      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text">
        <span class="address"></span>
        <span class="city"></span>
        <span class="state"></span>
      </div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Gender
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text gender"></div>
    </div>

    <div class="row fadeTop" v-show="$parent.form.dob != null">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Date of Birth
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text dob"></div>
    </div>

    <div
      class="row fadeTop"
      v-show="$parent.form.age != '' || $parent.form.age != ''"
    >
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Age
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text age"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Marital Status
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text marital_status"
      ></div>
    </div>

    <div class="fadeTop">
      <h3 class="step-sub-title">Work Experience</h3>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Your Preferred Role
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text preferred_role"
      ></div>
    </div>
    
    <div class="row fadeTop" v-show="$parent.form.preferred_role_2 != null">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Your Preferred Role 2
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text preferred_role_2"
      ></div>
    </div>
    
    <div class="row fadeTop" v-show="$parent.form.preferred_role_3 != null">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Your Preferred Role 3
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text preferred_role_3"
      ></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Most Recent Role
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text recent_job_title"
      ></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Years of Experience
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text total_years_of_xp"
      ></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        About You
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text summary"></div>
    </div>

    <div class="fadeTop">
      <h3 class="step-sub-title">Contact Information</h3>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Receive Free Job Postings to e-mail?
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text subscribed"></div>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Communication Preference
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text communicationprefer"
      ></div>
    </div>

    <div class="fadeTop">
      <div class="step-confirm-buttons">
        <div>
          <label class="checkbox-inline agreement">
            <input
              id="agreement"
              name="agreement"
              type="checkbox"
              v-model="$parent.form.agreement"
            />I agree to the
            <a
              href="#"
              @click="$event.preventDefault(), ($parent.modal.isOpen = true)"
              target="_blank"
              >terms &amp; conditions.</a
            >.
          </label>
        </div>
        <a
          href="#"
          type="submit"
          class="btn btn-green btn-rounded finishBtn"
          @click="$parent.submit($event)"
          >Thank you</a
        >
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