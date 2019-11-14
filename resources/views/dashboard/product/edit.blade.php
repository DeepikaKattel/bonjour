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
                <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" name="product" class="form-control" value="{{$product->product}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" value="{{$product->description}}"rows="10"></textarea>
                        
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-primary float-left">Submit</button>
                    </div>
                </form>
        </div>
    </div>
    </div>
@endsection