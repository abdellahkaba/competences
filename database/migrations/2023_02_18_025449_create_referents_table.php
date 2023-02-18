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
        Schema::create('referents', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet')->nullable();
            $table->string('phone_fixe')->nullable()->unique();
            $table->string('phone_mobile')->nullable()->unique();
            $table->string('adresse_email')->nullable()->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('referents');
    }
};
