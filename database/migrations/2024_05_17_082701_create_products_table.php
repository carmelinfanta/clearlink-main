<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {   
        if (!Schema::hasTable('products')) { 
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('product_id');
                $table->timestamps();
            });
        }
    }

   
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
