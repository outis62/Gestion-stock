<?php

use App\Models\Localite;
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
        Schema::create('paysans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->foreignIdFor(Localite::class)->nullable();
            $table->string('telephone');
            $table->foreignIdFor(OperationPaysane::class)->nullable();
            $table->timestamps();
        });
    }
/**
 * regele de gestion
 * un paysan possede au moins un champ
 * un paysan appartient a une cooperative
 */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paysans');
    }
};
