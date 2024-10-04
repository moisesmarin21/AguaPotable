<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeudaActualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deuda_actual', function (Blueprint $table) {
            $table->id(); // id_deuda_actual
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('mes');
            $table->integer('año');
            $table->decimal('total_pago', 10, 2);
            $table->decimal('deuda_actual', 10, 2);
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
        Schema::dropIfExists('deuda_actual');
    }
}
