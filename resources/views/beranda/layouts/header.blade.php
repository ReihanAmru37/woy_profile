<style>
  .menu-active{
    color: black !important;
    font-weight: bold;  
  }
</style>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand" href="#">WOY STUDIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'menu-active':'' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('fitur') ? 'menu-active':'' }}" href="/fitur">Fitur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('desain') ? 'menu-active':'' }}" href="/desain">Pilihan Desain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('paket') ? 'menu-active':'' }}" href="/paket">Pilihan Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('cara') ? 'menu-active':'' }}" href="/cara">Cara Kerja</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="/login" class="btn btn-outline-primary"><i class="fas fa-user"></i> Login</a>
          </form>
        </div>
      </div>
    </nav>
  </header>