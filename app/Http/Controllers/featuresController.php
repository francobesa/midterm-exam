<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature; 

class featuresController extends Controller
{
    public function index()
    {
        // Get all inventory items
        $features = Feature::all(); 

        // Pass the items to the view
        return view('BesaFranco.index', compact('features'));
    }
}
