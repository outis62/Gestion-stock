<?php

use App\Models\Champ;
use App\Models\Speculation;
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
        Schema::create('cultures', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('surface');
            $table->foreignIdFor(Speculation::class);
            $table->foreignIdFor(Champ::class);
            $table->timestamps();
        });
    }
/**
 * regle de gestion
 * un paysan cultive une et une seule speculation sur un champ
 */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultures');
    }
};
