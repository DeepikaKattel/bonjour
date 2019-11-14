@extends('layouts.app')
@section('content')

<style>
#form{ 
    margin-left:180px;  
    height:600px;
    width:500px;  
}
#btn{
    margin-bottom:-40px;
}
#dead{
    width:200px;
}
</style>

<html>
<div id="form">
<form action="{{route('careerupdate',$datas->id)}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$datas->Title}}">
                        <span style="color: red">{{$errors->first('title')}}</span>
                    </div>
                    
                    <div class="form-group">
                        <label >Job Title</label>
                        <input type="text" name="jtitle" id="jtitle" class="form-control" value="{{$datas->JobTitle}}">
                        <span style="color: red">{{$errors->first('jtitle')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Job Description</label>
                        <textarea type="text" name="jdes" id="jdes" class="form-control" value="{{$datas->JobDescription}}"></textarea>
                        <span style="color: red">{{$errors->first('jdes')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Requirements</label>
                        <textarea type="text" name="req" id="req" class="form-control" value="{{$datas->Requirements}}"></textarea>
                        <span style="color: red">{{$errors->first('req')}}</span>
                    </div>

                    <div class="form-group">
                        <label >Deadline</label>
                        <input type="date" name="dead" id="dead" class="form-control" value="{{$datas->Deadline}}">
                        <span style="color: red">{{$errors->first('dead')}}</span>
                    </div>

                    <div class="form-group float-right">
                        <button id="btn" class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
</div>
</html>

@endsection
