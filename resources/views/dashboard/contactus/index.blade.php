@extends('dashboard.layout.master')
@section('content')
    <div class="container col-lg-8">
        <h1>Someone has tried to contact you</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>

                <th scope="col">Action</th>
            </tr>
            </thead>
        <tbody>
                @foreach($contact as $con)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$con->name}}</td>
                    <td>{{$con->email}}</td>
                    <td>{{$con->subject}}</td>
                    <td>{{$con->message}}</td>

                    <td>
                        @method('DELETE')
                        <a onclick="alert('Do you want to delete')" href="{{route('c.destroy',$con->id)}}" class="btn btn-danger" style="display:inline-block">Delete</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        </table>         
    </div>
    @endsection

