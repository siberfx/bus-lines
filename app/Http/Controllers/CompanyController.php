<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Line;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::with('lines')->withCount('lines')->get();
        $lines = Line::with('company', 'stations')->get();

        return view('companies', compact('companies', 'lines'));
    }

    public function show(Company $company)
    {
        $company->load('lines');

        return view('company-lines', compact('company'));
    }
}
