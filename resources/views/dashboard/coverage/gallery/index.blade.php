
@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Gallery</h1>
        <a href="{{route('galleries.create')}}" class="btn btn-info float-right" >Add Record</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image1</th>
                <th scope="col">Image2</th>
                <th scope="col">Image3</th>
                <th scope="col">Image4</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset("$data->image1")}}" style="height:30px;width: 50px;"></td>
                    <td><img src="{{asset("$data->image2")}}" style="height:30px;width: 50px;"></td>
                    <td><img src="{{asset("$data->image3")}}" style="height:30px;width: 50px;"></td>
                    <td><img src="{{asset("$data->image4")}}" style="height:30px;width: 50px;"></td>
                    <td>
                        <a href="{{route('galleries.edit',$data->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                        <a onclick="alert('Do you want to delete')" href="{{route('g.destroy',$data->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


