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
        <h1>Why us Content</h1>
        <a href="{{route('whycreate')}}" class="btn btn-info float-right">Add Record</a>
        <table class="table table-bordered" id="table1">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th scope="col">Heading</th>
                <th scope="col">Title</th>
                <th scope="col">Paragraph </th>
                <th scope="col">Paragraph1 </th>
                <th scope="col">Paragraph2 </th>
                <th scope="col">Paragraph3 </th>
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
                    <td>{{$data->Paragraph}}</td>
                    <td>{{$data->Paragraph1}}</td>
                    <td>{{$data->Paragraph2}}</td>
                    <td>{{$data->Paragraph3}}</td>
                    <td><img src="{{'whyus/'.$data->Image}}" alt="" style="height:60px;width: 60px;"></td>
                    <td>
                        <a  href="{{route('whyedit',$data->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                        <a href="{{route('whydelete',$data->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
                
            @endforeach 
            </tbody>
        </table>
    </div>
@endsection
