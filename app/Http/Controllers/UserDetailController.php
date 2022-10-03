<?php

namespace App\Http\Controllers;

use App\Models\userDetail;
use App\Models\CV;
use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\Support\Facades\Gate;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($template)
    {
        return view('cv.user_detail', compact('template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $template)
    {
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'country' => 'required|alpha',
            'profession' => 'required',
            'postal_code' => 'required|numeric'
        ]);



        if($cv = auth()->user()->cvs()->create(['template_id'=> 5])){

            $user_details= [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'city' => $request->city,
                'country' => $request->country,
                'profession' => $request-> profession,
                'postal_code' => $request->postal_code
              ];
            
            if($cv->userDetail()->create($user_details)){
                return redirect()->route('cv.index', ['cv' => $cv])->withSuccess("Your CV is successfully created");
            };

            return back()->route('user_detail.index')->withError("An error occured!");
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
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(userDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(userDetail $userDetail)
    {
        
        Gate::authorize('crudCV', $userDetail->CV);

        return view('cv.user_detail_edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userDetail $userDetail)
    {
        Gate::authorize('crudCV', $userDetail->CV);

        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'country' => 'required|alpha',
            'profession' => 'required',
            'postal_code' => 'required|numeric'
        ]);

        $user_details= [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'city' => $request->city,
                'country' => $request->country,
                'profession' => $request-> profession,
                'postal_code' => $request->postal_code
        ];
            
        if($userDetail->update($user_details)){
            return redirect()->route('cv.index', ['cv' => $userDetail->CV])->withSuccess("Your details is successfully updated");
        };

        return back()->route('cv.index')->withError("An error occured!");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(userDetail $userDetail)
    {
        //
    }
}
