<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on(table:'users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('autor');
            $table->date('datadepublicacao');
            $table->string('edicao');
            $table->string('editora');
            $table->string('capa_livro')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

