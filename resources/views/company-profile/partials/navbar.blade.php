<style>
    .text-juara{
        color: #ef0046;
    }
    .bg-juara{
        background-color: #ef0046
    }
    a{
        text-decoration: none;
        color: #f8f9fa;
    }
    a:hover{
        font-weight: 700;
    }
    .navbar-menu, .navbar-menu>.dropdown-toggle{
        color: #f8f9fa;
        border: none;
        transition: .3s;
    }
    .navbar-menu:hover, .navbar-menu>.dropdown-toggle:hover{
        color: #c5003b;
        font-weight: 700;
    }
    .navbar-menu::after, .menu-active::after{
        content: "";
        position: absolute;
        background-color: #ef0046;
        height: 3px;
        width: 0;
        left: 0;
        bottom: 0px;
        transition: 0.3s;
    }
    .navbar-menu:hover::after{
        width: 100%;
    }
    .menu-active{
        color: #ef0046;
        font-weight: 700;
        /* transition: all 1s; */
    }
    .premium-menu{
        transition: .3s;
    }
    .premium-menu:hover, .premium-active{
        background-color: #ef0046;
        font-weight: 700;
    }
    @media (min-width: 768px){
        #navbar{
            height: 70px;
        }
    }
</style>

<nav class="navbar shadow-lg bg-dark">
    <div class="container d-flex justify-content-between align-items-center h-100">
        <a class="d-flex justify-content-center align-items-center rounded" href="#">
            <img src="{{ asset('img/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
            <img src="{{ asset('img/juara-font-full.png') }}" alt="" style="width: 100px;">
        </a>
        <button class="d-flex d-md-none btn btn-outline-light px-3 py-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLanding" aria-controls="offcanvasLanding">
            <i class="bi bi-list"></i>
        </button>
        <div class="d-none d-md-flex align-items-center h-100 gap-1">
            <a class="navbar-menu position-relative h-100 d-flex justify-content-center align-items-center px-3 {{ (request()->is('/')) ? 'menu-active' : '' }}" href="{{ url('/') }}">HOME</a>
            <a class="navbar-menu position-relative h-100 d-flex justify-content-center align-items-center px-3 {{ (request()->is('about-us')) ? 'menu-active' : '' }}" href="{{ url('about-us') }}">ABOUT US</a>
            <div class="navbar-menu dropdown h-100 p-0">
                <button class="dropdown-toggle bg-dark h-100 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none;">
                    SERVICES
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                    <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                    <li><a class="dropdown-item" href="#">Event Security</a></li>
                    <li><a class="dropdown-item" href="#">Cyber Security</a></li>
                    <li><a class="dropdown-item" href="#">Concierge Security</a></li>
                    <li><a class="dropdown-item" href="#">Security Academy</a></li>
                </ul>
            </div>
        </div>
        <div class="d-none d-md-flex align-items-center h-100">
            <a class="premium-menu position-relative h-100 d-flex justify-content-center align-items-center px-3" href="#service-and-pricing">
                BUY SECURITY PLAN
                <span class="position-absolute badge rounded-pill bg-danger" style="top: 5px; right: 0;">
                    promo
                <span class="visually-hidden">promo</span>
            </a>
            <a class="premium-menu h-100 d-flex justify-content-center align-items-center px-3" href="{{ url('/auth/login') }}">LOGIN</a>
        </div>
    </div>
</nav>
