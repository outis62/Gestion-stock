<?php

use App\Models\Prospection;
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
        Schema::create('besoins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('quantite');
            $table->foreignIdFor(Prospection::class);
            $table->foreignIdFor(Speculation::class);
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
        Schema::dropIfExists('besoins');
    }
};
