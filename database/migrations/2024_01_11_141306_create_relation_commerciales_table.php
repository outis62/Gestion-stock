<?php

use App\Models\Acheteur;
use App\Models\Commercialisation;
use App\Models\Prospection;
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
        Schema::create('relation_commerciales', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nature')->nullable(); //agro-industrie agregateurs bana-bana besoin 
            $table->foreignIdFor(Acheteur::class)->nullable();
            $table->foreignIdFor(Prospection::class)->nullable();
            $table->foreignIdFor(Commercialisation::class);
            $table->string('quantite_achete')->nullable();
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
        Schema::dropIfExists('relation_commerciales');
    }
};
