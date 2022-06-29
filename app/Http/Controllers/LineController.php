<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Line;
use App\Models\Station;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LineController extends Controller
{

    public function create()
    {
        $lines = Line::with('company')->get();
        $stations = Station::with('lines')->get();

        return view('create-line', compact('lines', 'stations'));
    }

    public function store(Request $request): RedirectResponse
    {
        Line::create($request->all());

        return redirect()->back();
    }

    public function show(Line $line)
    {
        $line->load(['stations', 'company']);

        return view('line-stations', compact('line'));
    }

}
