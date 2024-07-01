<?php

use App\Models\Collecte;
use App\Models\InstitutFinancementPartenaire;
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
        Schema::create('financements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nature')->nullable();
            $table->string('detail')->nullable();
            $table->foreignIdFor(Collecte::class);
            $table->foreignIdFor(InstitutFinancementPartenaire::class);
            $table->string('destine')->default('collecte'); //collecte commercialisation les_deux
            $table->timestamps();
        });
    }
/**
 * regle de gestion
 *cooperative
 */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financements');
    }
};
