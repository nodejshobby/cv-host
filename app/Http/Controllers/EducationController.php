<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\CV;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CV $cv)
    {
        Gate::authorize('crudCV', $cv);

        return view('cv.education', compact('cv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cv $cv, Request $request)
    {
        Gate::authorize('crudCV', $cv);

        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'field_of_study' => 'required',
            'degree' => 'require',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        if($cv->Education()->create([
            'school_name' => $request->school_name,
            'school_location' => $request->school_location,
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ])){
            return redirect()->route('cv.index',['cv' => $cv])->withSuccess("Education is added successfully");
        }

        return redirect()->route('cv.index',['cv' => $cv])->withError("An error occured");

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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        Gate::authorize('crudCV', $education->CV);

        return view('cv.education_edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        Gate::authorize('crudCV', $education->CV);

        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'field_of_study' => 'required',
            'degree' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        if($education->update([
            'school_name' => $request->school_name,
            'school_location' => $request->school_location,
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ])){
            return redirect()->route('cv.index',['cv' => $education->CV])->withSuccess("Education is updated successfully");
        }

        return redirect()->route('cv.index',['cv' => $education->CV])->withError("An error occured");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function delete(Education $education)
    {
        Gate::authorize('crudCV', $education->CV);

        if($education->delete()){
            return redirect()->route('cv.index', ['cv' => $education->CV])->withSuccess("Education is successfully deleted");
        }
    }
}
