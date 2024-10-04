<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifasDeudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas_deudas', function (Blueprint $table) {
            $table->id(); // id_tarifa_deuda
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('mes');
            $table->integer('año');
            $table->decimal('tarifa_semanal', 10, 2);
            $table->decimal('deuda_anterior', 10, 2);
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
        Schema::dropIfExists('tarifas_deudas');
    }
}
