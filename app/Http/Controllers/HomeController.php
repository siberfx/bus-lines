<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $companies = Company::with('lines')->withCount('lines')->get();

        return view('companies', compact('companies'));
    }
}
