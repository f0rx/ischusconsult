<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('extension')->nullable();
            $table->string('full_path')->nullable();
            $table->string('size')->nullable();
            $table->boolean('is_public')->default(true);

            $table->unsignedInteger('job_application_id')->nullable();
            $table->foreign('job_application_id')
                ->references('id')->on('job_applications')->onDelete('cascade');

            $table->string('application_id')->nullable();
            $table->foreign('application_id')
                ->references('application_id')
                ->on('job_applications')
                ->onDelete('cascade');
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
        Schema::dropIfExists('file_documents');
    }
}
