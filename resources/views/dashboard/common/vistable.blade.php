@extends('dashboard.layout.master')
@section('content')

    <div class="container col-lg-8" >
        <h1>Vision & Mission Content</h1>
        <a href="{{route('visioncreate')}}" class="btn btn-info float-right">Add Record</a>
        <table class="table table-bordered" id="table1">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th scope="col">Heading</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        
            <tbody> 
            @foreach ($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->Heading}}</td>
                    <td>{{$data->Title}}</td>
                    <td><img src="{{'vision/'.$data->Image}}" alt="" style="height:60px;width: 60px;"></td>
                    <td>
                        <a  href="{{route('visionedit',$data->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                        <a href="{{route('visiondelete',$data->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
                
            @endforeach 
            </tbody>
        </table>
    <h1>Points Content</h1>
    <a href="{{route('pointscreate')}}" class="btn btn-info float-right">Add Record</a>
    <table class="table table-bordered" id="table1">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th scope="col">Points </th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($points as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->Points}}</td>
                <td>
                    <a  href="{{route('pointsedit',$data->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                    <a href="{{route('pointsdelete',$data->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
@endsection
