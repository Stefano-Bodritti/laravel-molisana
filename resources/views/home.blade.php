<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>La Molisana</title>
  </head>
  <body>
    {{-- intestazione --}}
    <header>
      <div class="container">
        <div class="logo_container">
          <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo">
        </div>
        <nav>
          <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Prodotti</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </nav>
      </div>
    </header>
    {{-- fine intestazione --}}
    {{-- corpo principale --}}
    <main></main>
    {{-- fine corpo principale --}}
    {{-- piè di pagina --}}
    <footer></footer>
    {{-- piè di pagina --}}
  </body>
</html>