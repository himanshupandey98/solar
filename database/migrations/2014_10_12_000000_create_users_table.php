<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobileno')->nullable();
            $table->string('firmname')->nullable();
            $table->string('gstno')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();

            $table->text('wiringcharge')->nullable();
            $table->text('structurecharge')->nullable();
            $table->text('totalcharge')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
}
