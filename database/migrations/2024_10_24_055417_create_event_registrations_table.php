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
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('secure_id')->unique();
            $table->string('name');
            $table->string('designation');
            $table->string('personal_email')->unique();
            $table->string('office_email')->unique();
            $table->string('mobile_number');
            $table->enum('gender',['male','female']);
            $table->enum('food_choice',['vegetarian','non-vegetarian']);
            $table->enum('beverages_choice',['alcoholic','non-alcoholic']);
            $table->enum('apparel_size',['M','L','XL']);
            $table->string('organisation_name');
            $table->enum('organisation_type',['Central Government','State Government','PSU/Corporation']);
            $table->string('home_address')->nullable();
            $table->string('office_address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registrations');
    }
};
