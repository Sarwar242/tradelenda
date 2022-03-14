<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_no')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->boolean('pcft')->default(0)->nullable()->comment('Password changed for the first time.');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('type')
                ->default('Super Admin')
                ->comment('Admin|Super Admin');
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
        Schema::dropIfExists('admins');
    }
}
