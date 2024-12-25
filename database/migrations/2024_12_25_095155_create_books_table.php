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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->string('description');
            $table->float('rating');
            $table->string('author');
            $table->string('synopsis');
            $table->string('cover_url');
            $table->string('tags');
            $table->date('publication_date');
            $table->integer('number_of_pages');
            $table->string('publisher');
            $table->string('language');
            $table->string('characters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
