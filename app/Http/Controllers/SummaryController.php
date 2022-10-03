<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use App\Models\CV;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CV $cv)
    {
        Gate::authorize('crudCV', $cv);

        return view('cv.summary', compact('cv'));
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
            'summary'=> 'required|min:150|max:150'
        ]);

        if($cv->Summary()->get()->count()){
            return redirect()->route('cv.index', ['cv'=> $cv])->withInfo("Summary already exists!");
        }

        if($cv->Summary()->create(['description' => $request->summary])){
            return redirect()->route('cv.index', ['cv'=> $cv])->withSuccess("Summary is added successfully");
        }

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
     * @param  \App\Models\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function show(Summary $summary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function edit(Summary $summary)
    {
        Gate::authorize('crudCV', $summary->CV);

        return view('cv.summary_edit', compact('summary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summary $summary)
    {
        Gate::authorize('crudCV', $summary->CV);

        $request->validate([
            'summary'=> 'required|min:150|max:150'
        ]);

        if($summary->update(['description' => $request->summary])){
            return redirect()->route('cv.index', ['cv'=> $summary->CV])->withSuccess("Summary is updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summary $summary)
    {
        //
    }
}
