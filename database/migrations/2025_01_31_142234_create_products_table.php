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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title", 200);
            $table->string("short_des", 600);
            $table->string("price", 50);
            $table->boolean("discount")->default(0);
            $table->string("discount_price", 50)->nullable();
            $table->string("image", 200);
            $table->boolean('stock');
            $table->float('star');

            $table->enum('remark', ['popular', 'new', 'top', 'special', 'trending', 'today_deal']);

            // Foreign Key
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            // Relation
            $table->foreign('category_id')->references('id')->on('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('brand_id')->references('id')->on('brands')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent()->useCurrentOnUpdate();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
