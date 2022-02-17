<?php

namespace App\Http\Controllers;

use App\Components\AstrumClient;
use Illuminate\Http\Request;

class CityListController extends Controller
{
    public function getCities()
    {
        $import = new AstrumClient();

        $response = $import->client->request('GET', '/shuttle.dll/AstrumService?action=city_list&secret=477642ad448137234f2a9ef48857c40f');
        $data = $response->getBody()->getContents();
        $xml = simplexml_load_string($data,'SimpleXMLElement', LIBXML_NOCDATA);

        $countries = [];

        foreach ($xml->city as $key => $country) {

            if (!$country['parent_id']) {
                $countries['countries'][(int)$country['id']]['id'] = (int) $country['id'];
                $countries['countries'][(int)$country['id']]['title'] = (string) $country;
                $countries['countries'][(int)$country['id']]['cities'] = [];
            }

            foreach ($xml->city as $key => $region) {
                if ($region['parent_id'] && (int) $region['parent_id'] === (int) $country['id']) {
                    $countries['countries'][(int) $country['id']]['regions'][(int) $region['id']]['id'] = (int) $region['id'];
                    $countries['countries'][(int) $country['id']]['regions'][(int) $region['id']]['title'] = (string) $region;
                    $countries['countries'][(int) $country['id']]['regions'][(int) $region['id']]['cities'] = [];
                }

                foreach ($xml->city as $key => $city) {
                    if ($city['parent_id'] && (int) $city['parent_id'] === (int) $region['id']) {
                        $countries['countries'][(int) $country['id']]['regions'][(int) $region['id']]['cities'][(int) $city['id']]['id'] = (int) $city['id'];
                        $countries['countries'][(int) $country['id']]['regions'][(int) $region['id']]['cities'][(int) $city['id']]['title'] = (string) $city;
                    }
                }
            }
        }

        return $countries;
    }
}
