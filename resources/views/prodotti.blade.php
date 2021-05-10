@extends('layouts.main')

@section('title')
  Prodotto
@endsection

@section('content')
  <div class="product_container">
    {{$pasta['descrizione']}}
  </div>
@endsection