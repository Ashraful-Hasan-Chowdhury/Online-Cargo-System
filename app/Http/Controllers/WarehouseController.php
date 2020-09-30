<?php

namespace App\Http\Controllers;

use App\City;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouse = Warehouse::findorfail(auth('warehouse')->id());
        $cities = City::all();
        return view('warehouse.profile.edit', compact('warehouse', 'cities'));
    }
    public function update(Request $request)
    {
        $warehouse = Warehouse::findorfail(auth('warehouse')->id());
        // Image Handler
        $image_url = null;
        $image = $request->file('manager_img');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/warehouse-img/manager-img/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($warehouse->manager_img != null) {
                $img = $warehouse->manager_img;
                unlink($img);
            }
        } else {
            $image_url = $request->old_manager_img;
        }

        $nid = null;
        $image2 = $request->file('nid');
        if ($image2) {
            $image2_name = hexdec(uniqid());
            $ext2 = strtolower($image2->getClientOriginalExtension());
            $image2_full_name = $image2_name . '.' . $ext2;
            $upload_path2 = 'public/warehouse-img/nid/';
            $nid = $upload_path2 . $image2_full_name;
            $success2 = $image2->move($upload_path2, $image2_full_name);
            if ($warehouse->nid != null) {
                $img = $warehouse->nid;
                unlink($img);
            }
        } else {
            $nid = $request->old_nid;
        }

        $warehouse_img = null;
        $image3 = $request->file('warehouse_img');
        if ($image3) {
            $image3_name = hexdec(uniqid());
            $ext3 = strtolower($image3->getClientOriginalExtension());
            $image3_full_name = $image3_name . '.' . $ext3;
            $upload_path3 = 'public/warehouse-img/warehouse-img/';
            $warehouse_img = $upload_path3 . $image3_full_name;
            $success3 = $image3->move($upload_path3, $image3_full_name);
            if ($warehouse->warehouse_img != null) {
                $img = $warehouse->warehouse_img;
                unlink($img);
            }
        } else {
            $warehouse_img = $request->old_warehouse_img;
        }

        $document = null;
        $image4 = $request->file('document');
        if ($image4) {
            $image4_name = hexdec(uniqid());
            $ext4 = strtolower($image4->getClientOriginalExtension());
            $image4_full_name = $image4_name . '.' . $ext4;
            $upload_path4 = 'public/warehouse-img/document/';
            $document = $upload_path4 . $image4_full_name;
            $success4 = $image4->move($upload_path4, $image4_full_name);
            if ($warehouse->document != null) {
                $img = $warehouse->document;
                unlink($img);
            }
        } else {
            $document = $request->old_document;
        }
        // Image Handler
        $warehouse->name = $request->name;
        $warehouse->manager_img = $image_url;
        $warehouse->phone = $request->phone;
        $warehouse->nid = $nid;
        $warehouse->email = $request->email;
        $warehouse->warehouse_name = $request->warehouse_name;
        $warehouse->warehouse_img = $warehouse_img;
        $warehouse->city = $request->city;
        $warehouse->document = $document;
        $warehouse->address = $request->address;
        $warehouse->approve = "pending";
        $warehouse->save();
        $notification = array(
            'message' => 'Informations Successfully Updated!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function changepassword()
    {
        return view('warehouse.profile.password');
    }
    public function updatepassword(Request $request)
    {
        $warehouse = Warehouse::findorfail(auth('warehouse')->id());
        $current_password = $warehouse->password;
        $old_password = $request->old_password;
        if (Hash::check($old_password, $current_password)) {
            if ($request->new_password == $request->confirm_password) {
                $current_password = Hash::make($request->new_password);
                $warehouse->save();
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
}
