<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INFOTEL BUSINESS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">🚀 INFOTEL BUSINESS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Menú izquierdo con enlaces -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Centrales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Repartidores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
              </li>
            </ul>

            <!-- Buscador y login/logout -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item me-3">
                <form class="d-flex" role="search" method="GET" action="{{ route('home') }}">
                  <input class="form-control me-2" type="search" placeholder="Buscar artesanía..." aria-label="Buscar" name="query" />
                  <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
              </li>

              @guest
                <li class="nav-item">
                  <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                </li>
              @else
                <li class="nav-item me-2">
                  <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-light">Panel Admin</a>
                </li>
                <li class="nav-item">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                  </form>
                </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>


<!-- Carrusel -->
<div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1200x400/?artisan,craft" class="d-block w-100" alt="Artesanía 1" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Conectando las Artesanías de Puno con el Mundo</h5>
        <p>Exportador Digital con Inteligencia Artificial</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?alpaca,textiles" class="d-block w-100" alt="Artesanía 2" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Pagos Globales y Exportación Automática</h5>
        <p>Compra fácil, rápida y segura</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?peru,culture" class="d-block w-100" alt="Artesanía 3" />
      <div class="carousel-caption d-none d-md-block">
        <h5>Chatbot IA 24/7 para resolver tus dudas</h5>
        <p>Atención inmediata en varios idiomas</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- Productos -->
<div class="container my-5">
  <h2 class="mb-4">Nuestros Productos Artesanales</h2>
  <div class="row" id="productos">

    {{-- Aquí se listarán los productos dinámicamente --}}

@foreach($productos as $producto)
    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100">
        <img src="{{ $producto->imagen_url }}" class="card-img-top" alt="{{ $producto->nombre }}" />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{ $producto->nombre }}</h5>
          <p class="card-text text-truncate">{{ $producto->detalle }}</p>
          <p class="card-text fw-bold">S/ {{ number_format($producto->precio, 2) }}</p>
          <button class="btn btn-primary mt-auto agregar-carrito" data-id="{{ $producto->id }}">Agregar al carrito</button>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

<!-- Bootstrap JS y Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS básico para botón agregar carrito (solo demo) -->
<script>
  document.querySelectorAll('.agregar-carrito').forEach(button => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      alert(Producto ${id} agregado al carrito (demo));
      // Aquí luego integrarás funcionalidad real con backend o localStorage
    });
  });
</script>

</body>
</html>

