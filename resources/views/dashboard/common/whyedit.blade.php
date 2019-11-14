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
<form action="{{route('whyupdate',$datas->id)}}" method="post" enctype="multipart/form-data" id="form">
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
                        <label >Paragraph</label>
                        <textarea type="text" name="para" id="para" class="form-control" value="{{$datas->Paragraph}}"></textarea>
                        <span style="color: red">{{$errors->first('para')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Paragraph1</label>
                        <textarea type="text" name="para1" id="para" class="form-control" value="{{$datas->Paragraph1}}"></textarea>
                        <span style="color: red">{{$errors->first('para1')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Paragraph2</label>
                        <textarea type="text" name="para2" id="para" class="form-control" value="{{$datas->Paragraph2}}"></textarea>
                        <span style="color: red">{{$errors->first('para2')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Paragraph3</label>
                        <textarea type="text" name="para3" id="para" class="form-control" value="{{$datas->Paragraph3}}"></textarea>
                        <span style="color: red">{{$errors->first('para3')}}</span>
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
