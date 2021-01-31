<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobApplicationRequest;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $applications = JobApplication::with('documents')->get();
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
     * @param  \App\Http\Requests\JobApplicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobApplicationRequest $request)
    {
        // Generate an application ID
        $application_id = Str::upper(Str::random(11));

        // $jobApplication = JobApplication::whereApplicationId('IGTPJHVKXWS')->firstOrFail();

        // Store a new application
        $jobApplication = JobApplication::create([
            'application_id' => $application_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'age' => $request->age,
            'marital_status' => $request->marital_status,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'gender' => $request->gender,
            'preferred_role' => $request->preferred_role,
            'recent_job_title' => $request->recent_job_title,
            'total_years_of_xp' => $request->total_years_of_xp,
            'summary' => $request->summary,
        ]);

        if ($request->cv != null) {
            $this->uploadCV($request, $jobApplication);
        }

        if ($request->documents != null && count($request->documents) > 0) {
            // $this->uploadDocuments($request, $jobApplication);
        }

        session(['success-position' => 'top']);
        return redirect()->back()->with('success-title', 'Application saved!');
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
     * @param  \App\Http\Requests\JobApplicationRequest  $request
     * @param  \App\Models\JobApplication  $application
     * @return \Illuminate\Http\Response
     */
    public function update(JobApplicationRequest $request, JobApplication $application)
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

    private function uploadCV(Request $request, JobApplication $jobApplication)
    {
        // Get uploaded CV document
        $application_id = $jobApplication->application_id;
        $cv = $request->cv;
        $computedCVFileName = 'CV_-_' . $application_id;
        $computedCVFileExtension = '.' . $cv->getClientOriginalExtension();
        $computedCVFilePath = $application_id . '/' . 'CV' . '/' . $computedCVFileName . $computedCVFileExtension;

        // Store uploaded CV document (set visibility = PUBLIC)
        $path = $cv->storePubliclyAs(
            'public' . '/' . $application_id . '/' . 'CV',
            $computedCVFileName . $computedCVFileExtension,
        );

        // Update file visibility
        Storage::setVisibility($path, 'public');

        // Populate database
        $jobApplication->documents()->create([
            'name' => $computedCVFileName,
            'extension' => $computedCVFileExtension,
            'full_path' => $computedCVFilePath,
            'application_id' => $application_id,
            'size' => Storage::size($path),
        ]);
    }

    private function uploadDocuments(Request $request, JobApplication $jobApplication)
    {
        dd($request->documents);
    }
}
