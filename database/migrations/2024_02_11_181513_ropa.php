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
        Schema::create('ropa', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->decimal('precio', 8, 2);
            $table->string('tipo');
            $table->string('marca');
            $table->text('descripcion');
            $table->string('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ropa');
    }
};
