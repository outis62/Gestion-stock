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
        Schema::create('operation_paysanes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('libelle');
            $table->enum('niveau', [1, 2, 3])->default(1);
            $table->timestamp('date_creation')->default(now());
            $table->string('numero_recipisse')->nullable();
            $table->string('rccm_ninea')->nullable();
            $table->string('statut_juridique');
            $table->string('siege');
            $table->string('filiere_agricole')->nullable();
            $table->integer('nombre_membre')->nullable();
            $table->integer('nombre_base')->nullable();
            $table->timestamps();

        });
    }
    /**
     * Regle de gestion
     * une cooperative paysane peut couvrir plusieurs villages
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_paysanes');
    }
};