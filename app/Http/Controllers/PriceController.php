<?php

namespace App\Http\Controllers;

use App\Good;
use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $goods = Good::all();
        return view('cargo.price.insert', compact('goods'));
    }
    public  function  insert(Request $request)
    {
        $request->validate([
            'good' => 'required',
            'price' => 'required',
        ]);
        $price = new Price;
        $price->price = $request->price;
        $price->save();
        $price->goods()->sync($request->good);
        $notification = array(
            'message' => 'Pricing Added Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function show()
    {
        $prices = Price::orderBy('id', 'desc')->get();
        return view('cargo.price.show', compact('prices'));
    }
    public function  destroy($id)
    {
        $price = Price::findorfail($id);
        $price->delete();
        $notification = array(
            'message' => 'Price Deleted Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $price = Price::findorfail($id);
        $goods = Good::all();
        return view('cargo.price.edit', compact('price', 'goods'));
    }
    public  function  update(Request $request)
    {
        $request->validate([
            'good' => 'required',
            'price' => 'required',
        ]);
        $price = Price::findorfail($request->id);
        $price->price = $request->price;
        $price->goods()->detach();
        $price->save();
        $price->goods()->sync($request->good);
        $notification = array(
            'message' => 'Pricing Added Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
