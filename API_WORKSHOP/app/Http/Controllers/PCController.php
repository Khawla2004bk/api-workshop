<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PC;

class PCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PC::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return PC::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(PC $pc)
    {
        return $pc;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PC $pc)
    {
        $pc->update($request->all());
        return $pc;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PC $pc)
    {
        $pc->delete();
        return response()->noContent();
    }
}
