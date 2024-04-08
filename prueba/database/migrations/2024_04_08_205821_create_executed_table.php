<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('executed')) {
            Schema::create('executed', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->double('total_orders', 8, 2);
                $table->double('total_cost', 8, 2);
                // Otros campos de la tabla 'executed' según tus requisitos
                $table->timestamps(); // Esto agregará los campos 'created_at' y 'updated_at'
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('executed');
    }
}
