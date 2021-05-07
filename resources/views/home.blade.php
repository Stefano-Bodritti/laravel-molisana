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
    <main>
      {{-- sezione lunghe --}}
      <section>
        <div class="container">
          <h2>Le lunghe</h2>
          <div class="boxes">
            @foreach ($lunghe as $pasta)
            <div class="box">
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
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
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
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
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
            </div>
            @endforeach
          </div>
        </div>
      </section>
      {{-- fine sezione cortissime --}}
    </main>
    {{-- fine corpo principale --}}
    {{-- piè di pagina --}}
    <footer>
      <div class="container">
        <div class="footer_top">
          <div class="col col-1">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo">
            <ul>
              <li>Ragione sociale: La Molisana S.P.A.</li>
              <li>Sede legale: Contrada Colle delle Api, 100/A</li>
              <li>86100 - Campobasso(CB)</li>
              <li>Pec: lamolisana@pec.it</li>
              <li>Tel: +39 0874 4981</li>
              <li>Fax: +39 0874 629584</li>
              <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
              <li>commerciale@lamolisana.it</li>
              <li>export@lamolisana.it</li>
              <li>numero verde 800818081</li>
              <li>telefono 3801292455</li>
            </ul>
          </div>

          <div class="col col-2">
            <h4>Pastificio</h4>
            <ul>
              <li>Il Pastificio</li>
              <li>Grano decorticato a pietra</li>
              <li>Il Molise c'è</li>
              <li>Filiera Integrata</li>
              <li>100 anni di pasta</li>
              <li>Sartoria della pasta</li>
              <li>Spaghetto Quadrato</li>
              <li>Le Persone</li>
            </ul>
            <h4>Prodotti</h4>
            <ul>
              <li>Le Classiche</li>
              <li>Le Integrali</li>
              <li>Le Speciali</li>
              <li>Le Biologiche</li>
              <li>Le Gluten-Free</li>
              <li>Le Semole</li>
              <li>Le Extra di Lusso</li>
            </ul>
          </div>

          <div class="col col-3">
            <h4>Collezione da Chef</h4>
            <ul>
              <li>Collezione da Chef</li>
              <li>Grandi Cucine</li>
              <li>Biologiche</li>
              <li>Quadrate</li>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <img src="{{ asset('images/footer-montagne-bottom.jpg') }}" alt="Montagne">
      </div>
    </footer>
    {{-- piè di pagina --}}
  </body>
</html>