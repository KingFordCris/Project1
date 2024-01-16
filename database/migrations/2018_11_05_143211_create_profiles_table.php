<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('scholarship_id')->unsigned();
            $table->boolean('is_confirmed')->default(0);
            $table->string('sem');
            $table->integer('sy');
            $table->integer('sy2');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('course');
            $table->string('yrLevel');
            $table->string('sex');
            $table->date('bDate');
            $table->integer('age');
            $table->string('bPlace');
            $table->string('status');
            $table->string('religion');
            $table->string('contactNum');
            $table->string('citizen');
            $table->string('homeAdd');
            $table->string('acad1')->nullable();
            $table->string('acad2')->nullable();
            $table->string('acad3')->nullable();
            $table->string('school1')->nullable();
            $table->string('school2')->nullable();
            $table->string('school3')->nullable();
            $table->string('dy1')->nullable();
            $table->string('dy2')->nullable();
            $table->string('dy3')->nullable();
            $table->integer('highestgrade');
            $table->integer('lowestgrade');
            $table->integer('average');
            $table->string('f_liv')->nullable();
            $table->string('m_liv')->nullable();
            $table->string('f_dec')->nullable();
            $table->string('m_dec')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->integer('f_age')->nullable();
            $table->integer('m_age')->nullable();
            $table->string('f_address')->nullable();
            $table->string('m_address')->nullable();
            $table->date('f_birthdate')->nullable();
            $table->date('m_birthdate')->nullable();
            $table->string('f_occupation')->nullable();
            $table->string('m_occupation')->nullable();
            $table->string('f_office')->nullable();
            $table->string('m_office')->nullable();
            $table->string('f_educational')->nullable();
            $table->string('m_educational')->nullable();
            $table->string('f_contact')->nullable();
            $table->string('m_contact')->nullable();
            $table->integer('f_monthly')->nullable();
            $table->integer('m_monthly')->nullable();
            $table->string('bs_name1')->nullable();
            $table->string('bs_name2')->nullable();
            $table->string('bs_name3')->nullable();
            $table->string('bs_name4')->nullable();
            $table->string('bs_name5')->nullable();
            $table->string('bs_name6')->nullable();
            $table->string('bs_age1')->nullable();
            $table->string('bs_age2')->nullable();
            $table->string('bs_age3')->nullable();
            $table->string('bs_age4')->nullable();
            $table->string('bs_age5')->nullable();
            $table->string('bs_age6')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
