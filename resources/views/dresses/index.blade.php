@extends('layouts.app')

@section('pageTitle','Dresses')
 
@section('content')
   @foreach ($dresses as $dress)
       <h1>{{$dress->name}}</h1>
       <h3>Price : {{$dress->price}}</h3>
       <a href="{{route('dresses.show',['dress'=>$dress->id])}}">Dettagli</a>
   @endforeach
@endsection