<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTableSecond extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->time("orario_partenza");
            $table->time("orario_arrivo");
            $table->mediumText('codice_treno');
            $table->mediumInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
}
