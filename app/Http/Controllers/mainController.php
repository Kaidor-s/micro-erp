<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $data = [];

        return view('main', $data);
    }
}
