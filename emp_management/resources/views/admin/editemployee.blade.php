@extends('layouts.admin')


@section('admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                        Update Employee
                        {{-- <a href="viewallemployee" class="btn btn-success btn-xs py-0 float-end">Back</a> --}}
                    </div>
                    @if (session('message'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show mt-5" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <div class="card-body">
                        {{ Form::open(['url' => 'admin/updatedata/'.$editemployee->id, 'enctype' => 'multipart/form-data', 'method' => 'post']) }}

                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', $editemployee['name'] , ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', $editemployee['email'] , ['class' => 'form-control']) }}
                        </div>
                       
                        <div class="form-group">
                            {{ Form::label('profile_pic', 'profile_pic') }}
                            {{ Form::file('profile_pic', ['class' => 'form-control']) }}
                           <img src="/Uploads/{{ $editemployee['profile_pic'] }}" width="100px" height="100px" alt="">
                        </div>


                        {{ Form::submit('Update Employee', ['class' => 'btn btn-primary']) }}

                        {{ Form::close() }}

                        @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
