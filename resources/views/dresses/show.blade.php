@extends('layouts.app')

@section('content')
    <h1>{{$dress->name}}</h1>
    <p>{{$dress->price}}</p>
    <p>{{$dress->size}}</p>
@endsection