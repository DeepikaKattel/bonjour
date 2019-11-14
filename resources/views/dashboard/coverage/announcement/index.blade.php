@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Announcement</h1>
        <a href="{{route('announcement.create')}}" class="btn btn-info float-right" >Add Record</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title1</th>
                <th scope="col">Announcement1</th>
                <th scope="col">Title2</th>
                <th scope="col">Announcement2</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->title1}}</td>
                    <td>{{$data->announcement1}}</td>
                    <td>{{$data->title2}}</td>
                    <td>{{$data->announcement2}}</td>
                    <td>
                        <a href="{{route('announcement.edit',$data->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                        <a onclick="alert('Do you want to delete')" href="{{route('a.destroy',$data->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


