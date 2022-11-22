<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Bantuan"
        ];
        return view("user.bantuan", $data);
    }
}
