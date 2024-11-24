<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{

    public function SavePosition(Request $request){
        DB::table('positions')->insert([
            'name' => $request->name
        ]);
        return redirect('/add/position')->with('message', 'Postion Added!');
    }


    public function login(Request $request)
    {

       $users=Systemuser::all();
       foreach($users as $user){
        if($request->username==$user->username && $request->password==$user->password)
        {
            $image=$user->image;
            $user_name=$user->name;
            $id=$user->id;

            $request->session()->put('user',$user_name);
            $request->session()->put('image',$image);
            $request->session()->put('id',$id);
            // return session('id');

           return view("admin.welcome");
        }
    }

    return redirect()->to(Route('admin.login'))->with('success','Incorrect Password Or User_Name!');


}
}
