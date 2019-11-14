@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Information</h1>
        <a href="{{route('information.create')}}"class="btn btn-info float-right" >Add Record</a> 
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Phone no</th>

                <th scope="col">Action</th>
            </tr>
            </thead>
        <tbody>
                <tbody>
                        @foreach($information as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->address}}</td>
                                <td>{{$info->email}}</td>
                                <td>{{$info->phone}}</td>
                                <td>
                                    <a href="{{route('information.edit',$info->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                                    @method('DELETE')
                                    <a onclick="alert('Do you want to delete')" href="{{route('i.destroy',$info->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                                </td>
                            </tr>
                            @endforeach
        </tbody>
        </table>         
    </div>
    @endsection

