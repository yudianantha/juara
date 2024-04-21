<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg" style="height: 80px;">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand bg-dark px-3 d-flex justify-content-center align-items-center rounded" href="#">
            <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
            <img src="{{ asset('images/juara-font.png') }}" alt="" style="width: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News & Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                        <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                        <li><a class="dropdown-item" href="#">Event Security</a></li>
                        <li><a class="dropdown-item" href="#">Cyber Security</a></li>
                        <li><a class="dropdown-item" href="#">Concierge Security</a></li>
                        <li><a class="dropdown-item" href="#">Security Academy</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex gap-2">
            <a class="btn btn-success fw-bold" href="#service-and-pricing">Buy Security Plan</a>
            <button class="btn btn-primary fw-bold" type="button">Join Us</button>
        </div>
    </div>
</nav>
