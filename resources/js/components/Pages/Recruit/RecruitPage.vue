<template>
  <div class="container">
    <div class="row">
      <div class="luna-signup-left">
        <a :href="appUrl">
          <img
            class="luna-signup-logo img-responsive"
            src="/images/logo.png"
            alt="logo"
          />
        </a>
        <div class="luna-navigation">
          <a class="toPrev prevStep"><i class="icon icon-arrow-up2"></i></a>
          <ul class="dots"></ul>
          <a class="toNext nextStep"><i class="icon icon-arrow-down2"></i></a>
        </div>
      </div>

      <v-modal v-model="modal.isOpen" :title="modal.title">
        <p v-text="modal.html"></p>
      </v-modal>

      <div class="luna-signup-right">
        <div class="container-fluid">
          <div class="steps-count">
            STEP <span class="step-current">1</span>/<span
              class="step-count"
            ></span>
          </div>
          <form
            :action="action"
            method="POST"
            name="signupForm"
            ref="signupForm"
            enctype="multipart/form-data"
          >
            <input
              type="hidden"
              name="_method"
              value="PUT"
              v-if="isFormUpdating"
            />

            <input type="hidden" name="_token" v-model="csrfToken" />

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
  props: [
    "appUrl",
    "action",
    "csrfToken",
    "session",
    "isUpdating",

    "firstName",
    "lastName",
    "email",
    "phone",
    "maritalStatus",
    "age",
    "address",
    "city",
    "state",
    "gender",
    "preferredRole",
    "preferredRole2",
    "preferredRole3",
    "recentJobTitle",
    "totalYearsOfXp",
    "summary",
  ],
  data() {
    return {
      modal: {
        isOpen: false,
        title: `Terms and Conditions`,
        html: `I certify that the statements made in this application, on my Resume
          and any other attachments, and any other information that I provide to
          Ischus Consult is true and correct to the best of my knowledge. I
          further understand that any misinformation or falsification of
          information on this application or any other document including, but
          not limited to the authorisation for background investigation will be
          cause for denial or termination of employment.`,
      },
      errors: [],
      isFormUpdating: false,
      form: {
        first_name: "",
        last_name: "",
        email: "",
        phone: "",
        marital_status: "",
        address: "",
        city: "",
        state: "",
        gender: "",
        dob: null,
        age: null,
        preferred_role: "",
        preferred_role_2: "",
        preferred_role_3: "",
        recent_job_title: "",
        total_years_of_xp: "",
        summary: "",
        agreement: false,
      },
    };
  },

  methods: {
    _calculateAge(birthday) {
      var ageDifMs = Date.now() - birthday.getTime();
      var ageDate = new Date(ageDifMs);
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    },
    submit(event) {
      event.preventDefault();
      if (this.form.age == null) {
        this.form.age = this._calculateAge(this.form.dob);
      }
      if (this.form.agreement) this.$refs.signupForm.submit();
    },
  },

  created() {
    this.form.first_name =
      typeof this.firstName != "undefined" ? this.firstName : null;
    this.form.last_name =
      typeof this.lastName != "undefined" ? this.lastName : null;
    this.form.email = typeof this.email != "undefined" ? this.email : null;
    this.form.phone = typeof this.phone != "undefined" ? this.phone : null;
    this.form.marital_status =
      typeof this.maritalStatus != "undefined" ? this.maritalStatus : null;
    this.form.address =
      typeof this.address != "undefined" ? this.address : null;
    this.form.city = typeof this.city != "undefined" ? this.city : null;
    this.form.state = typeof this.state != "undefined" ? this.state : null;
    this.form.gender = typeof this.gender != "undefined" ? this.gender : null;
    this.form.dob = typeof this.dob != "undefined" ? this.dob : null;
    this.form.age = typeof this.age != "undefined" ? this.age : null;
    this.form.preferred_role =
      typeof this.preferredRole != "undefined" ? this.preferredRole : null;
    this.form.preferred_role_2 =
      typeof this.preferredRole2 != "undefined" ? this.preferredRole2 : null;
    this.form.preferred_role_3 =
      typeof this.preferredRole3 != "undefined" ? this.preferredRole3 : null;
    this.form.recent_job_title =
      typeof this.recentJobTitle != "undefined" ? this.recentJobTitle : null;
    this.form.total_years_of_xp =
      typeof this.totalYearsOfXp != "undefined" ? this.totalYearsOfXp : null;
    this.form.summary =
      typeof this.summary != "undefined" ? this.summary : null;
    this.form.agreement =
      typeof this.agreement != "undefined" ? this.agreement : null;

    // Check if user is updating response (form)
    this.isFormUpdating = this.isUpdating == 1;

    // populate error fields
    let validation = JSON.parse(this.session == "" ? null : this.session);

    console.log(this.session);
    console.log(validation);

    if (validation != null) {
      // Convert the incoming Laravel error object to Javascript Array
      this.errors = Object.keys(validation).map((i) => validation[i]);

      // Show toastr if there are form errors
      this.errors.forEach((inner) =>
        inner.forEach((error) =>
          // If errors.length <= 3 increase duration
          window.toastError(error, "", this.errors.length <= 3 ? 7600 : 3200)
        )
      );
    }
  },
};
</script>