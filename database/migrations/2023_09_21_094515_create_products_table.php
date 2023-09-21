<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_eng');
            $table->string('Category_eng');
            $table->string('Type_eng');
            $table->string('Brand_eng');
            $table->string('Size_eng');
            $table->string('Color_eng');
            $table->string('Material_eng');
            $table->string('Gender_eng');
            $table->float('Price_eng');
            $table->integer('Quantity');
            $table->string('Description_eng');
            $table->string('sku_eng');
            $table->string('name_ar');
            $table->string('Category_ar');
            $table->string('Type_ar');
            $table->string('Brand_ar');
            $table->string('Size_ar');
            $table->string('Color_ar');
            $table->string('Material_ar');
            $table->string('Gender_ar');
            $table->float('Price_ar');
            $table->string('Description_ar');
            $table->string('sku_ar');
            $table->string('name_fr');
            $table->string('Category_fr');
            $table->string('Type_fr');
            $table->string('Brand_fr');
            $table->string('Size_fr');
            $table->string('Color_fr');
            $table->string('Material_fr');
            $table->string('Gender_fr');
            $table->float('Price_fr');
            $table->string('Description_fr');
            $table->integer('Images');
            $table->string('sku_fr');
            $table->string('thumblnail_prod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}