@extends('layouts.app')
@section('content')
    <body style="border-width:15px;border-style: solid;border-color: navy">
    <div style="margin-left: 60px">
        <h1>Announcements</h1>
    </div>
    @foreach($data as $datas)
    <div style="margin-left: 60px">
        <h2>{{$datas->title1}}</h2>
        <p>{{$datas->announcement1}}</p><br>

        <h2>{{$datas->title2}}</h2>
        <p>{{$datas->announcement2}}</p><br>
    </div>
    @endforeach
@endsection
