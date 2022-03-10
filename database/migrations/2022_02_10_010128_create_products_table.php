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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->id();
            $table->unsignedBigInteger('astrum_id')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('name_eng')->nullable();
            $table->string('name_kaz')->nullable();
            $table->char('article')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('producer_id')->nullable();
            $table->unsignedBigInteger('goods_group_id')->nullable();
            $table->unsignedBigInteger('comp_type_id')->nullable();
            $table->string('guarantee')->nullable();
            //$table->unsignedBigInteger('dimension_id')->nullable();
            $table->float('width', 16, 2)->default(0);
            $table->float('height', 16, 2)->default(0);
            $table->float('length', 16, 2)->default(0);
            $table->float('volume', 16, 2)->default(0);
            $table->float('weight', 16, 2)->default(0);

            $table->longText('description')->nullable();
            $table->longText('description_eng')->nullable();
            $table->longText('description_kaz')->nullable();

            $table->longText('remark')->nullable();

            $table->longText('material')->nullable();
            $table->longText('material_eng')->nullable();
            $table->longText('material_kaz')->nullable();

            $table->string('size')->nullable();
            $table->string('size_eng')->nullable();
            $table->string('size_kaz')->nullable();

            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->string('text')->nullable();
            $table->string('new')->nullable();
            $table->string('fresh')->nullable();
            $table->string('expect')->nullable();

            $table->unsignedBigInteger('certificate_id')->nullable();
            $table->unsignedBigInteger('image_list_id')->nullable();
            //$table->unsignedBigInteger('price_list_id')->nullable();
            $table->unsignedBigInteger('stored_list_id')->nullable();
            $table->unsignedBigInteger('analit_list_id')->nullable();
            $table->boolean('is_published')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->index('category_id', 'product_category_idx');
            $table->foreign('category_id', 'product_category_fk')->references('astrum_id')->on('categories');

            // $table->index('price_list_id', 'product_price_list_idx');
            // $table->foreign('price_list_id', 'product_price_list_fk')->references('id')->on('price_lists');

            $table->index('goods_group_id', 'product_goods_group_idx');
            $table->foreign('goods_group_id', 'product_goods_group_fk')->references('id')->on('goods_groups');

            // $table->index('dimension_id', 'product_dimension_idx');
            // $table->foreign('dimension_id', 'product_dimension_fk')->references('id')->on('dimensions');

            $table->index('image_list_id', 'product_image_list_idx');
            $table->foreign('image_list_id', 'product_image_list_fk')->references('id')->on('image_lists');

            $table->index('stored_list_id', 'product_stored_list_idx');
            $table->foreign('stored_list_id', 'product_stored_list_fk')->references('id')->on('stored_lists');

            $table->index('analit_list_id', 'product_analit_list_idx');
            $table->foreign('analit_list_id', 'product_analit_list_fk')->references('id')->on('analit_lists');

            $table->index('purpose_id', 'product_purpose_idx');
            $table->foreign('purpose_id', 'product_purpose_fk')->references('id')->on('purposes');
            
            $table->index('gender_id', 'product_gender_idx');
            $table->foreign('gender_id', 'product_gender_fk')->references('id')->on('genders');

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
