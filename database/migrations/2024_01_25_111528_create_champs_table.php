<?php

use App\Models\Localite;
use App\Models\Paysan;
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
        Schema::create('champs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(Localite::class)->nullable();
            $table->foreignIdFor(Paysan::class);
            $table->string('surface');
            $table->timestamps();
        });
    }
/**
 * regle de gestion
 * un champ appartient a un et un seul paysan
 * un champ est dans une et une seule localite
 */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champs');
    }
};
