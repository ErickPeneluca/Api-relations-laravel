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
        $user = ModelsAddress::find($r->id);
        return $user;
    }

    public function post(Request $r) {
        $rawData = $r->only(['address']);
        $post = ModelsAddress::create($rawData);

        return $post;
    }
}
