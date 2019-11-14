@extends('layouts.app')
@section('content')

<style>
#form{
    margin-left:250px;  
    margin-top:150px; 
    margin-left:180px;  
    height:520px;
    width:500px;  
}
#btn{
    margin-bottom:-40px;
}
</style>

<html>
<div id="form">
<form action="{{route('newsupdate',$datas->id)}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="form-group">
                        <label>Heading1</label>
                        <input type="text" name="head1" id="head1" class="form-control" value="{{$datas->Heading1}}>
                        <span style="color: red">{{$errors->first('head1')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content1</label>
                        <textarea type="text" name="content1" id="content1" rows="5" class="form-control" value={{$datas->Content1}}></textarea>
                        <span style="color: red">{{$errors->first('content1')}}</span>
                    </div>

                    <div class="form-group">
                        <label>Heading2</label>
                        <input type="text" name="head2" id="head2" class="form-control" value="{{$datas->Heading2}}">
                        <span style="color: red">{{$errors->first('head2')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content2</label>
                        <textarea type="text" name="content2" id="content2" rows="5" class="form-control" value={{$datas->Content2}}></textarea>
                        <span style="color: red">{{$errors->first('content2')}}</span>
                    </div>

                    <div class="form-group">
                        <label>Heading3</label>
                        <input type="text" name="head3" id="head3" class="form-control" value={{$datas->Heading3}}>
                        <span style="color: red">{{$errors->first('head3')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Content3</label>
                        <textarea type="text" name="content3" id="content3" rows="5" class="form-control" value={{$datas->Content3}}></textarea>
                        <span style="color: red">{{$errors->first('content3')}}</span>
                    </div>

                    <div class="form-group float-right">
                        <button id="btn" class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
</div>
</html>

@endsection
