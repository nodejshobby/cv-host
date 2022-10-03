<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;
use App\Models\WorkHistory;
use Illuminate\Support\Facades\Gate;

class WorkHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CV $cv)
    {
        Gate::authorize('crudCV', $cv);

        return view('cv.work_history', compact('cv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, CV $cv)
    {
        Gate::authorize('crudCV', $cv);

        $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'country' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        if($cv->WorkHistory()->create([
            'job_title' => $request->job_title,
            'employer' => $request->employer,
            'city' => $request->city,
            'country' => $request->country,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ])){
            return redirect()->route('cv.index',['cv' => $cv])->withSuccess("Work history is added successfully");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkHistory $history)
    {
        Gate::authorize('crudCV', $history->CV);

        return view('cv.work_history_edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkHistory $history)
    {
        Gate::authorize('crudCV', $history->CV);

        $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'country' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        if($history->update([
            'job_title' => $request->job_title,
            'employer' => $request->employer,
            'city' => $request->city,
            'country' => $request->country,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ])){
            return redirect()->route('cv.index',['cv' => $history->cv_id])->withSuccess("Work history is updated successfully");
        }

        return redirect()->route('cv.index',['cv' => $history->cv_id])->withError("An error occured");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(WorkHistory $history)
    {
        Gate::authorize('crudCV', $history->CV);

        if($history->delete()){
            return redirect()->route('cv.index',['cv'=> $history->CV])->withSuccess("Work History is deleted successfully");
        }
    }
}
