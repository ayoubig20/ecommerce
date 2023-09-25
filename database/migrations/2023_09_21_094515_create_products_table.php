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
            $table->string('Brand');
            $table->string('Size');
            $table->string('Color_eng');
            $table->string('Material_eng');
            $table->string('Gender_eng');
            $table->float('Price');
            $table->integer('Quantity');
            $table->string('Description_eng');
            $table->string('sku_eng');
            $table->string('name_ar');
            $table->string('Category_ar');
            $table->string('Type_ar');
            $table->string('Color_ar');
            $table->string('Material_ar');
            $table->string('Gender_ar');
            $table->string('Description_ar');
            $table->string('sku_ar');
            $table->string('name_fr');
            $table->string('Category_fr');
            $table->string('Type_fr');
            $table->string('Color_fr');
            $table->string('Material_fr');
            $table->string('Gender_fr');
            $table->string('Description_fr');
            $table->string('sku_fr');
            $table->integer('Images');
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
