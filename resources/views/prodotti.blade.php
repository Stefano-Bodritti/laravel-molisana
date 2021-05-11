@extends('layouts.main')

@section('title')
  Prodotto
@endsection

@section('content')
  <div class="product">
    <div class="chevron">
      <a href="{{route('prodotti', ['id' => $idPrev])}}"><i class="fas fa-chevron-left"></i></a>
    </div>
    <div class="container">
      <h1>{{ $pasta['titolo'] }}</h1>
      <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }} 1">
      <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }} 2">
      <p>{!! $pasta['descrizione'] !!}</p>
    </div>
    <div class="chevron">
      <a href="{{route('prodotti', ['id' => $idNext])}}"><i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
@endsection