<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\FinalRecord;
use Intervention\Image\Facades\Image;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
class AllocationController extends Controller
{
    //

    public function Allocate(){
        $employees=Employee::select('*')->orderBy('id', 'desc')->get();
        $items=Item::select('*')->orderBy('id', 'desc')->get();
        return view('Allocation.Allocate',compact('employees','items'));
    }
    public function Save(Request $request)
    {


        $items=Item::select('item_unit')->where('id',$request->item_id)->first();
            if($request->item_quantity<=$items->item_unit){
                $remain_items=$items->item_unit-$request->item_quantity;
                DB::table('items')->where('id',$request->item_id)->update([
                'item_unit'=>$remain_items
             ]);
              $request->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             ]);
            $fees_9=$request->file('pic');
             $name_gen=$request->emp_id.time().".".$fees_9->getClientOriginalExtension();
              Image::make($fees_9)->save('fees_9/image/'.$name_gen);
             $location_Path="fees_9/image/".$name_gen;
             DB::table('final_records')->insert([
                'item_id'=>$request->item_id,
                'employee_id'=>$request->emp_id,
                'item_unit'=>$request->item_quantity,
                'fees_9_photo'=>$location_Path
             ]);
             $emp_name=Employee::select('name')->where('id',$request->emp_id)->first();
         return redirect()->back()->with('success',$request->item_quantity.' Items are allocated to '.$emp_name->name.' Remain Items are '.$remain_items);

        }
        else
        {
            return redirect()->back()->with('success',' Allocation failed, all items in stock are '.$items->item_unit);

        }

        // $request->validate([
        //     'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
        // $student_img=$request->file('pic');
        // $name_gen=$request->emp_id.time().".".$student_img->getClientOriginalExtension();
        //  Image::make($student_img)->save('fees9/'.$name_gen);
        // $location_Path="studemployee/image/".$name_gen;

        // DB::table('final_records')->insert([
        //     'item_id' => $request->name,
        //     'f_name'=> $request->f_name,
        //     'phone' => $request->phone,
        //     'position_id' =>$request->position,
        //     'photo' => $location_Path
        // ]);
        // return redirect()->back()->with('success','Registeration done Successfully');
    }
    public function View($id)
    {
        $records = DB::table('final_records')
            ->join('employees', 'final_records.employee_id', '=', 'employees.id')
            ->join('items', 'final_records.item_id', '=', 'items.id')
            ->join('positions', 'positions.id', '=', 'employees.position_id')
            ->select('final_records.item_unit','final_records.id as record_id','final_records.fees_9_photo','employees.id as emp_id',
            'employees.name','employees.f_name','employees.photo','employees.phone','positions.name as post_name',
            'items.name as item_name','items.itemtype','items.item_ssn')
            ->where('final_records.employee_id',$id)->get();

       return view('Employee.record',compact('records'));
    }
    public function Edit($emp_id,$record_id){
        $employees=Employee::All();
        $updatable_emp=Employee::select('position_id','id','name')->where('id',$emp_id)->first();
        $updatable_item=FinalRecord::select('item_id','item_unit','fees_9_photo','id')->where('id',$record_id)->first();
        $all_items=Item::All();

        return view('Allocation.Edit',compact('employees','updatable_emp','updatable_item','all_items'));
    }
    public function Check(Request $request){

        $check=$request->checked;
        return $check;
    }
    public function Fees_9($id){
        $fees_9=FinalRecord::where('id',$id)->first();

        return view('Allocation.fees9_1',compact('fees_9'));
    }
    public function Update_Record(Request $request,$id){
        $empckx=$request->emp_checkbox;
        $itmckx=$request->item_checkbox;
        $employee=$request->employee;
        $pic=$request->file('change_image');
        $old_fees_9=FinalRecord::select('fees_9_photo')->where('id',$id)->first();
        if($pic || $employee){
            if($pic){
                $request->validate([
                    'change_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                     ]);
                    $fees_9=$request->file('change_image');
                     $name_gen=$id.time().".".$fees_9->getClientOriginalExtension();
                      Image::make($fees_9)->save('fees_9/image/'.$name_gen);
                      $images=FinalRecord::select('fees_9_photo')->where('id',$id)->first();
                        unlink($images->fees_9_photo);
                        $location_Path="fees_9/image/".$name_gen;
                        DB::table('final_records')->where('id',$id)->update([
                           'fees_9_photo'=>$location_Path
                        ]);
            }
            if($employee){
                DB::table('final_records')->where('id',$id)->update([
                    'employee_id'=>$employee
                    ]);
            }
            return redirect()->back()->with('success','Updation done Successfully');
        }
        return redirect()->back()->with('danger','Updation Fail');

    }
    public function Allocatd()
    {

        $records=Employee::join('final_records','employees.id','=','final_records.employee_id')->
        join('positions','positions.id','employees.position_id')->
        select('employees.*','final_records.employee_id as emp_id','positions.name as post_name')
        ->distinct('final_records.emp_id')->get();
        return view('Allocation.Allocated',compact('records'));

    }
}
