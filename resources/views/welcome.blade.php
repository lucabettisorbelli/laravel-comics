@extends('layouts.app')

@section('content')
<div class="container d-flex flex-wrap">
    @foreach ($comics as $comic) 
    <div class="card d-flex flex-column justify-content-around">
        {{$comic['title']}}
        {{$comic['price']}}
        <div class="cardImg">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
    @endforeach
</div>
@endsection