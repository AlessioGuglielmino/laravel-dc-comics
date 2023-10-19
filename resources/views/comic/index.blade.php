@extends('layouts.app')
@section('font')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection




@section('main-content')
<div class="container">
    <a href="{{route('comic.create')}}" class="btn btn-warning my-5">
        Aggiungi Comic
    </a>
<div class="row">

    @foreach ($comics as $comic)
    <div class="col-4 mb-5">
        <div class="card h-100 my-5 align-items-center" >
            <img src="{{$comic->thumb}}" alt="" class="w-75 p-3">
            <div class="card-body d-flex g-3
            flex-column justify-content-between  align-items-center">
              <h5 class="card-title"><strong>Titolo:</strong> {{$comic->title}}</h5>
              <p class="card-text"><strong>Description:</strong> {{$comic->description}}</p>
              <p class="card-text"><strong>Price:</strong> {{$comic->price}}</p>
              <p class="card-text"><strong>Series:</strong>  {{$comic->series}}</p>
              <p class="card-text"><strong>Sale date:</strong> {{$comic->sale_date}}</p>
              <p class="card-text"><strong>Type:</strong> {{$comic->type}}</p>

              <a href="{{ route('comic.show', $comic)}}">
                  <i class="custom fa-solid fa-eye fa-xl"></i>
              </a>
              <a href="{{ route('comic.edit', $comic)}}">
                <i class="fa-solid fa-pencil"></i>
            </a>

            <form action="{{route('comic.destroy',$comic)}}" method="POST">
                @csrf
                @method('DELETE')
<button>
    <i class="fa-solid fa-trash text-danger"></i>

</button>

            </form>


            </div>
          </div></div>

    @endforeach
</div>
</div>
    
@endsection