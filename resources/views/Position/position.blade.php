@extends('layout')
@section('main')


        <div class="card">

            <div class="card-body">
                <form action="{{ route('add.position') }}" method="post">
                    @csrf
                    @if (session('success'))
        <div class="alert alert-success col-12 d-flex justify-content-center align-items-center"  role="alert">
            <button type="button" style="border: none" class="close" data-dismiss="alert">
           <span class="text-black">{{ session('success') }}</span>
        </div>
        @endif
                    <div class="form-group">
                      <h4 style="text-align: center">د بست نوم</h4>
                      <input type="text" dir="rtl" autofocus required name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                   @error('name')
                       <span class=" text-danger">{{ $message }}</span>
                   @enderror
                    </div>
                    <div class="container bg-light">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-lg btn-secondary"  id="button" style="border-radius: 10%">

                                <i class="fas fa-save"></i> Save
                        </div>
                    </div>
                  </form>
            </div>


        </div>

    </div>
</div>
@endsection
