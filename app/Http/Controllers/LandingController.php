<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class LandingController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('landing', compact('barang'));
    }
} 