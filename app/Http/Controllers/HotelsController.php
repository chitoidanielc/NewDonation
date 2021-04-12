<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();

        return view('hotel.index')->with('hotels', $hotels);
    }


    public function create()
    {
        return view('hotel.create');
    }


    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'        => 'required',
            'continent'   => 'required',
            'tara'        => 'required',
            'oras'        => 'required',
            'adresa'      => 'required',
            'cont_bancar' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('hotel/create')
                           ->withErrors($validator)
                           ->withInput($request->all());

        } else {
            // store
            $hotel                  = new Hotel();
            $hotel->name            = $request->input('name');
            $hotel->continent       = $request->input('continent');
            $hotel->tara            = $request->input('tara');
            $hotel->oras            = $request->input('oras');
            $hotel->adresa          = $request->input('adresa');
            $hotel->cont_bancar     = $request->input('cont_bancar');
            $hotel->save();
            // redirect
            return Redirect::to('hotel');
        }
    }


    public function show($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel.show')
              ->with('hotel', $hotel);
    }


    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel.edit')
                ->with('hotel', $hotel);    }


    public function update(Request $request, $id)
    {
        $rules = array(
            'name'        => 'required',
            'continent'   => 'required',
            'tara'        => 'required',
            'oras'        => 'required',
            'adresa'      => 'required',
            'cont_bancar' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('hotel')
                ->withErrors($validator);
        } else {
            // store
            $hotel = Hotel::find($id);
            $hotel->name            = $request->input('name');
            $hotel->continent       = $request->input('continent');
            $hotel->tara            = $request->input('tara');
            $hotel->oras            = $request->input('oras');
            $hotel->adresa          = $request->input('adresa');
            $hotel->cont_bancar     = $request->input('cont_bancar');
            $hotel->save();
            // redirect
            // Session::flash('message', 'Successfully updated hotel!');
            return Redirect::to('hotel');
        }    }


    public function destroy($id)
    {
        // delete
        $hotel = Hotel::find($id);
        $hotel->delete();
        // redirect
        // Session::flash('message', 'Successfully deleted the hotel!');
        return Redirect::to('hotel');
    }
}
