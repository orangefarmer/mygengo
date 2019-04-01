@extends('mygengo.layout')

@section('content')
    
    <div>
        <img src="/storage/back/backImg.jpg" alt="" width="400px">
    </div>
    {!! link_to_route('myGengoImages.create','元号を作成') !!}
    
    @if(count($myGengoImages) > 0)
        <ul>
        @foreach($myGengoImages as $myGengoImage)
            <li>{{ $myGengoImage->newGengo }}</li>
        @endforeach
        </ul>
    @endif

@endsection