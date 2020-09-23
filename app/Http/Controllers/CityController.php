<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('cargo.city.insert');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities',
        ]);
        $city = new City;
        $city->name = $request->name;
        $city->save();
        $notification = array(
            'message' => 'City Added Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function show()
    {
        $cities = City::orderBy('id', 'desc')->get();
        return view('cargo.city.show', compact('cities'));
    }
    public function destroy($id)
    {
        $city = City::findorfail($id);
        $city->delete();
        $notification = array(
            'message' => 'City Deleted Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $city = City::findorfail($id);
        return view('cargo.city.edit', compact('city'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities',
        ]);
        $city = City::findorfail($request->id);
        $city->name = $request->name;
        $city->save();
        $notification = array(
            'message' => 'City Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
