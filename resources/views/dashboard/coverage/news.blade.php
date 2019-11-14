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

                <form action="{{route('newsstore')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Heading1</label>
                        <input type="text" name="head1" id="head1" class="form-control">
                        <span style="color: red">{{$errors->first('head1')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content1</label>
                        <textarea type="text" name="content1" id="content1" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('content1')}}</span>
                    </div>

                    <div class="form-group">
                        <label>Heading2</label>
                        <input type="text" name="head2" id="head2" class="form-control">
                        <span style="color: red">{{$errors->first('head2')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content2</label>
                        <textarea type="text" name="content2" id="content2" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('content2')}}</span>
                    </div>

                    <div class="form-group">
                        <label>Heading3</label>
                        <input type="text" name="head3" id="head3" class="form-control">
                        <span style="color: red">{{$errors->first('head3')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content3</label>
                        <textarea type="text" name="content3" id="content3" rows="5" class="form-control"></textarea>
                        <span style="color: red">{{$errors->first('content3')}}</span>
                    </div>

                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
                </div>
    </div>
    </div>
@endsection

