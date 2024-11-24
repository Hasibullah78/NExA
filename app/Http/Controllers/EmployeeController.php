<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use Intervention\Image\Facades\Image;


class EmployeeController extends Controller
{
    public function Add_Emp()
    {
        $positions=Position::all();
        return view('Employee.add',compact('positions'));
    }
    public function Add(Request $request){

        $request->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $emp_image=$request->file('pic');
        $name_gen=$request->name.time().".".$emp_image->getClientOriginalExtension();
         Image::make($emp_image)->save('employee/images/'.$name_gen);
        $location_Path="employee/images/".$name_gen;
        DB::table('employees')->insert([
            'name' => $request->name,
            'f_name'=> $request->f_name,
            'phone' => $request->phone,
            'position_id' =>$request->position,
            'photo' => $location_Path
        ]);
        return redirect()->back()->with('success','Registeration done Successfully');
        // return redirect('/add/position')->with('message', 'Postion Added!');
        // id	name	f_name	photo	phone	position_id
        // $Emp=new Employee();
        // $Emp->name=$request->name;
        // $Emp->f_name=$request->f_name;
        // $Emp->
    }
}
