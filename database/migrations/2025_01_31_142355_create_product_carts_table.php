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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();



            // Foreign Key
            $table->string('user_email', 50);
            $table->unsignedBigInteger("product_id");

            $table->string('color', 50);
            $table->string('size', 50);

            // Relationship
            $table->foreign('user_email')->references('email')->on('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign("product_id")->references("id")->on("products")->restrictOnDelete()->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_carts');
    }
};
