<?php

namespace App\Http\Controllers;

use App\PsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('ps_category')
            ->select('id_category', 'name')
            ->orderby('position')
            ->get();
        
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PsCategory  $psCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PsCategory $psCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PsCategory  $psCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PsCategory $psCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PsCategory  $psCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PsCategory $psCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PsCategory  $psCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsCategory $psCategory)
    {
        //
    }
}
