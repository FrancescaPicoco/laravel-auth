<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardData;

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artItems=DashboardData::all();
        return view('dashboard_data.dashboard',compact("artItems"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardData $dashboardData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardData $dashboardData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardData $dashboardData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardData $dashboardData)
    {
        //
    }
}
