<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kebijakan Privasi"
        ];
        return view("user.kebijakan", $data);
    }
}
