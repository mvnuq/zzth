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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->timestamps();
            $table-> string("title", 500)->nullable();
            $table ->string ("slug", 500)->nullable();
            $table ->text ("content")->nullable();
            $table ->text ("description")->nullable();

            $table -> string ("image")->nullable();
            $table -> enum("posted",['yes','not'])->default('not');

            $table->foreignId('category_id')->constrained()
            ->onDelete('cascade');

            



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};