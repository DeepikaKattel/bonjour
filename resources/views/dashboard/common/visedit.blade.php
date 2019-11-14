@extends('layouts.app')
@section('content')

<style>
#form{
    margin-left:250px;    
    height:520px;
    width:500px; 
    margin-left:180px; 
}
#btn{
    margin-bottom:-40px;
}
</style>

<html>
<div id="form">
<form action="{{route('visionupdate',$datas->id)}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="form-group">
                        <label>Heading</label>
                        <input type="text" name="head" id="head" class="form-control" value="{{$datas->Heading}}">
                        <span style="color: red">{{$errors->first('head')}}</span>
                    </div>
                    
                    <div class="form-group">
                        <label >Title</label>
                        <textarea type="text" name="title" id="title" class="form-control" value="{{$datas->Title}}"></textarea>
                        <span style="color: red">{{$errors->first('title')}}</span>
                    </div>

                    
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{$datas->Image}}">
                    </div> 

                    <div class="form-group float-right">
                        <button id="btn" class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
</div>
</html>
@endsection
