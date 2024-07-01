<?php

use App\Models\ModeAcquisition;
use App\Models\OperationPaysane;
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
        Schema::create('moyen_stockages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('libelle');
            $table->integer('capacite');
            $table->string('etat_observation')->nullable();
            $table->integer('annee_acquisition')->nullable();
            $table->foreignIdFor(ModeAcquisition::class);
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
        Schema::dropIfExists('moyen_stockages');
    }
};
