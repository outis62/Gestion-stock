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
        Schema::table('unite_mesures', function (Blueprint $table) {
            //
            $table->string('symbole');
            $table->boolean('base')->default(false);
            $table->decimal('conversion', 7, 3)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unite_mesures', function (Blueprint $table) {
            //
            $table->dropColumn('symbole');
            $table->dropColumn('base');
            $table->dropColumn('conversion');
        });
    }
};
