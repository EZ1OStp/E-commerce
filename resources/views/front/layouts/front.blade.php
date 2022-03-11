<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{ config('app.name', 'Laravel').' | '.'Client' }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>

<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" name="" id="" value='{{ __('Logout') }}'>
        </form>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ config('app.name') }}</h1>
        <p class="lead text-muted">Ceci est une appli de test d'un site e-commerce.
        
        </p>
        <p>
          <a href="{{ route('panier.show') }}" class="btn btn-secondary my-2">Voir le panier</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @yield('content')

      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">


</div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>
