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
        Schema::create('servicesOptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // slug => Indentificador amigável para URLs, ex: intalacao-de-tomadas
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            // Enum dado para váriavel já que preço pode ser fixo ou específicado
            $table->enum('pricing_type', ['fixed', 'quote'])
                ->default('quote');

            $table->decimal('price', 10, 2)->nullable();
            $table->unsignedSmallInteger('duration_minutes')->nullable();

            $table->boolean('active')->default(true);

            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_options');
    }
};
