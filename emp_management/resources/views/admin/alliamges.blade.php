@extends('layouts.admin')

@section('admin')
    <div class="inner-block">

        <div class="market-updates">
            <div class="card-header">
                <a href="addimages" class="btn btn-success ">Add Images</a>
            </div>
            <h1 class="text-center">All Images</h1>
            {{-- {{ $employees }} --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th>Images</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($allphotos as $data)
                        <tr>
                            <td>
                               <img src="/Allphotos/{{ $data->Images }}" width="50px" height="50px" alt=""> 
                                 </td>
                            <td> <a href="deleteimage/{{ $data->id }}" onclick="return myFunction();"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
        <script>
            function myFunction() {
                if (!confirm("Are You Sure to delete this"))
                    event.preventDefault();
            }
        </script>
    </div>
@endsection
