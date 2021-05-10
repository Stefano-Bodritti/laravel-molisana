@extends('layouts.main')

@section('title')
  Home Page La Molisana
@endsection

@section('content')
    
  <div class="section_bg">
    {{-- sezione lunghe --}}
    <section>
      <div class="container">
        <h2>Le lunghe</h2>
        <div class="boxes">
          @foreach ($lunghe as $pasta)
          <div class="box">
            <a href="{{ route('prodotti', ['id' => $pasta['id']]) }}">
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    {{-- fine sezione lunghe --}}

    {{-- sezione corte --}}
    <section>
      <div class="container">
        <h2>Le corte</h2>
        <div class="boxes">
          @foreach ($corte as $pasta)
          <div class="box">
            <a href="{{ route('prodotti', ['id' => $pasta['id']]) }}">
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    {{-- fine sezione corte --}}

    {{-- sezione cortissime --}}
    <section>
      <div class="container">
        <h2>Le cortissime</h2>
        <div class="boxes">
          @foreach ($cortissime as $pasta)
          <div class="box">
            <a href="{{ route('prodotti', ['id' => $pasta['id']]) }}">
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    {{-- fine sezione cortissime --}}
  </div>

@endsection