@extends('layouts.app')
@section('main-content')
<div class="container ">
    <a href="{{route('comic.index')}}" class="btn btn-success my-5">
        Torna alla lista dei Comics
    </a>
    <a href="{{route('comic.show', $comic )}}" class="btn btn-success my-5">
Mostra i Detatgli    </a>


    <div class="d-flex flex-column align-items-center">
        <h1>Modifica Comic</h1>

        <form action="{{route('comic.update', $comic)}}" method="POST">
            @csrf
            @method('PUT')
           
            <div>
                <div class="col-4 card">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="" id="preview-image">
                </div>
            </div>
        
            <div class="row g-3" >
                <div class="col-3">
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title" value="{{$comic->title}}" class="form-control">
                </div>
                
                <div class="col-3">
                    <label for="type">Tipo</label>
                    <input type="text" id="type" name="type" value="{{$comic->type}}" class="form-control">
                </div>
            
                <div class="col-3">
                    <label for="thumb">URL Immagine</label>
                    <input type="url" id="thumb" name="thumb" value="{{$comic->thumb}}" class="form-control">
                </div>
            
                <div class="col-3">
                    <label for="price">Prezzo</label>
                    <input type="text" id="price" name="price" value="{{$comic->price}}" class="form-control">
                </div>
            
                <div class="col-3">
                    <label for="series">Serie</label>
                    <input type="text" id="series" name="series"  value="{{$comic->series}}"class="form-control">
                </div>
            
                <div class="col-3">
                    <label for="sale_date">Data di uscita</label>
                    <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" class="form-control">
                </div>
                <div class="col-12">
                    <label for="description">Descrizione</label>
                    
                    <input type="text" id="description" name="description" value="{{$comic->description}}" class="form-control h-100">
                </div>
            
                <div class="col-12 my-5">
                    <button class="btn btn-primary">Invia</button>
                </div>   
            
             </div>
            </form>
        </div>

    </div>

    
@endsection


@section('scripts')
<script>
const previewImageEl= document.getElementById('preview-image')
const thumbInput = document.getElementById('thumb')
thumbInput.addEventListener('change', function(){
    previewImageEl.src=this.value
})


</script>

@endsection