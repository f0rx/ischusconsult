<div class="row m-b-lg">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group col-md-8">
                <x-welcome.input-field
                    :show-label="true"
                    :is-rounded="true"
                    id="wanted-job-title"
                    title="Job Title"
                    type="text"
                    name="job_title"
                    placeholder="Wanted Job Title"
                />
            </div>

            <div class="form-group col-md-6" class="control-label">
                <x-welcome.input-field
                    :show-label="true"
                    :is-rounded="true"
                    id="first-name"
                    title="First Name"
                    class="ichigo"
                    type="text"
                    name="first_name"
                    placeholder="First Name"
                />
            </div>

            <div class="form-group col-md-6" class="control-label">
                <x-welcome.input-field
                    :show-label="true"
                    :is-rounded="true"
                    id="last-name"
                    title="Last Name"
                    type="text"
                    name="last_name"
                    placeholder="Last Name"
                />
            </div>

            <div class="form-group col-md-12" class="control-label">
                <x-welcome.input-field
                    :show-label="true"
                    :is-rounded="true"
                    id="email"
                    title="Email"
                    type="email"
                    name="last_name"
                    placeholder="Email Address"
                />
            </div>

            <div class="form-group col-md-12" class="control-label">
                <x-welcome.input-field
                    :show-label="true"
                    :is-rounded="true"
                    id="phone"
                    title="Phone"
                    type="tel"
                    name="phone"
                    placeholder="Phone Number"
                />
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h3>Personal Info</h3>
        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
    </div>
</div>
