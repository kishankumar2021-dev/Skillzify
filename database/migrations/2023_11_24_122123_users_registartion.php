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
        Schema::create('user_registations', function (Blueprint $table) {
            $table->id();
            $table->string('frist_name');
            $table->string('last_name');
            $table->string('mobile_numabr');
            $table->string('email_id')->uniqe();
            $table->string('password');
            $table->string('confirm_password');
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
        Schema::dropIfExists('user_registations');
    }
};
