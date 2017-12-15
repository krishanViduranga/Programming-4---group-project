<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->string('product_model');
            $table->string('product_price');
            $table->string('product_img_url');
            $table->string('product_3D_url');
            $table->rememberToken();
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
        Schema::drop('products');
    }
}
