<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Fonte do Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    {{-- CSS Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    {{-- Css Aplicação --}}
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" id="navbar">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Eventos</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">Meus Eventos</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="POST">
                @csrf
                  <a href="/logout" class="nav-link" onclick="event.preventDefault();
                  this.closest('form').submit();"
                  >
                  Sair</a>
                </form>
              </li>
              @endauth
              @guest 
              <li class="nav-item">
                <a class="nav-link" href="/login">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Cadastrar</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          @if(session('msg'))
          <p class="msg">{{session('msg')}}</p>
          @endif
          @yield('content')
        </div>
      </div>
    </main>
    <footer>
      <p>HDC Events &copy; 2020</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
