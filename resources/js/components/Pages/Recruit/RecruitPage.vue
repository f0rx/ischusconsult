<template>
  <div class="container">
    <div class="row">
      <div class="luna-signup-left">
        <img
          class="luna-signup-logo img-responsive"
          src="/images/logo.png"
          alt="logo"
        />
        <div class="luna-navigation">
          <a class="toPrev prevStep"><i class="icon icon-arrow-up2"></i></a>
          <ul class="dots"></ul>
          <a class="toNext nextStep"><i class="icon icon-arrow-down2"></i></a>
        </div>
      </div>
      <div class="luna-signup-right">
        <div class="container-fluid">
          <div class="steps-count">
            STEP <span class="step-current">1</span>/<span
              class="step-count"
            ></span>
          </div>
          <form action="#" name="signupForm">
            <div class="luna-steps">
              <div class="step step-active" data-step-id="1">
                <personal-details></personal-details>
              </div>
              <div class="step" data-step-id="2">
                <personal-details-2></personal-details-2>
              </div>
              <div class="step" data-step-id="3">
                <work-experience></work-experience>
              </div>
              <div class="step" data-step-id="4">
                <contact-information></contact-information>
              </div>
              <div class="step" data-step-id="5">
                <documents-upload></documents-upload>
              </div>
              <div class="step step-confirm" data-step-id="6">
                <finish />
              </div>
            </div>
          </form>
          <div class="button-container">
            <div>
              <a
                href="javascript:void(0)"
                class="btn btn-blue btn-rounded nextStep"
                tabindex="0"
                >Continue →</a
              >
              <span>or press "Enter"</span>
            </div>
          </div>
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
