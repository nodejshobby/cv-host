<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\CV;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CV $cv)
    {
        Gate::authorize('crudCV', $cv);

        return view('cv.skill', compact('cv'));
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
            'skill_name' => 'required',
            'skill_level' => 'required',
        ]);

        if($cv->Skill()->where('skill_name', $request->skill_name)->get()->count()){
            return redirect()->route('cv.index', ['cv' => $cv])->withInfo("Skill is already added");
        }

        if($cv->Skill()->create([
            'skill_name' => $request->skill_name,
            'skill_level' => $request->skill_level
        ])){
            return redirect()->route('cv.index', ['cv' => $cv])->withSuccess("Skill is added successfully");
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
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        Gate::authorize('crudCV', $skill->CV);

        return view('cv.skill_edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        Gate::authorize('crudCV', $skill->CV);

        $request->validate([
            'skill_name' => 'required',
            'skill_level' => 'required',
        ]);


        if($skill->update([
            'skill_name' => $request->skill_name,
            'skill_level' => $request->skill_level
        ])){
            return redirect()->route('cv.index', ['cv' => $skill->CV])->withSuccess("Skill is updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function delete(Skill $skill)
    {
        Gate::authorize('crudCV', $skill->CV);

        if($skill->delete()){
            return redirect()->route('cv.index', ['cv' => $skill->CV ])->withSuccess("Skill is deleted successfully");
        }
    }
}
