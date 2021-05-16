@extends('layouts.app')

@section('pageTitle','Dettagli')
@section('content')
    <h1>{{$dress->name}}</h1>
    <p>Euro {{$dress->price}}</p>
    <p>Taglia : {{$dress->size}}</p>
@endsection