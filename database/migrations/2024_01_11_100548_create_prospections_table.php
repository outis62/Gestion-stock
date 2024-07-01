<?php

use App\Models\User;
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
        Schema::create('prospections', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom_structure');
            $table->string('rccm_ninea')->nullable();
            $table->string('statut_juridique')->nullable();
            $table->string('adresse_structure')->nullable();
            $table->string('siege')->nullable();
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('prospections');
    }
};
