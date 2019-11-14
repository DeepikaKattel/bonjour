@extends('dashboard.layout.master')
@section('content')
<!-- <style>
#table1{
    width:500px;
    margin-left:450px;
    margin-top:20px;
}
#button1{
    width:100px;
    margin-left:850px;
}
</style> -->

    <div class="container col-lg-8" >
        <h1>News Content</h1>
        <a href="{{route('newscreate')}}" class="btn btn-info float-right">Add Record</a>
        <table class="table table-bordered" id="table1">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th scope="col">Heading1</th>
                <th scope="col">Content1</th>
                <th scope="col">Heading2</th>
                <th scope="col">Content2</th>
                <th scope="col">Heading3</th>
                <th scope="col">Content3</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        
            <tbody> 
            @foreach ($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->Heading1}}</td>
                    <td>{{$data->Content1}}</td>
                    <td>{{$data->Heading2}}</td>
                    <td>{{$data->Content2}}</td>
                    <td>{{$data->Heading3}}</td>
                    <td>{{$data->Content3}}</td>
                    <td>
                        <a  href="{{route('newsedit',$data->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                        <a href="{{route('newsdelete',$data->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
                
            @endforeach 
            </tbody>
        </table>
    </div>
@endsection
