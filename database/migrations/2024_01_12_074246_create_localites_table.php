<?php

use App\Models\Localite;
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
        Schema::create('localites', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('libelle');
            $table->foreignIdFor(Localite::class)->nullable();
            $table->string('type'); //region departement commune village arrondissement
            $table->timestamps();
        });
    }
    /**
     * la dependance entre localite 
     * Village et arrondissement depend de commune qui depend du departement a son tour de la region
     * 
     * regle de gestion
     * une localite peut etre couvert par plusieurs cooperative
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localites');
    }
};
