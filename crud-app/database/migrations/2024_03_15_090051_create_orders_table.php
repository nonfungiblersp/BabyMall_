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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->integer('pid');
            $table->string('pname');
            $table->string('ppic');
            $table->integer('quantity')->default(1);
            $table->decimal('amt');
            $table->decimal('totalamt');
            $table->string('address')->nullable();
           $table->integer('pay_type')->default(0);
            $table->integer('status')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
