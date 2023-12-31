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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 75);
            $table->string('nivel', 35);
            $table->string('horasAcademicas', 35)->nullable();
            $table->unsignedBigInteger('profesor_id');
           // $table->foreign('profesor_id')->references('id')->on('profesors');

           // Horrela ezingo dugu profesor bat ezabatu cursos baldin baditu
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('restrict');

            // Kasu honetan profesor bat ezabatzerakoan, curso-an NULL jarriko dio eremu honetan
            // Baina hori horrela nahi izatekotan "nullable" jarri beharko genioke hori eremuari
            //$table->unsignedBigInteger('profesor_id')->nullable();
           // $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
