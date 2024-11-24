@extends('layout')
@section('main')
<script src="{{ asset('jquery.js') }}"></script>

<div class="card">
    <div class="crad-header">
        <div class="card-body">
            <form action="{{ url('employee/update/items/fees9'.$updatable_item->id) }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                <div class="alert alert-success" style="text-align: center" role="alert">
                    <button type="button" style="border: none; outline:none" class="close" data-dismiss="alert">
                   <span class="text-black">{{ session('success') }}</span>
                </div>
                @endif
                @if (session('danger'))
                <div class="alert alert-danger" style="text-align: center" role="alert">
                    <button type="button" class="" data-dismiss="alert">
                   <span class="text-black" >{{ session('danger') }}</span>
                </div>
                @endif

                 <div class="row">
                    <div class="col-md-4">
                        <h6 style="text-align: center" id="fees">Fees_9_Paper Related Portion</h6>

                        <div class="row">


                        <div class="col-md-3">
                            <div class="form-group">
                                {{-- <h6 style="text-align: center" id="fees">Fees_9</h6> --}}
                                {{-- <p class="btn btn-outline-secondary">Click</p> --}}
                                <img src="{{ asset($updatable_item->fees_9_photo) }}" alt="{{ $updatable_item->fees_9_photo }}" id="image" height="60" width="60">

                                {{-- <input type="button" style="text-align: center" class="btn btn-outline-primary btn-lg btn-block " value="Click here for fees-9"> --}}
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                {{-- <h6 style="text-align: center" id="fees">Fees_9</h6> --}}
                                {{-- <p class="btn btn-outline-secondary">Click</p> --}}
                                {{-- <img src="{{ asset($updatable_item->fees_9_photo) }}" alt="{{ $updatable_item->fees_9_photo }}" id="image" height="60" width="60"> --}}

                               <a href="{{ url('fees9/manage'.$updatable_item->id) }}"><input type="button" style="text-align: center" class="btn btn-outline-primary btn-lg btn-block mt-3" value="Click here for fees-9"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6 style="text-align:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose Photo</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="item_checkbox"   id="item_checkbox">
                                        <label><small> Switch for</small> editing</label>
                                    <input type="file" class="mt-2" disabled name="change_image" id="change_image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">


                                <h6 style="text-align: center" id="TEXT">Choose Employee</h6>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="emp_checkbox" id="emp_checkbox">
                                    <label for="">Switch checkbox for editing</label>
                                    <select name="employee" disabled id="employee"  class="form-control">

                                       @foreach ($employees as $employee)
                                        @php
                                            $position=DB::table('positions')->where('id',$employee->position_id)->first();
                                        @endphp
                                        <option value="{{ $employee->id }}">{{$employee->name}}  {{$position->name }}</option>


                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>




                    </div>
                    <div class="container h-100 mt-5">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary"  id="button" style="border-radius: 10%">

                                  <i class="fas fa-sync"></i> Update

                            </div>

                        </div>
                    </div>
                    {{-- <input type="submit" class="d-flex  justify-content-center align-items-center" value="Update"> --}}

         </form>

        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $("#image").mouseover(function(){
            $("#image").css({"height" : "297mm","width":"210mm"});
        });
        $("#image").mouseout(function(){
            $("#image").css({"height" : "60","width":"60"});
        });

        $("#item_checkbox").change(function(){
            if ($('#item_checkbox').is(':checked')) {

                $('#change_image').prop('disabled', false);
                // $('#button').prop('disabled', false);

                }
                else
                $('#change_image').prop('disabled', true);
        });
        $("#emp_checkbox").change(function(){
            if ($('#emp_checkbox').is(':checked')) {

                $('#employee').prop('disabled', false);
                // $('#button').prop('disabled', false);

                } else
                      $('#employee').prop('disabled', true);
        });
        // $("#image").mouseout(function(){
        //     $("#image").css({"height" : "80","width":"80"});

    });
</script>



    @endsection

