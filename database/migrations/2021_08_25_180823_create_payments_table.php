<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cpid')->nullable()->comment("Collects_Payment_Id");
            $table->unsignedBigInteger('amount')->nullable();
            $table->unsignedInteger('fee')->nullable();
            $table->string('status')->nullable();
            $table->string('ip')->nullable();
            $table->string('channel')->nullable();
            $table->string('method')->nullable();
            $table->string('reference')->nullable();
            $table->string('initiator')->default("api")->nullable();
            $table->string('reason')->default("loan")->nullable();
            $table->text('description')->nullable();
            $table->string('x_collect_signature')->nullable();
            $table->timestamp('charged_at')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('integrate_id')->nullable();
            $table->unsignedBigInteger('loan_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('integrate_id')
                    ->references('id')->on('integrates')
                    ->onDelete('set null');
            $table->foreign('loan_id')
                    ->references('id')->on('loans')
                    ->onDelete('set null');
            $table->foreign('admin_id')
                    ->references('id')->on('admins')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
