<?php

namespace App\Http\Controllers;

use App\Models\FileDocument;
use Illuminate\Http\Request;

class FileDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\FileDocument  $document
     * @return \Illuminate\Http\Response
     */
    public function show(FileDocument $document)
    {
        dd('Start document download');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileDocument  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(FileDocument $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FileDocument  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileDocument $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileDocument  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileDocument $document)
    {
        //
    }
}
