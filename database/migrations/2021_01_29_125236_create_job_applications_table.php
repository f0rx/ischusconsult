<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_id');

            $table->string('first_name')->nullable();
            $table->string('last_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->longText('address');

            $table->string('city');
            $table->string('state');
            $table->string('gender')->nullable();
            $table->dateTime('dob')->nullable();

            $table->string('specialization')->nullable();
            $table->string('preferred_role')->nullable();
            $table->string('recent_job_title')->nullable();
            $table->string('highest_role')->nullable();
            $table->smallInteger('total_years_of_xp')->nullable();
            $table->longText('summary')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
