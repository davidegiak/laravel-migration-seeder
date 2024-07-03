<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = trains::all();
        $data = [
            "treni"=> $trains
        ];
        return view("home", $data);
    }
}
