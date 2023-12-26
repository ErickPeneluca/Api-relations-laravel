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
}
