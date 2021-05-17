@extends('layouts.app')

@section('pageTitle','Dresses')
 
@section('content')

<h1>Prodotti</h1>

<a href="{{route('dresses.create')}}" class="btn btn-primary">Aggiungi nuovo vestito</a>

<table class="table">
    {{-- intestazione tabella --}}
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
    </thead>

    {{-- corpo tabella --}}
    <tbody>
        @foreach ($dresses as $dress)
        <tr>
            <td>{{$dress->id}}</td>
            <td>{{$dress->type}}</td>
            <td>{{$dress->name}}</td>
            <td>{{$dress->size}}</td>
            <td>{{$dress->price}}</td>
            <td>
                <a href="{{route('dresses.show',['dress'=>$dress->id])}}" class="btn btn-info">Dettagli</a>
                <a href="{{route('dresses.edit',['dress'=>$dress->id])}}" class="btn btn-warning">Modifica</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection