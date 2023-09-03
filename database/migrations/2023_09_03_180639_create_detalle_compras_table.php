<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compra_id');
            $table->foreign('compra_id')->references('id')->on('compras');   
            $table->unsignedBigInteger('articulo_id');
            $table->foreign('articulo_id')->references('id')->on('articulos');   
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->decimal('descuento');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_compras');
    }
};
