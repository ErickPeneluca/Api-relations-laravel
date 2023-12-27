<?php

namespace App\Http\Controllers;

use App\Models\Address as ModelsAddress;
use Faker\Provider\ar_EG\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $r){
        $addresses = ModelsAddress::all();
        return $addresses;
    }

    public function findOne(Request $r){
        $response = ModelsAddress::find($r->id);
        $response['user'] = $response->user;

        return $response;
    }

    public function post(Request $r) {
        $rawData = $r->only(['address']);
        $post = ModelsAddress::create($rawData);

        return $post;
    }
}
