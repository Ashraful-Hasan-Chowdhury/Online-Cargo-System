<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index()
    {
        return view('cargo.goods.insert');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:goods',
            'type' => 'required',
        ]);
        $good = new Good;
        $good->name = $request->name;
        $good->type = $request->type;
        $good->save();
        $notification = array(
            'message' => 'Goods Added Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function show()
    {
        $goods = Good::orderBy('id', 'desc')->get();
        return view('cargo.goods.show', compact('goods'));
    }
    public function destroy($id)
    {
        $good = Good::findorfail($id);
        $good->delete();
        $notification = array(
            'message' => 'Goods Deleted Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $good = Good::findorfail($id);
        return view('cargo.goods.edit', compact('good'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);
        $good = Good::findorfail($request->id);
        $good->name = $request->name;
        $good->type = $request->type;
        $good->save();
        $notification = array(
            'message' => 'Goods Updated Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
