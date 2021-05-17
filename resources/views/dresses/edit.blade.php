@extends('layouts.app')

@section('pageTitle','Modifica vestito')
@section('content')
    <h1>Modifica vestito</h1>

    <form action="{{route('dresses.update',$dress->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="type">Type :</label>
            <input type="text" class="form-control" name="type" id="text" value="{{$dress->type}}">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$dress->name}}">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size" id="size" value="{{$dress->size}}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" id="price" value="{{$dress->price}}">
        </div>
        <button type="submit" class="btn btn-default" href="">Submit</button>
    </form>
    
@endsection