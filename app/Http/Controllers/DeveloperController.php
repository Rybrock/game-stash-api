<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeveloperRequest;
use App\Models\Developer;

class DeveloperController extends Controller
{
    // list developers
    public function index()
    {
        $developers = Developer::all();

        return response()->json($developers);
    }

    // store a developer
    public function store(StoreDeveloperRequest $request)
    {
        $developer = Developer::create($request->validated());
        // dd($developer);

        return response()->json($developer, 201);
    }
    // show a developer

    public function show($id)
    {
        $developer = Developer::findOrfail($id);
        // dd($developer);

        return response()->json($developer);
    }
}
