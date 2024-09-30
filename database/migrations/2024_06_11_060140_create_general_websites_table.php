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
        Schema::create('general_websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('logo')->nullable();
            $table->text('favicon')->nullable();
            $table->text('footer_logo')->nullable();
            $table->text('footer_back_img')->nullable();
            $table->string('copyright')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_websites');
    }
};
