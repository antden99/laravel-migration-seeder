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
        Schema::create('tains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',20); //varchar massimo 20 caratteri
            $table->string('departure_station',50); //varchar massimo 50 caratteri
            $table->string('destination',50); //varchar massimo 50 caratteri
            $table->time('departure_time')->nullable(); //tempo di partenza definito come time che può essere vuoto
            $table->time('arrival_time')->nullable(); //tempo di arrivo definito come time che può essere vuoto
            $table->string('train_code',10)->nullable(); //codice treno massimo 10 caratteri
            $table->integer('carriage_number')->nullable(); //numero cabina 
            $table->boolean('on_time')->default(true); //valore booleano che di defaul è true, il che significa treno in orario
            $table->decimal('price',5,2)->unsigned(); //valore del costo, massimo 5 numeri, 2 dopo la virgola
            $table->boolean('is_deleted')->default(false); //valore booleano che di defaul è false, il che significa treno non è cancellato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tains');
    }
};
