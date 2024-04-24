<style>
    .bg-juara{
        background-color: #eb1c25;
    }
    .text-juara{
        color: #eb1c25;
    }
    a{
        text-decoration: none;
    }
    .navbar-menu, .navbar-menu>.dropdown-toggle{
        background-color: #212529;
        color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .3s;
    }
    .navbar-menu:hover, .navbar-active{
        color: #eb1c25;
        font-weight: 700;
    }
    /* .dropdown:hover > .dropdown-menu{
        display: block;    
    } */
    .navbar-menu::after, .navbar-active::after{
        content: "";
        position: absolute;
        background-color: #eb1c25;
        height: 3px;
        width: 0;
        left: 0;
        bottom: 0px;
        transition: 0.3s;
    }
    .navbar-menu:hover::after{
        width: 100%;
    }
    .dropdown-toggle{
        border: none;
    }
    .dropdown-menu, .dropdown-item{
        background-color: #212529;
        color:  #f8f9fa;
        border-radius: 0;
    }
    .dropdown-item:hover{
        color:  #212529;
    }
</style>

<nav id="navbar" class="bg-dark d-flex align-items-center" style="height: 80px">
    <div class="container h-100 d-flex justify-content-between align-items-center py-3 shadow-lg text-light">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
            <img src="{{ asset('images/juara-font.png') }}" alt="" style="width: 100px;">
        </div>
        <a class="d-flex d-md-none justify-content-center align-items-center rounded" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <button class="btn btn-outline-light me-0 me-md-3" type="button">
                <i class="bi bi-list"></i>
            </button>
        </a>
        <div class="h-100 d-none d-md-flex align-items-center">
            <a href="" class="navbar-menu position-relative h-100 px-3 {{ (request()->is('/lms')) ? 'navbar-active' : '' }}">Home</a>
            <div class="navbar-menu dropdown h-100 p-0">
                <button class="dropdown-toggle bg-dark h-100 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none;">
                    Pages
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                    <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                    <li><a class="dropdown-item" href="#">Event Security</a></li>
                </ul>
            </div>
            <div class="navbar-menu dropdown h-100 p-0">
                <button class="dropdown-toggle bg-dark h-100 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none;">
                    LMS List
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                    <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                    <li><a class="dropdown-item" href="#">Event Security</a></li>
                </ul>
            </div>
            <div class="navbar-menu dropdown h-100 p-0">
                <button class="dropdown-toggle bg-dark h-100 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none;">
                    Courses
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                    <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                    <li><a class="dropdown-item" href="#">Event Security</a></li>
                </ul>
            </div>
            <div class="navbar-menu dropdown h-100 p-0">
                <button class="dropdown-toggle bg-dark h-100 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none;">
                    Classes
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learning Management System</a></li>
                    <li><a class="dropdown-item" href="#">Close Procedure Operative (CPO)</a></li>
                    <li><a class="dropdown-item" href="#">Event Security</a></li>
                </ul>
            </div>
            <a href="" class="position-relative navbar-menu h-100 px-3">Blog</a>
            <a href="" class="position-relative navbar-menu h-100 px-3">Contact</a>
        </div>
        <div class="d-none d-md-flex align-items-center gap-2">
            <button class="btn btn-dark rounded-circle d-flex justify-content-center align-items-center" style="height: 35px; width: 35px">
                <i class="bi bi-search" style="font-size: 15px"></i>
            </button>
            <button class="btn btn-dark rounded-circle d-flex justify-content-center align-items-center me-2" style="height: 35px; width: 35px">
                <i class="bi bi-bag" style="font-size: 15px"></i>
            </button>
            <a href="" class="btn btn-outline-light" style="border-radius: 0">
                Register
            </a>
            <a href="" class="btn btn-outline-light" style="border-radius: 0">
                Login
            </a>
        </div>
    </div>
</nav>