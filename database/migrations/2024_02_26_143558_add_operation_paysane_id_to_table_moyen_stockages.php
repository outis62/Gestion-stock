<?php

use App\Models\OperationPaysane;
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
        Schema::table('moyen_stockages', function (Blueprint $table) {
            $table->foreignIdFor(OperationPaysane::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('moyen_stockages', function (Blueprint $table) {
            $table->dropColumn('operation_paysane_id');
        });
    }
};
