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
        Schema::create('produit', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('nom'); // Nom du produit
            $table->text('description')->nullable(); // Description du produit (peut être vide)
            $table->decimal('prix', 8, 2); // Prix avec 2 décimales (max: 999999.99)
            $table->integer('quantite'); // Quantité en stock
            $table->unsignedBigInteger('categorie_id'); // Clé étrangère pour la catégorie
            $table->string('image')->nullable(); // Lien vers l'image (peut être vide)
            $table->timestamps(); // created_at et updated_at

            // Définir une relation avec la table categorie
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit');
    }
};
