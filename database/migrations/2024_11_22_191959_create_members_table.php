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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('gender');
            $table->string('membership_type');
            $table->string('membership_status');
            $table->string('fitness_goal');
            $table->string('pregnancy_status');
            $table->string('fees');
            $table->string('payment');
            $table->string('payment_method');
            $table->string('personal_trainer');
            $table->date('due_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
