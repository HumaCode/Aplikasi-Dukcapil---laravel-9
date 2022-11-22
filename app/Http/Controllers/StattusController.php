<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StattusController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Status"
        ];
        return view("user.status", $data);
    }
}
