<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('offres_emploi', function (Blueprint $table) {
            $table->id();
            $table->string('fonction');
            $table->integer('experience_min');
            $table->integer('experience_max');
            $table->string('niveau_etude');
            $table->string('type_contrat');
            $table->unsignedBigInteger('departement_id')->nullable();
            $table->timestamps();
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres_emploi');
    }
};
