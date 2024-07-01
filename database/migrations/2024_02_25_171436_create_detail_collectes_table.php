<?php

use App\Models\Champ;
use App\Models\Collecte;
use App\Models\Paysan;
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
        Schema::create('detail_collectes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(Paysan::class);
            $table->foreignIdFor(Collecte::class);
            $table->foreignIdFor(Champ::class)->nullable();
            $table->integer('quantite');
            $table->foreignIdFor(UniteMesure::class);
            $table->string('commentaire')->nullable();
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
        Schema::dropIfExists('detail_collectes');
    }
};
