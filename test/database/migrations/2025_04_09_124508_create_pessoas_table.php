<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('email'); 
            $table->string('telefone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
