@extends('lms.layouts.app')

@section('title')
Juara Security
@endsection

@section('lms')

<section id="hero" class="pt-3 pt-md-5">
    <div class="container" style="height: 350px;">
        <div id="carouselExampleCaptions" class="carousel slide h-100">
            <div class="carousel-inner h-100">
              <div class="carousel-item active h-100">
                <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7" class="h-100 w-100 object-fit-cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="h-100 w-100 object-fit-cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4" class="h-100 w-100 object-fit-cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section id="banner" class="pt-3">
    <div class="container">
        <div class="bg-dark text-light d-flex justify-content-between align-items-center p-3 gap-3" style="height: 80px">
            <small class="d-flex d-md-none mb-0">Training 5 or more people? Get your team access to Juara's top 50+ courses</small>
            <h5 class="d-none d-md-flex mb-0">Training 5 or more people? Get your team access to Juara's top 50+ courses</h5>
            <div class="h-100 d-flex gap-3">
                <button class="h-100 bg-juara text-light me-0 me-md-0" style="border: none; border-radius: 0; width: 120px">
                    <small class="fw-bold" style="font-size: 12px">Get Juara LMS</small>
                </button>
                <button class="d-none d-md-flex justify-content-center align-items-center h-100 btn btn-outline-light" style="border-radius: 0">Dismiss</button>
            </div>
        </div>
    </div>
</section>

<section id="top-courses" class="py-3 py-md-5">
    <div class="container">
        <h5 class="fw-bold text-juara">Top Courses</h5>
        <div class="d-flex w-100 justify-content-between align-items-center">
            <h3>The best Courses this month</h3>
            <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover d-flex align-items-center">
                View all
                <i class="bi bi-chevron-double-right ms-2"></i>
            </a>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5">
            <div class="col">
                <div class="border p-2" style="height: 310px">
                    <div class="border mb-3" style="height: 180px">
                        <img src="https://images.unsplash.com/photo-1555597408-26bc8e548a46" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                    <p class="mb-0 fw-bold">How to arm yourself</p>
                    <small class="mb-2">Dimas Sasongko</small>
                    <div class="d-flex gap-1">
                        <small class="mb-0 border py-1 px-2 bg-primary text-light rounded-pill" style="font-size: 10px">Standard</small>
                        <small class="mb-0 border py-1 px-2 bg-dark text-light rounded-pill" style="font-size: 10px">Premium</small>
                        <small class="mb-0 border py-1 px-2 bg-danger text-light rounded-pill" style="font-size: 10px">Expert</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border p-2" style="height: 310px">
                    <div class="border mb-3" style="height: 180px">
                        <img src="https://images.unsplash.com/photo-1510915228340-29c85a43dcfe" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                    <p class="mb-0 fw-bold">Cyber Security for Small to Medium Corporation</p>
                    <small class="mb-2">Sony Mantara</small>
                    <div class="d-flex gap-1">
                        <small class="mb-0 border py-1 px-2 bg-primary text-light rounded-pill" style="font-size: 10px">Standard</small>
                        <small class="mb-0 border py-1 px-2 bg-dark text-light rounded-pill" style="font-size: 10px">Premium</small>
                        <small class="mb-0 border py-1 px-2 bg-danger text-light rounded-pill" style="font-size: 10px">Expert</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border p-2" style="height: 310px">
                    <div class="border mb-3" style="height: 180px">
                        <img src="https://images.unsplash.com/photo-1592348283512-f40aef178d24" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                    <p class="mb-0 fw-bold">Event Security Strategies</p>
                    <small class="mb-2">Berry Simalakama</small>
                    <div class="d-flex gap-1">
                        <small class="mb-0 border py-1 px-2 bg-primary text-light rounded-pill" style="font-size: 10px">Standard</small>
                        <small class="mb-0 border py-1 px-2 bg-dark text-light rounded-pill" style="font-size: 10px">Premium</small>
                        <small class="mb-0 border py-1 px-2 bg-danger text-light rounded-pill" style="font-size: 10px">Expert</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border p-2" style="height: 310px">
                    <div class="border mb-3" style="height: 180px">
                        <img src="https://images.unsplash.com/photo-1586864387634-2f33030dab41" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                    <p class="mb-0 fw-bold">Guard a Big Events</p>
                    <small class="mb-2">Joko Anwir</small>
                    <div class="d-flex gap-1">
                        <small class="mb-0 border py-1 px-2 bg-primary text-light rounded-pill" style="font-size: 10px">Standard</small>
                        <small class="mb-0 border py-1 px-2 bg-dark text-light rounded-pill" style="font-size: 10px">Premium</small>
                        <small class="mb-0 border py-1 px-2 bg-danger text-light rounded-pill" style="font-size: 10px">Expert</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border p-2" style="height: 310px">
                    <div class="border mb-3" style="height: 180px">
                        <img src="https://images.unsplash.com/photo-1713450602767-f0d44ea401a9" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                    <p class="mb-0 fw-bold">Bouncer and Security</p>
                    <small class="mb-2">Robert Sutiyoso</small>
                    <div class="d-flex gap-1">
                        <small class="mb-0 border py-1 px-2 bg-primary text-light rounded-pill" style="font-size: 10px">Standard</small>
                        <small class="mb-0 border py-1 px-2 bg-dark text-light rounded-pill" style="font-size: 10px">Premium</small>
                        <small class="mb-0 border py-1 px-2 bg-danger text-light rounded-pill" style="font-size: 10px">Expert</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection