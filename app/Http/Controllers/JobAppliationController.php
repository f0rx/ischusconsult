<?php

namespace App\Http\Controllers;

use App\Models\JobAppliation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class JobAppliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("Hello world");
        $applications = JobAppliation::all();
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('application./');
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
     * @param  \App\Models\JobAppliation  $jobAppliation
     * @return \Illuminate\Http\Response
     */
    public function show(JobAppliation $jobAppliation)
    {
        return view('applications.show', compact('jobAppliation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobAppliation  $jobAppliation
     * @return \Illuminate\Http\Response
     */
    public function edit(JobAppliation $jobAppliation)
    {
        return view('applications.edit', compact('jobAppliation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobAppliation  $jobAppliation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobAppliation $jobAppliation)
    {
        dd('$request');
    }

    /**
     * Soft Delete specified resource.
     *
     * @param  \App\Models\JobAppliation  $jobAppliation
     * @return \Illuminate\Http\Response
     */
    public function delete(JobAppliation $jobAppliation)
    {
        dd('$request');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobAppliation  $jobAppliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobAppliation $jobAppliation)
    {
        //
    }
}
