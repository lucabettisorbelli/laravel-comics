@extends('layouts.app')

@section('content')
@foreach ($comics as $comic) 
<div>
    {{$comic['title']}}
    {{$comic['price']}}
</div>
@endforeach
@endsection