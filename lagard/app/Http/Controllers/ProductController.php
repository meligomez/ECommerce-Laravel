<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
       $vehiculos= $this->getAllVehicles();
        return view('home',compact('vehiculos'));
    }
    public function getAllVehicles(){
        $vehiculos= Product::all();
        return $vehiculos;
    }
}
