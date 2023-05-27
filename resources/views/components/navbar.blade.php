<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Booking Lapangan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav fw-bold">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('field') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile') }}">Profile</a>
        </li>
      </ul>
    </div>
    <div class="btn-group">
      <button type="button" class="btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
        <div class="bg-primary rounded-circle me-2 d-flex align-items-center justify-content-center icn-akun">U</div>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a href="">
            <button class="dropdown-item" type="button">Logout</button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>