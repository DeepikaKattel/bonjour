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
                <form action="{{route('galleries.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Image1</label>
                        <input type="file" name="image1" id="image1" class="form-control">
                        <span style="color: red">{{$errors->first('image1')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Image2</label>
                        <input type="file" name="image2" id="image2" class="form-control">
                        <span style="color: red">{{$errors->first('image2')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Image3</label>
                        <input type="file" name="image3" id="image3" class="form-control">
                        <span style="color: red">{{$errors->first('image3')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Image4</label>
                        <input type="file" name="image4" id="image4" class="form-control">
                        <span style="color: red">{{$errors->first('image4')}}</span>
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection