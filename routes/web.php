<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\Item_categoryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Welcome Page

Route::middleware('auth')->group(function () {
  Route::prefix('employee')->group(function () {
    Route::get('/all', function () {
        $records = Employee::join('positions','employees.position_id','positions.id')
        ->select('positions.name as position_name','employees.*')->orderBy('employees.id','desc')->get();
        return view('Employee.all',compact('records'));
    });
    Route::get('/add',[EmployeeController::class,'Add_Emp']);
    Route::post('/save',[EmployeeController::class,'Add']);
    Route::get('/allocated',[AllocationController::class,'Allocatd']);
    Route::get('record/view{id}',[AllocationController::class,'View']);
    Route::get('edit/records{emp_id}/{record_id}',[AllocationController::class,'Edit']);
    Route::post('update/items/fees9{id}',[AllocationController::class,'Update_Record']);

});

Route::prefix('items')->group(function(){
    Route::get('/category/all',[Item_categoryController::class,'View']);
    // Route::get('/view/category{id}',[Item_categoryController::class,'View']);
    // Route::get('/edit/category{id}',[Item_categoryController::class,'View']);
    Route::get('/all',[ItemsController::class,'View']);
    Route::get('/add/category',[Item_categoryController::class,'Add_Cat']);
    Route::post('/add/item_category',[Item_categoryController::class,'Add']);
    Route::get('/add',[ItemsController::class,'Add_Item']);
    Route::post('/save',[ItemsController::class,'Add']);
    Route::get('/allocate',[AllocationController::class,'allocate']);
    Route::post('/allcate/records',[AllocationController::class,'Save']);


});


Route::prefix('positions')->group(function(){
    Route::get('/view',[PositionController::class,'View']);
    Route::get('/add',[PositionController::class,'Add']);
    Route::post('/save',[PositionController::class,'SavePosition'])->name('add.position');
});
});
//Employees Part










































Route::get('dashboard',[Homecontroller::class,'Index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
