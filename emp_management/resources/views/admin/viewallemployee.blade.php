@extends('layouts.admin')

@section('admin')
<div class="inner-block">
   
         <div class="market-updates">
            <h1 class="text-center">All Employee</h1>
            {{-- {{ $employees }} --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SR.NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile_pic</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($employees as $data)
                        <?php $i++; ?>
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{ $data->name }} </td>
                            <td> {{ $data->email }} </td>
                            <td>
                                <img src="/Uploads/{{ $data->profile_pic }}" width="50px" height="50px" alt="">
                            </td>
                            <td> {{ $data->id }} </td>


                        </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>
@endsection
