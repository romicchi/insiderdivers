<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function manage() {
        return view('clients/clientmanagement');
    }
}
