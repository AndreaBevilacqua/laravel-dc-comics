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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('tilte', 100)->unique();
            $table->text('description')->nullable();
            $table->string('thumb',200);
            $table->float('price', 10, 2);
            $table->string('series', 40);
            $table->date('sale_date');
            $table->string('type', 20);
            $table->string('artists',255);
            $table->string('writers',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
