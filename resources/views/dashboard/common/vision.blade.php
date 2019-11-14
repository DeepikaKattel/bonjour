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

                <form action="{{route('visionstore')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Heading</label>
                        <input type="text" name="head" id="head" class="form-control">
                        <span style="color: red">{{$errors->first('head')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Title</label>
                        <textarea type="text" name="title" id="title" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('title')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Points</label>
                        <textarea type="text" name="points" id="points" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('points')}}</span>
                    </div>

                    
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div> 

                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
                </div>
    </div>
    </div>
@endsection