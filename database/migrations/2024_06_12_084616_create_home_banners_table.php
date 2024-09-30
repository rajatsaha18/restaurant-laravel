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
        Schema::create('home_banners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about')->nullable();
            $table->text('gallery')->nullable();
            $table->text('blog')->nullable();
            $table->text('team')->nullable();
            $table->text('contact')->nullable();
            $table->text('product')->nullable();
            $table->text('product_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_banners');
    }
};
