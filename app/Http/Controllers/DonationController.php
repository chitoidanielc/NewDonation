<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();

        return view('donation.index')->with('donations', $donations);
    }

    public function create()
    {
        return view('donation.create');
    }

    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'fname'       => 'required',
            'lname'       => 'required',
            'weight'      => 'required|numeric',
            'blood_type'  => 'required|max:10'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('donation/create')
                           ->withErrors($validator)
                           ->withInput($request->all());

        } else {
            // store
            $donation = new Donation();
            $donation->fname      = $request->input('fname');
            $donation->lname      = $request->input('lname');
            $donation->weight     = $request->input('weight');
            $donation->blood_type = $request->input('blood_type');
            $donation->save();
            // redirect
            return Redirect::to('donation');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donation::find($id);

        return view('donation.show')
              ->with('donation', $donation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = Donation::find($id);

        return view('donation.edit')
                ->with('donation', $donation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'fname'       => 'required',
            'lname'       => 'required',
            'weight'      => 'required|numeric',
            'blood_type'  => 'required|max:10'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('donation')
                ->withErrors($validator);
        } else {
            // store
            $donation = Donation::find($id);
            $donation->fname      = $request->input('fname');
            $donation->lname      = $request->input('lname');
            $donation->weight     = $request->input('weight');
            $donation->blood_type = $request->input('blood_type');
            $donation->save();
            // redirect
            // Session::flash('message', 'Successfully updated donation!');
            return Redirect::to('donation');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $donation = Donation::find($id);
        $donation->delete();
        // redirect
        // Session::flash('message', 'Successfully deleted the donation!');
        return Redirect::to('donation');
    }
}
