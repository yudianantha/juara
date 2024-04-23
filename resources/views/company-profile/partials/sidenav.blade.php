<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLanding" aria-labelledby="offcanvasLandingLabel" data-bs-theme="dark">
    <div class="offcanvas-header">
        <a class="d-flex justify-content-center align-items-center rounded" href="#">
            <img src="{{ asset('images/juara-icon.png') }}" alt="" class="me-2" style="width: 30px;">
            <img src="{{ asset('images/juara-font-full.png') }}" alt="" style="width: 100px;">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex">
                <p class="mb-0">Menu</p>
            </div>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">HOME</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">ABOUT US</a>
            <div class="d-flex">
                <p class="mb-0">Services</p>
            </div>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">LEARNING MANAGEMENT SYSTEM</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">CLOSE PROCEDURE OPERATIVE (CPO)</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">EVENT SECURITY</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">CYBER SECURITY</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">CONCIERGE SECURITY</a>
            <a href="" class="w-100 d-flex justify-content-center py-3 border">SECURITY ACADEMY</a>
        </div>
        <div class="d-flex flex-column gap-2 mt-3">
            <a class="w-100 d-flex justify-content-center py-3 border bg-juara fw-bold">BUY SECURITY PLAN</a>
            <a class="w-100 d-flex justify-content-center py-3 border bg-juara fw-bold" href="{{ url('/auth/login') }}">LOGIN</a>
            <div class="d-flex justify-content-end">
                <small class="mb-0">Juara Security by HiveMonk ©2024 All Rights reserved</small>
            </div>
        </div>
    </div>
</div>