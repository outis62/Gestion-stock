<?php

use App\Models\MoyenStockage;
use App\Models\OperationPaysane;
use App\Models\Speculation;
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
        Schema::create('collectes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('quantite');
            $table->integer('rendement_production');
            $table->string('superficie');
            $table->foreignIdFor(OperationPaysane::class);
            $table->foreignIdFor(MoyenStockage::class);
            $table->foreignIdFor(Speculation::class);
            $table->foreignIdFor(UniteMesure::class);
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
        Schema::dropIfExists('collectes');
    }
};
