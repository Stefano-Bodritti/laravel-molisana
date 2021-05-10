<header>
  <div class="container">
    <div class="logo_container">
      <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="{{ route("homepage") }}" class="{{Route::currentRouteName() == 'homepage' ? 'active' : ''}}">Home</a></li>
        <li><a href="{{ route("prodotti", ['id' => 0]) }}" class="{{Route::currentRouteName() == 'prodotti' ? 'active' : ''}}">Prodotti</a></li>
        <li><a href="{{ route("news") }}" class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}">News</a></li>
      </ul>
    </nav>
  </div>
</header>