<header class="container">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'movies') ? 'active' : ''}}" href="{{ route('movies') }}">Film</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'about') ? 'active' : ''}}" href="{{ route('about') }}">Chi siamo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'contacts') ? 'active' : ''}}" href="{{ route('contacts') }}">Contatti</a>
    </li>
  </ul>
</header>