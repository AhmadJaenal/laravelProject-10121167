<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('id_customer');
            $table->string('id_product');
            $table->double('amount');
            $table->string('is_paid');
            $table->integer('postal_code');
            $table->integer('detail_address')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('state');
            $table->string('phone');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
    }
};
