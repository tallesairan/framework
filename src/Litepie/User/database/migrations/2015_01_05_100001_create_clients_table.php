<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * Table: users
         */
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('reporting_to')->nullable()->default(0);
            $table->string('firstName', 100)->nullable();
            $table->string('lastName', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('api_token', 60)->unique();
            $table->string('remember_token', 255)->nullable();
            $table->string('sex', 233)->nullable();
            $table->string('company', 233)->nullable();
            $table->string('dob',233)->nullable();
            $table->string('cpf',233)->nullable();
            $table->string('cnpj',233)->nullable();
            $table->string('personType',233)->nullable();
            $table->integer('expiry',233)->nullable();
            $table->string('designation', 50)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('billingAddres1', 255)->nullable();
            $table->string('billingAddres2', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('postcode', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->integer('country')->nullable();
            $table->string('photo', 500)->nullable();
            $table->string('web', 100)->nullable();
            $table->longText('permissions')->nullable();
            $table->enum('status', ['New', 'Active', 'Suspended', 'Locked'])->default('New')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 50)->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
