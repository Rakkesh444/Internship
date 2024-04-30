<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class products extends Controller
{
    //main page
    public function index()
    {
        // $producted = product::get();
        return view("templates.home");
    }

    public function input()
    {
        return view("templates.inputpage");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'textarea' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'file' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $imagename = time() . "." . $request->file->extension();
        $request->file->move(public_path('brandimages'), $imagename);

        $Product = new product;

        $Product->file = $imagename;
        $Product->name = $request->name;
        $Product->textarea = $request->textarea;
        $Product->mrp = $request->mrp;
        $Product->price = $request->price;
        $Product->save();
        return back();

    }

}
