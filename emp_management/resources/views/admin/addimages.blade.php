@extends('layouts.admin')

@section('admin')
    <div class="inner-block">

        <div class="market-updates">

            <h1 class="text-center">All Images</h1>
            <form action="/admin/saveimage" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" name="Images" id="images" class="form-control" multiple>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="add" value="Upload Images">
                </div>



            </form>


        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
