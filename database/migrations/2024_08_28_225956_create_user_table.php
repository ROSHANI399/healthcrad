<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('username');
            $table->string('type');
            $table->string('password');
            $table->string('salt');
            $table->string('email');
            $table->string('activation_code');
            $table->string('forgotten_password_code');
            $table->string('forgotten_password_time');
            $table->string('remember_code');
            $table->string('created_on');
            $table->string('last_login');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->string('phone');
            $table->string('hospital_ion_id	');
            $table->string('image');
            $table->string('wallet');
            $table->string('emergency_mobile_no_1');
            $table->string('emergency_mobile_no_2');
            $table->string('emergency_mobile_no_3');
            $table->string('otp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
