<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $applications = JobApplication::all();
        // $request->session()->flash('error-title', 'User account created!');
        // $request->session()->flash('error-body', 'Proceed to checkout.');
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruit.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Hello i\'m currently working on this feature');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplication $application)
    {
        return view('recruit.index', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $application)
    {
        return view('recruit.index', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $application)
    {
        dd('update item here and flash session');
    }

    /**
     * Soft Delete specified resource.
     *
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function delete(JobApplication $application)
    {
        dump('delete item here and flash session ==> ');
        dd($application);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $application)
    {
        dd('DESTROY item here and flash session');
    }
}
