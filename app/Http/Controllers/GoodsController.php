<?php

namespace App\Http\Controllers;

use App\Components\AstrumClient;
use Illuminate\Http\Request;
use Exceptions;

class GoodsController extends Controller
{

    public function getGoods()
    {
        $import = new AstrumClient();

        $response = $import->client->request('GET', '/shuttle.dll/AstrumService?action=goods&secret=477642ad448137234f2a9ef48857c40f');
        $data = $response->getBody();
        $goods = simplexml_load_string($data,'SimpleXMLElement', LIBXML_NOCDATA);

        return $goods;
    }
}
