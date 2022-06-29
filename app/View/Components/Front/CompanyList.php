<?php

namespace App\View\Components\Front;

use App\Models\Company;
use App\Models\Line;
use Illuminate\View\Component;

class CompanyList extends Component
{

    public function render()
    {
        $companies = Company::with('lines')->withCount('lines')->get();
        $lines = Line::with('company', 'stations')->get();

        return view('components.front.company-list', compact('companies', 'lines'));
    }
}
