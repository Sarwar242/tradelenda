<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('ba_auth')->nullable();
            $table->string('currency')->default("NGN")->nullable();
            $table->string('country')->default("NG")->nullable();
            $table->string('customer_code')->nullable();
            $table->string('payment_method')->default("collect")->nullable();
            $table->string('account_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('signature')->nullable();
            $table->boolean('is_reusable')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_connected')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('integrates');
    }
}
