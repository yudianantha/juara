@extends('company-profile.layouts.app')

@section('company-profile')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 70vh;">
                <img src="https://images.unsplash.com/photo-1485230405346-71acb9518d9c" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" style="height: 70vh;">
                <img src="https://images.unsplash.com/photo-1603210185603-57fc717c4456" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" style="height: 70vh;">
                <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="container" style="position: absolute; bottom: -55px; left: 0; right: 0; margin-left: auto; margin-right: auto; z-index: 1">
                <div class="row px-5 py-3 bg-light border rounded-pill shadow" style="height: 110px;">
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="bi bi-shield-shaded me-3" style="font-size: 50px;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">33 Companies Secured</h3>
                            <p class="mb-0">Telah melindungi 33 perusahaan</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="bi bi-person-arms-up me-3" style="font-size: 50px;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">200+ Person Trained</h3>
                            <p class="mb-0">Melatih lebih dari 200 orang</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <i class="bi bi-award me-3" style="font-size: 50px;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">30+ Certified Mentors</h3>
                            <p class="mb-0">Lebih dari 30 instruktur bersetifikat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" style="margin-top: 55px;">
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <img src="https://images.unsplash.com/photo-1528605105345-5344ea20e269" alt="" class="w-100 img-fluid rounded">
                </div>
                <div class="col-6 px-5">
                    <h5>About Us</h5>
                </div>
            </div>
        </div>
    </section>

@endsection
