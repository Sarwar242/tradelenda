<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('title');
            $table->string('address');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country')->nullable();
            $table->string('dob')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('gemail');
            $table->string('occupation')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('bvn')->nullable();
            $table->string('wic')->nullable();
            $table->string('phoneno')->nullable();
            $table->timestamps();

            $table->foreign('admin_id')
                ->references('id')->on('admins')
                ->onDelete('set null');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sure');
    }
}
