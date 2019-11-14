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
<form action="{{route('requirement.update',$requirement->id)}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label >Requirements</label>
                        <textarea type="text" name="requirement" id="req" class="form-control" value=""></textarea>
                        <span style="color: red">{{$errors->first('req')}}</span>
                    </div>
                    <div class="form-group float-right">
                        <button id="btn" class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
</div>
</html>

@endsection
