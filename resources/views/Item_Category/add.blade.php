@extends('layout')
@section('main')
    <form action="{{ url('items/add/item_category') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
        <div class="alert alert-success col-12 d-flex justify-content-center align-items-center"  role="alert">
            <button type="button" style="border: none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif
            <div class="card">
                <div class="card-body">


                <div class="container h-100 mt-5">
                    <div class="row h-100">
                        <div class="col-md-12 mx-auto d-flex justify-content-center align-items-center">
                            <input type="text" style="font-size: 130%"  autofocus dir="rtl" required class="form-control" name="name" class="form-control"  placeholder="حسیب الله">
                            @error('name')
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

