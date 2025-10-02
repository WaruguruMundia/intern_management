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
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            //Laravel provides built-in support for password hashing and authentication.
            //includes bcrypt hashing by default || Hash::make($password)
            $table->string('password'); // Store hashed passwords
            $table->enum('role', ['intern', 'mentor', 'hod'])->default('intern');   //user roles
            $table->string('university')->nullable(); //nullable
            $table->string('department')->nullable(); //for HODs and mentors
            $table->date('start_date')->nullable(); //intenrship or HOD assignment start date
            $table->date('end_date')->nullable();   //optional end date
            $table->rememberToken(); //for "remember me" functionality in login
            $table->timestamps();
        });
    }

    /**
     * for safe rolling back of the migration
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
