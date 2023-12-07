<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $data = Client::all();
        return view('clients', ['clients' => $data]);
    }
}
