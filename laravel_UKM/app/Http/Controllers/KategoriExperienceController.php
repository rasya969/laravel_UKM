<?php

namespace App\Http\Controllers;

use App\Models\KategoriExperience;
use Illuminate\Http\Request;

class KategoriExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = KategoriExperience::all();
        return view('pages.admin.Kategoriexperiences_pages.index', compact('result'));
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
    public function show(KategoriExperience $kategoriExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriExperience $kategoriExperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriExperience $kategoriExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriExperience $kategoriExperience)
    {
        //
    }
}
