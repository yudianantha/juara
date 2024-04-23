<style>
  .menu-sidenav{
    text-decoration: none !important;
    border: none !important;
    transition: .3s;
  }
  .menu-sidenav:hover{
    border-left: 8px solid #ef0046 !important;
  }
  .sidenav-active{

  }
</style>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-bs-theme="dark">
    <div class="offcanvas-header">
      <a class="d-flex justify-content-center align-items-center rounded" href="#">
        <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
        <img src="{{ asset('images/juara-font-full.png') }}" alt="" style="width: 100px;">
      </a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
      <div class="d-flex flex-column">
        {{-- Profile --}}
        <p>Profile</p>
        <a href="#" class="btn btn-outline-primary d-flex align-items-center p-3 mb-3" style="text-decoration: none">
          <div class="link-light d-flex justify-content-center align-items-center rounded-circle border me-3" style="height: 50px; width: 50px;">
            <i class="bi bi-person" style="font-size: 30px"></i>
          </div>
          <div class="d-flex flex-column">
            <h5 class="fw-bold">John Deer</h5>
            <p class="mb-0 text-light border">Novice</p>
          </div>
        </a>
        {{-- Menu --}}
        <p>Menu</p>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-clipboard2-check me-3" style="font-size: 25px"></i>
          Courses
        </a>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-journal-text me-3" style="font-size: 25px"></i>
          Classes
        </a>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-mortarboard me-3" style="font-size: 25px"></i>
          Certification
        </a>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
          Services
        </a>
      </div>
      <div class="d-flex flex-column">
        <p>System</p>
        <a class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold py-3">
          <i class="bi bi-gear me-3" style="font-size: 25px"></i>
          Settings
        </a>
        <a class="menu-sidenav btn btn-outline-danger d-flex align-items-center fw-bold py-3">
          <i class="bi bi-box-arrow-left me-3" style="font-size: 25px"></i>
          Logout
        </a>
      </div>
    </div>
  </div>