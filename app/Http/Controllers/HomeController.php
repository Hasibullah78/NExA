<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\FinalRecord;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\Position;
use App\Models\SystemUser;
use App\Models\User;

class HomeController extends Controller
{
    public function Index()
    {
        $all_employees=Employee::all();
        $allocated_employees=$posts = Employee::join('final_records', 'employees.id', '=', 'final_records.employee_id')
        ->select('final_records.employee_id')->distinct('final_records.employee_id')->get();

        $all_items=Item::all();
        $item_category=ItemCategory::all();
        $admin_users=User::where('role',1)->get();
        $sub_users=User::where('role',2)->get();
        $positions=Position::all();
        return view('dashboard1',compact('all_employees','allocated_employees','all_items','item_category','admin_users','sub_users','positions'));




    }

}
