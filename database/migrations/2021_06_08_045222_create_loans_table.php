<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('email');
            $table->string('reason')->nullable();
            $table->double('amount',11,2);
            $table->string('loan_tenor')->nullable();
            $table->string('interest')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->boolean('acknowledgement')->default(0)->nullable();
            $table->boolean('acknowledge_active_page')->default(0)->nullable();
            $table->string('payback_date')->nullable();
            $table->string('lpofile')->nullable();
            $table->string('public_id_lpo')->nullable();
            $table->string('proformafile')->nullable();
            $table->string('public_id_proforma')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
