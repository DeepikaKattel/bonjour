
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 effect-2 jumbotron">
                @if (\Illuminate\Support\Facades\Session::has('error'))
                    <div class="alert alert-danger">
                        {!! session('error') !!}
                    </div>
                @endif
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                <form action="{{route('services.update',$service->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Sub Title 1</label>
                        <input type="text" name="sub_heading1" class="form-control" value="{{$service->sub_heading1}}">
                    </div>
                    <div class="form-group">
                        <label>Content 1</label>
                        <textarea name="content1" class="form-control" id="exampleFormControlTextarea1" rows="10" value="{{$service->content1}}"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label>Sub Title 2</label>
                        <input type="text" name="sub_heading2" class="form-control" value="{{$service->sub_heading2}}">
                    </div>
                    <div class="form-group">
                        <label>Content 2</label>
                        <textarea name="content2" class="form-control" id="exampleFormControlTextarea1" rows="10" value="{{$service->content2}}"></textarea>
                        
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
        </div>
    </div>
    </div>
@endsection