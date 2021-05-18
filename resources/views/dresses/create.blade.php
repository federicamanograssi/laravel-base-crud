@extends('layouts.app')

@section('pageTitle','Inserire nuovo vestito')
@section('content')
    <h1>Inserisci nuovo vestito</h1>

    {{-- GESTIONE ERRORI---------- --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('dresses.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="type">Type :</label>
            <input type="text" class="form-control" name="type" id="text">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size" id="size">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <button type="submit" class="btn btn-default" href="">Submit</button>
    </form>
    
@endsection