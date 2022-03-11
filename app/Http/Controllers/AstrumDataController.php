<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\AstrumClient;
use Mtownsend\XmlToArray\XmlToArray;
use App\Models\Product;
use App\Models\Category;
use App\Models\PriceList;

class AstrumDataController extends Controller
{
    public function getProducts()
    {
        $import = new AstrumClient();

        $secretKey = config('services.astrum.secret');

        $action = 'goods';

        $response = $import->client->request('GET', '/shuttle.dll/AstrumService?action='.$action.'&secret='.$secretKey);
        $data = $response->getBody();

        $products = XmlToArray::convert($data);

        $products = collect($products);

        if (isset($products['status']) && $products['status'] == 'ERROR') {
            return false;
        } else {
            return $products;
        }
    }

    public function getCategories()
    {
        $import = new AstrumClient();

        $secretKey = config('services.astrum.secret');

        $action = 'category_list';

        $response = $import->client->request('GET', '/shuttle.dll/AstrumService?action='.$action.'&secret='.$secretKey);
        $data = $response->getBody();

        $categories = XmlToArray::convert($data);

        $categories = collect($categories);

        if (isset($categories['status']) && $categories['status'] == 'ERROR') {
            return false;
        } else {
            return $categories;
        }
    }

    public function importProducts()
    {
        $products = $this->getProducts();

        //return $products['product'];

        if (count($products) > 0) {
            
            foreach ($products['product'] as $product => $value) {

                $result = Product::updateOrCreate(
                [
                    'astrum_id' => $value['id'],
                ],
                [
                    'astrum_id' => $value['id'],
                    'article' => (isset($value['article']) && !is_array($value['article']) ? $value['article'] : NULL),
                    'name' => (isset($value['analit_list']['WEBNAMERU']) && !is_array($value['analit_list']['WEBNAMERU']) ? $value['analit_list']['WEBNAMERU'] : NULL),
                    'name_eng' => (isset($value['analit_list']['ENG1']) && !is_array($value['analit_list']['ENG1']) ? $value['analit_list']['ENG1'] : NULL),
                    'name_kaz' => (isset($value['analit_list']['NAMEKAZ']) && !is_array($value['analit_list']['NAMEKAZ']) ? $value['analit_list']['NAMEKAZ'] : NULL),
                    'category_id' => (isset($value['category_list']['category']['@attributes']['id']) && !is_array($value['category_list']['category']['@attributes']['id']) ? $value['category_list']['category']['@attributes']['id'] : NULL),
                    'width' => (isset($value['dimension']['width']) && !is_array($value['dimension']['width']) ? $value['dimension']['width'] : 0),
                    'height' => (isset($value['dimension']['height']) && !is_array($value['dimension']['height']) ? $value['dimension']['height'] : 0),
                    'length' => (isset($value['dimension']['length']) && !is_array($value['dimension']['length']) ? $value['dimension']['length'] : 0),
                    'volume' => (isset($value['dimension']['volume']) && !is_array($value['dimension']['volume']) ? $value['dimension']['volume'] : 0),
                    'weight' => (isset($value['dimension']['weight']) && !is_array($value['dimension']['weight']) ? $value['dimension']['weight'] : 0),
                    'description' => (isset($value['analit_list']['WEBDESCRIPTIONRU']) && !is_array($value['analit_list']['WEBDESCRIPTIONRU']) ? $value['analit_list']['WEBDESCRIPTIONRU'] : NULL),
                    'description_eng' => (isset($value['analit_list']['ENG2']) && !is_array($value['analit_list']['ENG2']) ? $value['analit_list']['ENG2'] : NULL),
                    'description_kaz' => (isset($value['analit_list']['KAZ']) && !is_array($value['analit_list']['KAZ']) ? $value['analit_list']['KAZ'] : NULL),
                    'remark' => (isset($value['remark']) && !is_array($value['remark']) ? $value['remark'] : NULL),
                    'material' => (isset($value['analit_list']['MAT']) && !is_array($value['analit_list']['MAT']) ? $value['analit_list']['MAT'] : NULL),
                    'material_eng' => (isset($value['analit_list']['MATERIALENG']) && !is_array($value['analit_list']['MATERIALENG']) ? $value['analit_list']['MATERIALENG'] : NULL),
                    'material_kaz' => (isset($value['analit_list']['MATERIALKAZ']) && !is_array($value['analit_list']['MATERIALKAZ']) ? $value['analit_list']['MATERIALKAZ'] : NULL),
                    'size' => (isset($value['analit_list']['SIZE']) && !is_array($value['analit_list']['SIZE']) ? $value['analit_list']['SIZE'] : NULL),
                    'size_eng' => (isset($value['analit_list']['SIZEENG']) && !is_array($value['analit_list']['SIZEENG']) ? $value['analit_list']['SIZEENG'] : NULL),
                    'size_kaz' => (isset($value['analit_list']['SIZEKAZ']) && !is_array($value['analit_list']['SIZEKAZ']) ? $value['analit_list']['SIZEKAZ'] : NULL),
                ]);

                $pricelist_id = PriceList::updateOrCreate([
                    'product_id' => $result->astrum_id,
                ],
                [
                    'product_id' => $result->astrum_id,
                    'price' => (isset($value['price_list']['price']['@content']) && !is_array($value['price_list']['price']['@content']) ? $value['price_list']['price']['@content'] : 0),
                    'promo' => (isset($value['price_list']['price']['@attributes']['promo']) && !is_array($value['price_list']['price']['@attributes']['promo']) ? $value['price_list']['price']['@attributes']['promo'] : 0),
                    'iso_code' => (isset($value['price_list']['price']['@attributes']['iso_code']) && !is_array($value['price_list']['price']['@attributes']['iso_code']) ? $value['price_list']['price']['@attributes']['iso_code'] : NULL),
                    'quantity' => (isset($value['price_list']['price']['@attributes']['quantity']) && !is_array($value['price_list']['price']['@attributes']['quantity']) ? $value['price_list']['price']['@attributes']['quantity'] : NULL),
                    'main' => (isset($value['price_list']['price']['@attributes']['main']) && !is_array($value['price_list']['price']['@attributes']['main']) ? $value['price_list']['price']['@attributes']['main'] : NULL),

                ]);

            }

            return true;
        } else {
            return false;
        }
    }

