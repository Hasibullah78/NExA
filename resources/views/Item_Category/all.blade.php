@extends('layout')
@section('main')
<style rel="stylesheet">
   #textalign,th,td{
    text-align: center;
}
.button{
    text-align: center;
}
</style>
<div class="card">
    <div class="row">
        <div class="col-12 mx-auto justify-content-center align-items-center">


                <div class="card-header">
                    <h4 class="card-title" style="text-align: center"> کټګوریو لیست</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display"  style="min-width: 845px; border-radius:20%" >
                            <thead>
                                <tr>
                                    <th scope="col">شماره</th>
                                    <th scope="col"> کټګوري نوم</th>
                                    <th scope="col">د ثبت نیټه</th>
                                    <th id="textalign" scope="col"> ایدیټ او کتل</th>
                                  </tr>
                            </thead>
                            <tbody>
                                    @foreach ($records as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->created_at }}</td>
                                    <td><div class="button"><a style="border-radius: 30%" href="{{ url('/view/category'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-eye" style="font-size: 100%"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a style="border-radius: 30%" href="{{ url('/edit/category'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-edit" style="font-size: 100%"></i></a></div>
                                    </td>

                                        {{-- <td>{{ $record->item_unit }}</td> --}}
                                    </tr>
                                    @endforeach





                            </tbody>

                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
