<style>
    a, button, input, .dropdown-menu{
        border-radius: 0 !important;
    }
</style>

<nav class="bg-dark" id="navbar">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center d-md-none">
            <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
            <img src="{{ asset('images/juara-font.png') }}" alt="" style="width: 100px;">
        </div>
        <a class="d-flex justify-content-center align-items-center rounded" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <button class="btn btn-outline-light me-0 me-md-3" type="button">
                <i class="bi bi-list"></i>
            </button>
            <img src="{{ asset('images/juara-icon.png') }}" alt="" class="d-none d-md-flex me-2" style="width: 30px;">
            <img src="{{ asset('images/juara-font.png') }}" alt="" class="d-none d-md-flex" style="width: 100px;">
        </a>
        <div class="d-none d-md-flex align-items-center gap-3">
            <button class="btn btn-dark rounded-circle border d-flex justify-content-center align-items-center" style="height: 37px; width: 37px;">
                <i class="bi bi-bell"></i>
            </button>
            <div class="dropdown" data-bs-theme="dark">
                <button class="btn btn-dark dropdown-toggle d-flex align-items-center gap-2 border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="border rounded-circle" style="height: 25px; width: 25px;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    John Deer
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">My Billing</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>