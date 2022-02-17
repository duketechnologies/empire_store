<?php

namespace App\Components;

use GuzzleHttp\Client;

class AstrumClient
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://92.46.43.37/',
            'timeout' => 150.0,
        ]);
    }
}