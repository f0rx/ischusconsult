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

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Date of Birth
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text dov"></div>
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
        Phone Number
      </div>
      <div class="col-md-9 col-sm-6 col-xs-12 confirm-text phone"></div>
    </div>

    <div class="fadeTop">
      <h3 class="step-sub-title">Contact Information</h3>
    </div>

    <div class="row fadeTop">
      <div class="col-md-3 col-sm-6 col-xs-12 text-right confirm-label">
        Receive Free Catalog?
      </div>
      <div
        class="col-md-9 col-sm-6 col-xs-12 confirm-text requestcatalog"
      ></div>
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
            <input id="agreement" name="agreement" type="checkbox" />I agree to
            the <a href="#" target="_blank">terms of service</a>.
          </label>
        </div>
        <a
          href="#"
          type="submit"
          class="btn btn-green btn-rounded finishBtn"
          onclick="event.preventDefault(); console.log('Now you see me')"
          >Ready, Let's Start!</a
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
