<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    public  function index()
    {
        $driver = Driver::findorfail(auth('driver')->id());
        return view('driver.profile.edit', compact('driver'));
    }
    public function update(Request $request)
    {
        $driver = Driver::findorfail(auth('driver')->id());

        // Image Handler
        $image_url = null;
        $image = $request->file('driving_licence');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/driver-img/driving-licence/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($driver->driving_licence != null) {
                $img = $driver->driving_licence;
                unlink($img);
            }
        } else {
            $image_url = $request->old_driving_licence;
        }

        $nid = null;
        $image2 = $request->file('nid');
        if ($image2) {
            $image2_name = hexdec(uniqid());
            $ext2 = strtolower($image2->getClientOriginalExtension());
            $image2_full_name = $image2_name . '.' . $ext2;
            $upload_path2 = 'public/driver-img/nid/';
            $nid = $upload_path2 . $image2_full_name;
            $success2 = $image2->move($upload_path2, $image2_full_name);
            if ($driver->nid != null) {
                $img = $driver->nid;
                unlink($img);
            }
        } else {
            $nid = $request->old_nid;
        }

        $photo = null;
        $image3 = $request->file('photo');
        if ($image3) {
            $image3_name = hexdec(uniqid());
            $ext3 = strtolower($image3->getClientOriginalExtension());
            $image3_full_name = $image3_name . '.' . $ext3;
            $upload_path3 = 'public/driver-img/photo/';
            $photo = $upload_path3 . $image3_full_name;
            $success2 = $image3->move($upload_path3, $image3_full_name);
            if ($driver->photo != null) {
                $img = $driver->photo;
                unlink($img);
            }
        } else {
            $photo = $request->old_photo;
        }
        // Image Handler
        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->email = $request->email;
        $driver->address = $request->address;
        $driver->photo = $photo;
        $driver->driving_licence = $image_url;
        $driver->nid = $nid;
        $driver->approval = "pending";
        $driver->save();
        $notification = array(
            'message' => 'Profile Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function changepassword()
    {
        return view('driver.profile.password');
    }
    public function updatepassword(Request $request)
    {
        $driver = Driver::findorfail(auth('driver')->id());
        $old_password = $request->old_password;
        if (Hash::check($request->old_password, $driver->password)) {
            if ($request->new_password == $request->confirm_password) {
                $driver->password = Hash::make($request->new_password);
                $driver->save();
                $notification = array(
                    'message' => 'Password Updated Successfully!',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);
            } else {
                return Redirect()->back()->with('message', "New Passwords did not matched!");
            }
        } else {
            return Redirect()->back()->with('message', "Old password did not matched!");
        }
    }
    public function show()
    {
        $drivers = Driver::orderBy('id', 'desc')->where('approval', 'pending')->get();
        return view('cargo.driver.show', compact('drivers'));
    }
    public function requestdetails($id)
    {
        $trucks = Truck::all();
        $driver = Driver::findorfail($id);
        return view('cargo.driver.request', compact('driver', 'trucks'));
    }
    public function approve(Request $request, $id)
    {
        $driver = Driver::findorfail($id);
        $driver->approval = 'approved';
        $driver->trucks()->detach();
        $driver->save();
        $driver->trucks()->sync($request->truck);
        return Redirect()->back()->with('message', "Approval Successful!");
    }
    public function decline($id)
    {
        $driver = Driver::findorfail($id);
        $driver->approval = 'rejected';
        $driver->save();
        return Redirect()->back()->with('message', "Declined Successfully!");
    }

    public function list()
    {
        $drivers = Driver::orderBy('id', 'desc')->get();
        return view('cargo.driver.list', compact('drivers'));
    }
    public function manage($id)
    {
        $driver = Driver::findorfail($id);
        $trucks = Truck::all();
        return view('cargo.driver.manage', compact('driver', 'trucks'));
    }
    public function changeTruck(Request $request, $id)
    {
        $driver = Driver::findorfail($id);
        $driver->trucks()->detach();
        $driver->save();
        $driver->trucks()->sync($request->truck);
        return Redirect()->back()->with('message', "Successfully Changed!");
    }
    public function block($id)
    {
        $driver = Driver::findorfail($id);
        $driver->block = 'blocked';
        $driver->save();
        return Redirect()->back()->with('message', "Blocked Successfully!");
    }
    public function unblock($id)
    {
        $driver = Driver::findorfail($id);
        $driver->block = null;
        $driver->save();
        return Redirect()->back()->with('message', "Unblocked Successfully!");
    }
}
