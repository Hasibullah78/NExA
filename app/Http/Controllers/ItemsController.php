<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemCategory;

class ItemsController extends Controller
{
    //
    public function Add_Item()
    {
        $itm_categories=ItemCategory::all();
        return view('Items.add',compact('itm_categories'));
    }
    public function Add(Request $request)
    {
        // id	name	itemtype	item_unit	item_ssn	item_category_id	created_at	updated_at
        $items=new Item;
        $items->name=$request->item_name;
        $items->itemtype=$request->item_type;
        $items->item_unit=$request->item_quantities;
        $items->item_ssn=$request->item_ssn;
        $items->item_category_id=$request->item_categories;
        $items->save();
        return redirect()->back()->with('success','Item added successfully');



    }
    public function View()
    {
        $records=Item::all();
        $categories=ItemCategory::select('name','id')->get();
        // return $categories;
        return view('Items.all',compact('records','categories'));
    }
}
