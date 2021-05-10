<header>
  <div class="container">
    <div class="logo_container">
      <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="{{ route("homepage") }}" class="active">Home</a></li>
        <li><a href="{{ route("prodotti", ['id' => 0]) }}">Prodotti</a></li>
        <li><a href="{{ route("news") }}">News</a></li>
      </ul>
    </nav>
  </div>
</header>