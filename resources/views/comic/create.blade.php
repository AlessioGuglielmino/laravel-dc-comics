@extends('layouts.app')
@section('main-content')
<div class="container">
<h1 class=" my-5">Inserisci un Comic</h1>

<form action="{{route('comic.store')}}" method="POST">
    @csrf

    <div class="row g-3" >
        <div class="col-3">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="col-3">
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        <div class="col-3">
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" class="form-control">
        </div>
    
        <div class="col-3">
            <label for="thumb">URL Immagine</label>
            <input type="url" id="thumb" name="thumb" class="form-control">
        </div>
    
        <div class="col-3">
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" class="form-control">
        </div>
    
        <div class="col-3">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" class="form-control">
        </div>
    
        <div class="col-3">
            <label for="sale_date">Data di uscita</label>
            <input type="text" id="sale_date" name="sale_date" class="form-control">
        </div>
    
        <div class="col-12">
            <button class="btn btn-primary">Invia</button>
        </div>   
    
    
    </div></form>



 


</div>
    
@endsection