<?php

namespace App\Http\Controllers;

use App\Models\contactDetail;
use App\Models\CV;
use App\Models\userDetail;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CV $cv)
    {
        return view('cv.contact_detail', compact('cv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, CV $cv)
    {
        $request->validate([
            'phone_number' => 'required|min:11',
            'website' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url'
        ]);

        if($cv->contactDetail()->get()->count()){
            return redirect()->route('cv.index', ['cv'=> $cv])->withInfo("Contact detail already exist!");
        }
        
        if($cv->contactDetail()->create([
            'phone_number' => $request->phone_number,
            'website' => $request->website,
            'linkedin_page' => $request->linkedin,
            'twitter_page' => $request->twitter
        ])){
            return redirect()->route('cv.index', ['cv'=>$cv])->withSuccess("Contact detail is added successfully");
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
     * @param  \App\Models\contactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function show(contactDetail $contactDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(contactDetail $contactDetail)
    {
        return view('cv.contact_detail_edit', compact('contactDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactDetail $contactDetail)
    {
        $request->validate([
            'phone_number' => 'required|min:11',
            'website' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url'
        ]);
        
        if($contactDetail->update([
            'phone_number' => $request->phone_number,
            'website' => $request->website,
            'linkedin_page' => $request->linkedin,
            'twitter_page' => $request->twitter
        ])){
            return redirect()->route('cv.index', ['cv'=> $contactDetail->cv_id])->withSuccess("Contact detail is updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactDetail  $contactDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactDetail $contactDetail)
    {
        //
    }
}
