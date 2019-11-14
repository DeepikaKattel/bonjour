@extends('layouts.app')
@section('content')
<style>
#dead{
    width:220px;
}
</style>
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

                <form action="{{route('careerstore')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" class="form-control" >
                        <span style="color: red">{{$errors->first('title')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Job Title</label>
                        <input type="text" name="jtitle" id="jtitle" class="form-control">
                        <span style="color: red">{{$errors->first('jtitle')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Job Description</label>
                        <textarea type="text" name="jdes" id="jdes" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('jdes')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Deadline</label>
                        <input type="date" name="dead" id="dead" class="form-control">
                        <span style="color: red">{{$errors->first('dead')}}</span>
                    </div>

                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
                </div>
    </div>
    </div>
@endsection