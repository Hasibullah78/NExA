@extends('layout')
@section('main')
<style>
   <style rel="stylesheet">
   th,td{
    text-align: center;
}
</style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center">اجناس لرونکو کارمندانو لیست</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th style="text-align: center" scope="col" >ای ډی</th>
                                    <th style="text-align: center" scope="col" >نوم</th>
                                    <th style="text-align: center" scope="col">د پلار نوم</th>
                                    <th style="text-align: center" scope="col">تیلیفون شماره</th>
                                    <th style="text-align: center" scope="col">بست</th>
                                    <th style="text-align: center" scope="col">تصویر</th>
                                    <th id="textalign" scope="col">پروفایل او ایډیټ</th>



                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                <tr>
                                    <td style="text-align: center">{{ $record->id }}</th>
                                    <td style="text-align: center">{{ $record->name }}</td>
                                    <td style="text-align: center">{{ $record->f_name }}</td>
                                    <td style="text-align: center">{{ $record->phone }}</td>
                                    <td style="text-align: center">{{ $record->post_name }}</td>
                                    <td style="text-align: center"><img style="border-radius: 100%" src="{{ asset($record->photo) }}" alt="{{ $record->photo }}" height="60" width="60"></td>
                                    <td style="text-align: center"><a style="border-radius: 30%" href="{{ url('employee/record/view'.$record->emp_id) }}" class=" btn btn-secondary"><i class="fa fa-eye"></i>&nbsp;<i class="fa fa-edit"></i></a>
                                        {{-- <a style="border-radius: 30%" href="{{ url('/edit/records'.$record->emp_id) }}" class=" btn btn-primary">Edit_Profile</a></td> --}}

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
