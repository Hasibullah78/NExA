<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use Carbon\Carbon;


class Item_categoryController extends Controller
{
    //
    public function Add_Cat()
    {
        return view('Item_Category.add');
    }
    public function add(Request $request)
    {
        $itm_cat=new ItemCategory;
        $itm_cat->name=$request->name;
        $itm_cat->created_at=Carbon::now();
        $itm_cat->save();
        return redirect()->back()->with('success','Category added successfully');

    }
    public function View()
    {
        $records=ItemCategory::all();
        return view('Item_Category.all',compact('records'));
    }
}
