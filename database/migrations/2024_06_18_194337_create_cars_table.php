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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->timestamps();
        });

         DB::table('cars')->insert([
            ['make' => 'Toyota', 'model' => 'Camry', 'year' => 2022, 'color' => 'Blue'],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2021, 'color' => 'Red'],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => 2020, 'color' => 'Black'],
            // Puedes agregar más registros aquí
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
