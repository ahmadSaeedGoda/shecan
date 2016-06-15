<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('company_id')->unsigned()->default(0);
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('industry_id')->unsigned()->default(0);
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
            $table->text('description');
            $table->boolean('Publish');
            $table->string('country');
            $table->string('city');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('jobs');
    }

}
