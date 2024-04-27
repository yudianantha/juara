@extends('dashboard-user.layouts.app')

@section('title')
Juara Security Dashboard
@endsection

@section('dashboard-user')
    <section id="stats" class="my-5">
        <div class="container">
            <h3 class="mb-3 border-start border-danger ps-2">Good Morning, John Deer !</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col">
                    <div class="d-flex flex-column align-items-center p-3 border" style="min-height: 100px">
                        <div class="d-flex align-items-center fw-bold">
                            <i class="bi bi-award text-success me-2" style="font-size: 25px"></i>
                            <p class="mb-0">Courses Done</p>
                        </div>
                        <div>
                            <h1 class="text-success fw-bold">10<span class="ms-2 text-dark fw-normal" style="font-size: 15px">courses</span></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center p-3 border" style="min-height: 100px">
                        <div class="d-flex align-items-center fw-bold">
                            <i class="bi bi-award text-success me-2" style="font-size: 25px"></i>
                            <p class="mb-0">Courses Done</p>
                        </div>
                        <div>
                            <h1 class="text-success fw-bold">10<span class="ms-2 text-dark fw-normal" style="font-size: 15px">courses</span></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center p-3 border" style="min-height: 100px">
                        <div class="d-flex align-items-center fw-bold">
                            <i class="bi bi-award text-success me-2" style="font-size: 25px"></i>
                            <p class="mb-0">Courses Done</p>
                        </div>
                        <div>
                            <h1 class="text-success fw-bold">10<span class="ms-2 text-dark fw-normal" style="font-size: 15px">courses</span></h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center p-3 border" style="min-height: 100px">
                        <div class="d-flex align-items-center fw-bold">
                            <i class="bi bi-award text-success me-2" style="font-size: 25px"></i>
                            <p class="mb-0">Courses Done</p>
                        </div>
                        <div>
                            <h1 class="text-success fw-bold">10<span class="ms-2 text-dark fw-normal" style="font-size: 15px">courses</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" class="mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-3 border-start border-danger ps-2">My Courses</h3>
                <a href="">See More</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="border" style="min-height: 250px">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="classes" class="mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-3 border-start border-danger ps-2">My Classes</h3>
                <a href="">See More</a>
            </div>

        </div>
    </div>
@endsection