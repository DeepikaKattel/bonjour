@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Home page</h1>
        <a href="{{route('create')}}" class="btn btn-info float-right" >Add Record</a>
            <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Home</th>
                <th scope="col">Image</th>
                <th scope="col">Background</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->home}}</td>
                <td><img src="{{asset("$data->image")}}" style="height:30px;width: 50px;"></td>
                <td><img src="{{asset("$data->background")}}" style="height:30px;width: 50px;"></td>
                <td>
                    <a href="{{route('edit',$data->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                    <a onclick="alert('Do you want to delete')" href="{{route('delete',$data->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection

