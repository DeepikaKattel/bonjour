@extends('layouts.app')
@section('content')
    <body style="border-width:15px;border-style: solid;border-color: navy">
    <div style="margin-left: 60px">
        <h1>Gallery</h1>
    </div>
    @foreach($data as $datas)
        <div style="margin-left: 60px">
            <tr>
                <td><a href="{{asset($datas->image1)}}"><img src="{{asset($datas->image1)}}" style="height:200px;width: 200px;"></a></td>
                <td><a href="{{asset($datas->image2)}}"><img src="{{asset($datas->image2)}}" style="height:200px;width: 200px;"></a></td>
                <td><a href="{{asset($datas->image3)}}"><img src="{{asset($datas->image3)}}" style="height:200px;width: 200px;"></a></td>
                <td><a href="{{asset($datas->image4)}}"><img src="{{asset($datas->image4)}}" style="height:200px;width: 200px;"></a></td>
            </tr>
        </div>
    @endforeach
@endsection

