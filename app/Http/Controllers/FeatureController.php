<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
    public array $features = [
        ['name' => 'Juggers', 'price' => 50, 'variation' => ['boys', 'girls'], 'color' => ['white', 'black']],
        ['name' => 'Nappy', 'price' =>150, 'variation' => ['boys', 'girls'], 'color' => ['white', 'pink']],
        ['name' => 'Hoodie', 'price' => 200, 'variation' => ['boys', 'girls'], 'color' => ['white', 'grey', 'black', 'blue', 'pink']],
        ['name' => 'Pooty', 'price' => 20, 'variation' => [], 'color' => []],
        ['name' => 'Cap', 'price' => 40, 'variation' => [], 'color' => ['white', 'black']],
        ['name' => 'Bed cover', 'price' => 50, 'variation' => [], 'color' => ['white', 'black', 'blue', 'pink']],
        ['name' => 'Cover all', 'price' => 45, 'variation' => ['boys', 'girls'], 'color' => ['white', 'grey', 'black', 'blue', 'pink']],
        ['name' => 'Feeding bottle', 'price' => 50, 'variation' => [], 'color' => []],
        ['name' => 'Pop sock', 'price' => 10, 'variation' => ['boys', 'girls'], 'color' => ['white', 'black', 'blue', 'pink']],
        ['name' => 'Sock', 'price' => 15, 'variation' => ['boys', 'girls'], 'color' => ['white', 'grey', 'black', 'blue', 'pink']],
    ];

    //
    public function list() {
        // return $this->features;
        return response()->json($this->features);
    }

    public function getFeature($id) {
        $response = [];
        if(array_key_exists($id, $this->features)):
            $response = $this->features[$id];
        endif;
        return response()->json($response);
    }
};



