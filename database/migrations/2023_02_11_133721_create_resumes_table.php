<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->enum('maritial_status', ['married', 'unmarried']);
            $table->string('nationality');
            $table->string('religion');
            $table->text('address');
            $table->text('objective')->nullable();
            $table->string('level_of_education')->nullable();
            $table->string('degree_title')->nullable();
            $table->string('major')->nullable();
            $table->string('institute')->nullable();
            $table->enum('result', ['first_class', 'second_class', 'third_class'])->nullable();
            $table->integer('year_of_passing')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_business')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('responsibilities')->nullable();
            $table->string('company_location')->nullable();
            $table->integer('employment_year')->nullable();
            $table->integer('employment_month')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
