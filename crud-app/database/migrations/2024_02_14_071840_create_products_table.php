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
            $table->integer('cid');
            $table->integer('sid');
            $table->string('name');
            $table->string('desc',1200);
            $table->string('price');
            $table->string('shade');
            $table->string('dis');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
             $table->string('exdate');
            $table->string('menufac');

            $table->timestamps();
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
