@extends('layouts.app')
@section('main-content')
<div class="container ">
    <a href="{{route('comic.index')}}" class="btn btn-success my-5">
        Torna alla lista dei Comics
    </a>

    <div class="d-flex flex-column align-items-center">
        <h1>Titolo:  {{$comic->title  }}</h1>

<div class="col-12 mb-5">
    <div class="card h-100  my-5 align-items-center" >
        <img src="{{$comic->thumb}}" alt="" class="w-50 p-3">
        <div class="card-body d-flex g-3
        flex-column justify-content-between  align-items-center">
          <p class="card-text"><strong>Description:</strong> {{$comic->description}}</p>
          <p class="card-text"><strong>Price:</strong> {{$comic->price}}</p>
          <p class="card-text"><strong>Series:</strong>  {{$comic->series}}</p>
          <p class="card-text"><strong>Sale date:</strong> {{$comic->sale_date}}</p>
          <p class="card-text"><strong>Type:</strong> {{$comic->type}}</p>




</div>

    </div>

    
@endsection