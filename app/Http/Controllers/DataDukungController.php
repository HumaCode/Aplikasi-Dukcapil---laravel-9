<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDukungController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Data Dukung"
        ];
        return view("user.datadukung", $data);
    }
}
