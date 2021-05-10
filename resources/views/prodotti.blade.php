@extends('layouts.main')

@section('title')
  Prodotto
@endsection

@section('content')
  <div class="product">
    <div class="chevron"><i class="fas fa-chevron-left"></i></div>
    <div class="container">
      <h1>{{ $pasta['titolo'] }}</h1>
      <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }} 1">
      <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }} 2">
      <p>{!! $pasta['descrizione'] !!}</p>
    </div>
    <div class="chevron"><i class="fas fa-chevron-right"></i></div>
  </div>
@endsection