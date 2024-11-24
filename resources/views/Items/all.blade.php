@extends('layout')
@section('main')
@php
    use App\Models\ItemCategory;

@endphp

<div class="card">
    <div class="row">
        <div class="col-12 mx-auto justify-content-center align-items-center">


                <div class="card-header">
                    <h4 class="card-title" style="text-align: center"> اجناسو لیست</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display"  style="min-width: 845px; border-radius:20%" >
                            <thead>
                                <tr>
                                    <th scope="col" class="th" style="text-align: center">شماره</th>
                                    <th scope="col" style="text-align: center">جنس نوم</th>
                                    <th scope="col" style="text-align: center">نوعیت</th>
                                    <th scope="col" style="text-align: center">مقدار</th>
                                    <th scope="col" style="text-align: center">مسلسل شماره</th>
                                    <th scope="col" style="text-align: center">کټګوري</th>
                                    <th scope="col" style="text-align: center">ثبت نیټه</th>
                                    <th scope="col" class="th" style="text-align: center" >ایډیټ او کتل</th>

                                  </tr>
                            </thead>
                            <tbody>
                                    @foreach ($records as $record)
                                    @php
                                    $category=ItemCategory::select('name')->where('id',$record->item_category_id)->first();
                                @endphp
                                    <tr>
                                        <td style="text-align: center">{{ $record->id }}</td>
                                        <td style="text-align: center">{{ $record->name }}</td>
                                        <td style="text-align: center">{{ $record->itemtype }}</td>
                                        <td style="text-align: center">{{ $record->item_unit }}</td>
                                        <td style="text-align: center">{{ $record->item_ssn }}</td>
                                        <td style="text-align: center">{{ $category->name }}</td>
                                        <td style="text-align: center">{{ $record->created_at }}</td>
                                    <td style="text-align: center"><a style="border-radius: 30%" href="{{ url('/view/item'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-eye" style="font-size: 100%"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a style="border-radius: 30%" href="{{ url('/edit/item'.$record->id) }}" class=" btn btn-secondary"><i class="fa fa-edit" style="font-size: 100%"></i></a>
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
