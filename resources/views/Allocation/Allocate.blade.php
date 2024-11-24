@extends('layout')
@section('main')



<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{-- <button type="button" class="close" data-dismiss="alert">×</button>
                   <span class="text-black" style="text-center">{{ session('success') }}</span> --}}
                   <p class="text-black" style="text-align: center">{{ session('success') }}</p>
                </div>
                @endif
            </div>


            <div class="card-body">

                <form action="{{ url('items/allcate/records') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class=" col-md-6">
                                <div class="form-group" style="text-align: right">
                                    <label for="item_quantity"><span>کارمندان</span></label>


                                    <select name="emp_id"  dir="rtl" class="form-select"   style="text-align: center;font-size:120%">
                                        @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group" style="text-align: right">
                                    <label for="item_quantity"><span>اجناس</span></label>

                                    {{-- <h4 style="text-align: center">Items</h4> --}}
                                    <select name="item_id"  dir="rtl" class="form-select"   style="text-align: center;font-size:120%">
                                        @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                  </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="text-align: center">

                                    <label for="item_quantity"><span>د اجناسو تعداد</span></label>
                                    {{-- <label for="position" style="text-align: center"><strong style="text-align: center">نوم</strong></label> --}}
                                    <input type="number"  style="font-size:120%" autofocus dir="rtl" required class="form-control" name="item_quantity"  placeholder=" ">
                                    @error('name')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group" style="text-align: center">
                                    {{-- <h5 style="text-align: center">Fees-9</h5> --}}
                                    <label for="item_quantity"><span>فیس نو </span></label>
                                    {{-- <label for="position" style="text-align: center"><strong style="text-align: center">نوم</strong></label> --}}
                                    <input type="file" required class="form-control" name="pic"  dir="rtl" placeholder="">
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
                                              </svg></i>&nbsp;Allocate

                                    </div>

                                </div>
                            </div>
                </form>



            </div>
        </div>

    @endsection

