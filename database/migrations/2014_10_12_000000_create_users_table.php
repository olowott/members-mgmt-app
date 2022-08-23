<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //nullables
            $table->string('phone')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->integer('membership_year')->nullable();
            $table->string('image')->nullable();
            $table->text('profile_photo_path')->nullable();
            //foreignids 
            $table->foreignId('country_id');
            $table->foreignId('occupation_id');
            $table->foreignId('group_id');
            $table->foreignId('state_id');
            $table->foreignId('city_id');
            $table->foreignId('marital_status_id');
            $table->foreignId('church_id');
            $table->foreignId('hduhau_id');
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
            //token timestap 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
