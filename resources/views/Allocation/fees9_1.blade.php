@extends('layout')
@section('main')
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<script src="{{ asset('jquery.js') }}"></script>





         <div class="row fees9">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
               <span class="text-black">{{ session('success') }}</span>
            </div>
            @endif

            <div class="col-lg-12">
                <h6 style="text-align: center" id="fees" class="notprint">Fees_9_Paper Related Portion</h6>
             <img src="{{ asset($fees_9->fees_9_photo) }}" alt="{{ $fees_9->id }}" id="image" >
            </div>
            <input type="button" class="btn btn-primary" onclick="window.print()" value="Print">
         </div>
<script>

</script>
    @endsection

