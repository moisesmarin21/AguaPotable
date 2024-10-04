<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosSemanalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_semanales', function (Blueprint $table) {
            $table->id(); // id_pago
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('mes');
            $table->integer('año');
            $table->integer('semana');
            $table->string('recibo_numero', 50)->nullable();
            $table->decimal('importe', 10, 2);
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
        Schema::dropIfExists('pagos_semanales');
    }
}
