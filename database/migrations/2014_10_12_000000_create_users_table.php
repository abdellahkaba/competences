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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('situa_matrimoniale');
            $table->integer('nbr_enfant');
            $table->date('date_naiss');
            $table->string('sexe');
            $table->string('pays_naiss');
            $table->string('ville_naiss');
            $table->string('pays_residence');
            $table->string('ville_residence');
            $table->string('nationalite_origine');
            $table->string('nationalite_actuelle');
            $table->string('piece_identite');
            $table->integer('numero_piece_identite');
            $table->date('date_debut_piece');
            $table->date('date_fin_piece');
            $table->string('centre_interet');
            $table->string('cv');
            $table->string('photo');
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
        Schema::dropIfExists('users');
    }
};
