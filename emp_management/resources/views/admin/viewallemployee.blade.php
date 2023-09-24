@extends('layouts.admin')

@section('admin')
    <div class="inner-block">

        <div class="market-updates">
            <div class="card-header" >
                <a href="addemp" class="btn btn-success ">Add Employee</a>
            </div>
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
                        
                        @if ($data->role_id == 2)<?php $i++; ?>
                            <tr>
                                <td> {{ $i }} </td>
                                <td> {{ $data->name }} </td>
                                <td> {{ $data->email }} </td>
                                <td>
                                    <img src="/Uploads/{{ $data->profile_pic }}" width="50px" height="50px" alt="">
                                </td>
                                <td>
                                    <a href="editemployee/{{ $data->id }}"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i></a>
                                 &nbsp; &nbsp;  <a href="deleteemployee/{{ $data->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a>
                                </td>


                            </tr>
                        @endif
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>
@endsection
