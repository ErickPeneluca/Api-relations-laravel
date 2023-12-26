<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $r){
        $response = Invoice::all();

        return $response;
    }

    public function findOne(Request $r){
        $response = Invoice::find($r->id);

        return $response;
    }

    public function post(Request $r){
        $data = $r->only(['description','valor','address_id','user_id']);
        $response = Invoice::create($data);

        return $response;
    }
}
