<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainController extends Controller
{
    public function trains(){
        $trains = \App\trains::all();
        return view('home', compact('trains'));
    }
}