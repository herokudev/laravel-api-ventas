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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');    
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers');   
            $table->string('fecha'); 
            $table->string('tipo_comprobante');
            $table->string('serie');
            $table->string('correlativo');
            $table->boolean('activo')->default(true);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
