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
            $table->string('first_name')->nullable(); //first name 
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
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
            $table->foreignId('country_id')->nullable();;
            $table->foreignId('occupation_id')->nullable();;
            $table->foreignId('group_id')->nullable();;
            $table->foreignId('state_id')->nullable();;
            $table->foreignId('city_id')->nullable();;
            $table->foreignId('marital_status_id')->nullable();;
            $table->foreignId('church_id')->nullable();;
            $table->foreignId('hduhau_id')->nullable();;
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive')->nullable();;
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
