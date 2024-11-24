@extends('layout')
@section('main')



    <form action="{{ url('employee/save') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
        <div class="alert alert-success col-12 d-flex justify-content-center align-items-center"  role="alert">
            <button type="button" style="border: none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif
        <div class="card mt-5">
            <div class="card-body">


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        <label for="name" ><span>نوم</span></label>
                        {{-- <h4 style="text-align: center">نوم</h4> --}}
                        <input type="text" style="font-size: 120%" autofocus dir="rtl" required class="form-control" name="name" class="form-control"  placeholder="حسیب الله">
                        @error('name')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <label for="name" ><span>د پلار نوم</span></label>


                        <input type="text" style="font-size: 120%" required  dir="rtl" class="form-control" name="f_name" placeholder="فضل الرحمن">
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <label for="name" ><span>د اړیکو شمیره</span></label>

                        <input type="text" style="font-size: 120%" required class="form-control"  dir="rtl" name="phone" style="font-size: 150%" placeholder="۰۷۸۹۵۱۵۹۵۰">
                        @error('e_f_name')
                        <span class=" text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
             <div class="row">
                <div class="col-md-6">
                    <div class="form-group" style="text-align: center">
                        <label for="name" ><span>بست</span></label>
                        <select name="position"   dir="rtl" class="form-select"   style="text-align: center; font-size:110%">
                            @foreach ($positions as $position)
                            <option value="{{ $position->id }}"><i>{{ $position->name }}</i></option>
                            @endforeach

                        </select>
                      </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group" style="text-align: center">
                        {{-- <label for="position"><strong>د پلار نوم</strong></label> --}}
                        <label for="name" ><span>تصویر</span></label>

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

                          <i class="fas fa-save"></i> Save

                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    @endsection

