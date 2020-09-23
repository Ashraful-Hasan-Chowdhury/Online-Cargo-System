<?php

namespace App\Http\Controllers;

use App\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index()
    {
        return view('cargo.truck.insert');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'truck_no' => 'required|unique:trucks|min:6',
            'licence_no' => 'required|unique:trucks|min:6',
        ]);
        $truck = new Truck;
        $truck->truck_no = $request->truck_no;
        $truck->licence_no = $request->licence_no;
        $truck->save();
        $notification = array(
            'message' => 'Truck Added Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function show()
    {
        $trucks = Truck::orderBy('id', 'desc')->get();
        return view('cargo.truck.show', compact('trucks'));
    }
    public function destroy($id)
    {
        $truck = Truck::findorfail($id);
        $truck->delete();
        $notification = array(
            'message' => 'Truck Deleted Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $truck = Truck::findorfail($id);
        return view('cargo.truck.edit', compact('truck'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'truck_no' => 'required|min:6',
            'licence_no' => 'required|min:6',
        ]);
        $truck = Truck::findorfail($request->id);
        $truck->truck_no = $request->truck_no;
        $truck->licence_no = $request->licence_no;
        $truck->save();
        $notification = array(
            'message' => 'Truck Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
