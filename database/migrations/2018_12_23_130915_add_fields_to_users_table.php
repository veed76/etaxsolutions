<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('bdm_id')->nullable();
            $table->string('name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->float('available_balance',8,2)->nullable();
            $table->float('reward_balance',8,2)->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('primary_mobile')->unique();
            $table->string('etax_code')->unique();
            $table->bigInteger('alternate_mobile')->nullable();
            $table->date('dob')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('present_address')->nullable();
            $table->integer('pincode')->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->string('city')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('reject_reason')->nullable();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
