<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_lists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->id();
            $table->unsignedBigInteger('product_id')->unique();
            $table->integer('price')->nullable();
            $table->integer('promo')->default(0);
            $table->string('iso_code')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('main')->nullable();
            $table->timestamps();

            $table->index('product_id', 'price_product_idx');
            $table->foreign('product_id', 'price_product_fk')->references('astrum_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_lists');
    }
}
