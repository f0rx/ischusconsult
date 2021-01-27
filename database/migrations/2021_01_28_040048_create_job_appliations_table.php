<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_appliations', function (Blueprint $table) {
            $table->id();
            $table->string('application_id');

            $table->string('first_name')->nullable();
            $table->string('last_name');
            $table->string('title')->nullable();
            $table->string('email');
            $table->string('gender')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->longText('address');
            $table->longText('address2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('specialization')->nullable();
            $table->string('preferred_role')->nullable();
            $table->longText('summary')->nullable();
            $table->smallInteger('total_years_of_xp')->nullable();
            $table->string('recent_job_title')->nullable();
            $table->string('year_of_degree_certificate')->nullable();
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
        Schema::dropIfExists('job_appliations');
    }
}
