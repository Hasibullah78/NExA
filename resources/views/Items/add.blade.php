@extends('layout')
@section('main')

<div class="card">
    {{-- <form action="{{ url('/add/items') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data"> --}}
        @if (session('success'))
        <div class="alert alert-success col-12 d-flex justify-content-center align-items-center"  role="alert">
            <button type="button" style="border: none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif




        <div class="card-body">

            <form action="{{ url('/items/save') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class=" col-md-3">
                            <div class="form-group">
                                <label for="Item"><span>Item_Name</span></label>
                                <input type="text"  autofocus dir="rtl" required class="form-control" name="item_name" class="form-control"  placeholder=" ">
                                @error('name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Item"><span>Item_Type</span></label>
                                <input type="text" required  dir="rtl" class="form-control" name="item_type" placeholder=" ">
                                @error('e_f_name')
                                <span class=" text-danger">{{ $message }}</span>
                                 @enderror
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Item"><span>Item_Category</span></label>
                                <select name="item_categories"  dir="rtl" class="form-select"   style="text-align: center">
                                    @foreach ($itm_categories as $itm_cat)
                                    <option value="{{ $itm_cat->id }}">{{ $itm_cat->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Item"><span>Item_Quantity</span></label>

                                    <input type="number" required  dir="rtl" class="form-control" name="item_quantities" placeholder=" ">
                                    @error('e_f_name')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Item"><span>Item_SSN</span></label>
                                <input type="text" required  dir="rtl" class="form-control" name="item_ssn" placeholder=" ">
                                @error('e_f_name')
                                <span class=" text-danger">{{ $message }}</span>
                                 @enderror
                            </div>
                        </div>
                    </div>

                    <div class="container h-100 mt-5">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <button class="btn btn-lg btn-secondary"  id="button" style="border-radius: 10%">

                                    <i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                                      </svg></i>&nbsp;Add Items

                            </div>

                        </div>
                    </div>
            </form>

        </div>

     </div>





    @endsection

