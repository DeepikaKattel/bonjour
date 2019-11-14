@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 effect-2 jumbotron">
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                <form action="{{route('update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="home">Home</label>
                        <input type="text" name="home" id="home" class="form-control" value="{{$data->home}}">
                        <span style="color: red">{{$errors->first('home')}}</span>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="btn btn-default">
                    </div>
                    <div class="form-group">
                        <label for="background">Background</label>
                        <input type="file" name="background" class="btn btn-default">
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection