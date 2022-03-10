<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'id',
    //     'astrum_id',
    //     'article',
    //     'producer_id',
    //     'producer_city',
    //     'producer_code',
    //     'goods_group_id',
    //     'comp_type_id',
    //     'guarantee',
    //     'dimension_id',
    //     'description',
    //     'remark',
    //     'text',
    //     'new',
    //     'fresh',
    //     'expect',
    //     'certificate_id',
    //     'price_id',
    //     'analit_id',
    // ];
}
