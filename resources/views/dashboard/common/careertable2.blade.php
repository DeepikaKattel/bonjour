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
        <h1>Career Content</h1>
        <a href="{{route('careercreate')}}" class="btn btn-info float-right">Add Record</a>
        <table class="table table-bordered" id="table1">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th scope="col">Title</th>
                <th scope="col">Job Title</th>
                <th scope="col">Job Description </th>
                <th scope="col">Deadline</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        
            <tbody> 
            @foreach ($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->Title}}</td>
                    <td>{{$data->JobTitle}}</td>
                    <td>{{$data->JobDescription }}</td>
                    <td>{{$data->Deadline }}</td>
                    <td>
                        <a  href="{{route('careeredit',$data->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                        <a href="{{route('careerdelete',$data->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
                
            @endforeach 
            </tbody>
        </table>
    </div>
    <div class="container col-lg-8" >
        <h1>Requirements</h1>
        <a href="{{route('requirement.create')}}" class="btn btn-info float-right">Add Record</a>
        <table class="table table-bordered" id="table1">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th scope="col">Requirement</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        
            <tbody> 
                    @foreach ($requirement as $req)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$req->requirement}}</td>
                        <td>
                            <a  href="{{route('requirement.edit',$req->id)}}" class="btn btn-primary" style="display:inline-block">Edit</a>
                            @method('DELETE')
                            <a href="{{route('r.destroy',$req->id)}}" onclick="alert('Do you want to delete?')" class="btn btn-danger" style="display:inline-block">Delete</a>
                        </td>
                    </tr>
                    
                @endforeach 
            </tbody>
        </table>
    </div>
@endsection

