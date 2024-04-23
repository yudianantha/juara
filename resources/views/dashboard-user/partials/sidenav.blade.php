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
  .accordion-button{
    background-color: #212529 !important;
    color: #f8f9fa !important;
    transition: .3s !important;
  }
  .accordion-button:hover{
    background-color: #f8f9fa !important;
    color: #212529 !important;
    transition: .3s !important;
  }
  .accordion-button:focus {
    background-color: #f8f9fa !important;
    color: #212529 !important;
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
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
        {{-- Account --}}
        <p>Account</p>
        <a href="#" class="btn btn-outline-primary d-flex justify-content-between align-items-center p-3" style="text-decoration: none">
          <div class="d-flex">
            <div class="link-light d-flex justify-content-center align-items-center rounded-circle border me-3" style="height: 50px; width: 50px;">
              <i class="bi bi-person" style="font-size: 30px"></i>
            </div>
            <div class="d-flex flex-column">
              <h5 class="fw-bold">John Deer</h5>
              <p class="mb-0 text-light border">Novice</p>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <i class="bi bi-pencil-square"></i>
          </div>
        </a>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-credit-card me-3" style="font-size: 25px"></i>
          Billing
        </a>
        <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
          <i class="bi bi-award me-3" style="font-size: 25px"></i>
          Achievements
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
        <a class="accordion accordion-flush p-0" id="accordionFlushServices" style="text-decoration: none">
          <div class="accordion-item p-0">
            <h2 class="accordion-header p-0">
              <button class="menu-sidenav btn accordion-button collapsed fw-bold p-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-services" aria-expanded="false" aria-controls="flush-collapseOne">
                <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                Juara Services
              </button>
            </h2>
            <div id="flush-services" class="accordion-collapse collapse p-0" data-bs-parent="#accordionFlushServices">
              <div class="accordion-body p-0">
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Learning Management System
                </a>
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Close Procedure Operative (CPO)
                </a>
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Event Security
                </a>
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Cyber Security
                </a>
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Concierge Security
                </a>
                <a href="" class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold p-3 ps-5 {{ (request()->is('/')) ? 'sidenav-active' : '' }}">
                  <i class="bi bi-database-gear me-3" style="font-size: 25px"></i>
                  Security Academy
                </a>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="d-flex flex-column">
        <p>System</p>
        <a class="menu-sidenav btn btn-outline-light d-flex align-items-center fw-bold py-3">
          <i class="bi bi-gear me-3" style="font-size: 25px"></i>
          Settings
        </a>
        <a class="menu-sidenav btn btn-outline-danger d-flex align-items-center fw-bold py-3" href="{{ url('/') }}">
          <i class="bi bi-box-arrow-left me-3" style="font-size: 25px"></i>
          Logout
        </a>
      </div>
    </div>
  </div>