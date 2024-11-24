<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Position;
use Carbon\Carbon;

class PositionController extends Controller
{
    public function Add()
    {
        return view('Position.position');
    }
    public function SavePosition(Request $request){
        DB::table('positions')->insert([
            'name' => $request->name,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('success',' Position Added Successfully');

        // return redirect()->back(['message' => 'Position Added Successfully']);
    }
    public function View()
    {
        $records=Position::all();
        return view('position.all',compact('records'));

    }
}
