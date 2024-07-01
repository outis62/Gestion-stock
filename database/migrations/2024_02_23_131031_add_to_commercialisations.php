<?php

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
        Schema::table('commercialisations', function (Blueprint $table) {
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commercialisations', function (Blueprint $table) {
            $table->dropColumn('date_debut');
            $table->dropColumn('date_fin');
        });
    }
};
