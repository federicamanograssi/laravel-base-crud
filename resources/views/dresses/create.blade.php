@extends('layouts.app')

@section('pageTitle','Inserire nuovo vestito')
@section('content')
    <h1>Inserisci nuovo vestito</h1>

    <form action="{{route('dresses.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="type">Type :</label>
            <input type="text" class="form-control" id="text">
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
@endsection