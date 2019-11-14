@extends('layouts.app')
@section('content')
    <body style="border-width:15px;border-style: solid;border-color: navy">
    <div style="margin-left: 60px">
        <h1>News</h1>
    </div>
    @foreach($data as $datas)
        <div style="margin-left: 60px">
            <h2>{{$datas->head1}}</h2>
            <p>{{$datas->content1}}</p><br>

            <h2>{{$datas->head2}}</h2>
            <p>{{$datas->content2}}</p><br>

            <h2>{{$datas->head3}}</h2>
            <p>{{$datas->content3}}</p><br>
        </div>
    @endforeach
@endsection
