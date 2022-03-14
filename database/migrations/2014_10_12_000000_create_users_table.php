<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('password');
            $table->string('user_image')->nullable();
            $table->text('public_id')->nullable();

            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('position')->nullable();
            $table->string('share')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('bvn')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_num')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('residential_status')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('wdymtta')->nullable();
            $table->string('dependents')->nullable();
            $table->string('edu_level')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_name')->nullable();
            $table->string('director')->nullable();
            $table->string('secretary')->nullable();
            $table->boolean('registered')->nullable();
            $table->string('rc_num')->nullable();
            $table->string('establishment_date')->nullable();
            $table->string('business_address')->nullable();
            $table->unsignedBigInteger('b_country_id')->nullable();
            $table->unsignedBigInteger('b_state_id')->nullable();
            $table->unsignedBigInteger('b_city_id')->nullable();
            $table->string('b_wdymtta')->nullable();
            $table->string('owned_or_rented')->nullable();
            $table->string('outlets')->nullable();
            $table->string('total_employees')->nullable();
            $table->string('sales_method')->nullable();
            $table->string('industry')->nullable();
            $table->string('monthly_sales')->nullable();
            $table->string('monthly_expenses')->nullable();
            $table->string('business_duration')->nullable();
            $table->string('tin')->nullable();
            $table->string('b_id_type')->nullable();
            $table->string('b_id_num')->nullable();
            $table->string('seal')->nullable();
            $table->string('public_seal')->nullable();
            $table->string('cac7')->nullable();
            $table->string('public_id_cac7')->nullable();
            $table->string('cac2')->nullable();
            $table->string('public_id_cac2')->nullable();
            $table->string('cac_certificate')->nullable();
            $table->string('public_id_cac_certificate')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->boolean('has_online_banking')->nullable();
            $table->boolean('last_loan_period')->nullable();
            $table->string('loan_amount')->nullable();
            $table->string('bank_statement');
            $table->string('public_id_bank');
            $table->string('device_id')->nullable();



            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('set null');

            $table->foreign('state_id')
                ->references('id')->on('states')
                ->onDelete('set null');

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('set null');


            $table->foreign('b_country_id')
                ->references('id')->on('countries')
                ->onDelete('set null');

            $table->foreign('b_state_id')
                ->references('id')->on('states')
                ->onDelete('set null');

            $table->foreign('b_city_id')
                ->references('id')->on('cities')
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
        Schema::dropIfExists('users');
    }
}
