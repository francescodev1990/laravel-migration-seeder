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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('azienda');
            $table->text('stazione_di_partenza');
            $table->text('stazione_di_arrivo');
            $table->text('orario_di_partenza');
            $table->text('orario_di_arrivo');
            $table->text('codice_treno');
            $table->text('numero_carrozze');
            $table->text('in_orario');
            $table->text('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
