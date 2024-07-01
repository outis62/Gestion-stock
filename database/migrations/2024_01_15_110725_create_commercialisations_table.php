<?php

use App\Models\Collecte;
use App\Models\UniteMesure;
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
        Schema::create('commercialisations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('quantite')->nullable();
            $table->foreignIdFor(UniteMesure::class)->nullable();
            $table->string('prix')->nullable();
            $table->foreignIdFor(Collecte::class);
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
        Schema::dropIfExists('commercialisations');
    }
};