    public function importCategories()
    {
        $categories = $this->getCategories();

        //return $categories;

        if (count($categories) > 0) {
            foreach ($categories['category'] as $category => $value) {

                // if (empty($value['parent']) || is_array($value['parent'])) {
                    $result = Category::updateOrCreate([
                        'astrum_id' => $value['id'],
                    ],
                    [
                        'astrum_id' => $value['id'],
                        'parent_id' => (isset($value['parent']) && !is_array($value['parent']) ? $value['parent'] : NULL),
                        'name' => (isset($value['name']) && !is_array($value['name']) ? $value['name'] : NULL),
                        'eng_name' => (isset($value['analit_list']['ENGGROUP']) && !is_array($value['analit_list']['ENGGROUP']) ? $value['analit_list']['ENGGROUP'] : NULL),
                        'kaz_name' => (isset($value['analit_list']['KAZGROUP']) && !is_array($value['analit_list']['KAZGROUP']) ? $value['analit_list']['KAZGROUP'] : NULL),
                        'image' => (isset($value['analit_list']['IMAGE']) && !is_array($value['analit_list']['IMAGE']) ? $value['analit_list']['IMAGE'] : NULL),
                        'image_1' => (isset($value['image_1']['@attributes']['id']) && !is_array($value['image_1']['@attributes']['id']) ? $value['image_1']['@attributes']['id'] : NULL),
                        'title' => (isset($value['analit_list']['TITLE']) && !is_array($value['analit_list']['TITLE']) ? $value['analit_list']['TITLE'] : NULL),
                        'keywords' => (isset($value['analit_list']['KEYWORDS']) && !is_array($value['analit_list']['KEYWORDS']) ? $value['analit_list']['KEYWORDS'] : NULL),
                        'about' => (isset($value['analit_list']['KEYWORDS']) && !is_array($value['analit_list']['KEYWORDS']) ? $value['analit_list']['KEYWORDS'] : NULL),
                    ]);
                //}

            }

            return true;

        } else {
            return false;
        }
        
    }
}
