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
                <form action="{{route('announcement.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Title1</label>
                        <input type="text" name="title1" id="title1" class="form-control">
                        <span style="color: red">{{$errors->first('title1')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Announcement1</label>
                        <textarea type="text" name="announcement1" id="announcement1" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('announcement1')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Title2</label>
                        <input type="text" name="title2" id="title2" class="form-control">
                        <span style="color: red">{{$errors->first('title2')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Announcement2</label>
                        <textarea type="text" name="announcement2" id="announcement2" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('announcement2')}}</span>
                    </div>


                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

