<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\schedule;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    // LẤY CHI NHÁNH THEO RẠP
    public function getBranches($id)
    {
        $branches = branch::where('cinema_id', $id)->get();

        return response()->json($branches);
    }

    public function index()
    {
        //
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
    public function show(branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(branch $branch)
    {
        //
    }
}
