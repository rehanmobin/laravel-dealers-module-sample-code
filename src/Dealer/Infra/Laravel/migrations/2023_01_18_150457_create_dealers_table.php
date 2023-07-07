<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('licence_number')->unique();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('title', 100)->nullable();
            $table->string('website', 50)->nullable();
            $table->string('telephone', 100)->nullable();
            $table->string('password');
            $table->string('status', 100);
            $table->string('street_address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('zip_code', 100)->nullable();
            $table->integer('average_monthly_units')->nullable();
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
        Schema::dropIfExists('dealers');
    }
};
