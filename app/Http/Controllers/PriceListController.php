<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceList;

class PriceListController extends Controller
{
    public function index()
    {
        return PriceList::all();
    }
}
