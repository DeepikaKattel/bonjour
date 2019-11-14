@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Services</h1>
        <h2>What we do?</h2>
        <a href="{{route('services.create')}}" class="btn btn-info float-right" >Add Record</a> 
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Sub Heading 1</th>
                <th scope="col">Content 1</th>
                <th scope="col">Sub Heading 2</th>
                <th scope="col">Content 2</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        <tbody>
        @foreach($service as $ser)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$ser->sub_heading1}}</td>
                <td>{{$ser->content1}}</td>
                <td>{{$ser->sub_heading2}}</td>
                <td>{{$ser->content2}}</td>
                <td>
                    <a href="{{route('services.edit',$ser->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                    @method('DELETE')
                    <a onclick="alert('Do you want to delete')" href="{{route('s.destroy',$ser->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <br>
        <h2>What we have?</h2>      
        <a href="{{route('products.create')}}"class="btn btn-info float-right" >Add Record</a> 
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $pro)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pro->product}}</td>
                        <td>{{$pro->description}}</td>
                        <td>
                            <a href="{{route('products.edit',$pro->id)}}" class="btn btn-primary" style="display: inline-block">Edit</a>
                            @method('DELETE')
                            <a onclick="alert('Do you want to delete')" href="{{route('p.destroy',$pro->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    </div>
    @endsection

