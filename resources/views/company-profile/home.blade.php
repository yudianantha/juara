@extends('company-profile.layouts.app')

@section('title')
Juara Security
@endsection

<style>
    .btn{
        border-radius: 0 !important;
    }
    .scale-up{
        transition: all .2s ease-in-out;
        cursor: pointer;
    }
    .scale-up:hover{
        transform: scale(1.1);
    }
    .hero {
        
    }
    .carousel-item{
        height: 80vh;   
    }
    .hero-banner-container{
        position: relative;
    }
    .hero-banner{
        height: auto;
    }
    .section-description{
        width: auto;
    }
    @media (min-width: 768px){
        .hero {
        
        }
        .carousel-item{
            height: 75vh;
        }
        .hero-banner-container{
            position: absolute;
            height: 110px;
            bottom: -55px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            z-index: 1;
        }
        .hero-banner{
            height: 100%;
            border-radius: 1000px;
            border: 1px solid lightgray;
            transition: .3s;
        }
        .section-description{
            width: 50%;
        }
        #about-us{
            margin-top: 55px;
        }
    }
</style>

@section('company-profile')
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1485230405346-71acb9518d9c" class="h-100 w-100 object-fit-cover" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1603210185603-57fc717c4456" class="h-100 w-100 object-fit-cover" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7" class="h-100 w-100 object-fit-cover" alt="...">
              </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
            <div class="hero-banner-container container p-0">
                <div class="row row-cols-1 row-cols-md-3 hero-banner g-3 g-md-0 p-5 p-md-0 scale-up bg-dark text-light shadow-lg" style="border: none;">
                    <div class="col d-flex justify-content-start justify-content-md-center align-items-center">
                        <i class="bi bi-shield-shaded me-3" style="font-size: 50px; color:#ef0046;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">33 Companies Secured</h3>
                            <p class="mb-0">Telah melindungi 33 perusahaan</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-start justify-content-md-center align-items-center">
                        <i class="bi bi-person-arms-up me-3" style="font-size: 50px; color:#ef0046;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">200+ Person Trained</h3>
                            <p class="mb-0">Melatih lebih dari 200 orang</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-start justify-content-md-center align-items-center">
                        <i class="bi bi-award me-3" style="font-size: 50px; color:#ef0046;"></i>
                        <div>
                            <h3 class="fw-bold mb-0">30+ Certified Mentors</h3>
                            <p class="mb-0">Lebih dari 30 instruktur bersetifikat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1528605105345-5344ea20e269" alt="" class="w-100 img-fluid">
                </div>
                <div class="col d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column">
                        <h5 class="fw-bold text-juara">ABOUT US</h5>
                        <h3>The primary goal of business consulting is to help organizations.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iure natus, totam aliquid nisi possimus quas itaque molestiae vitae eligendi fugiat, corporis labore, tempore sed ut animi expedita? Debitis, voluptates.</p>
                        <div class="fw-bold p-3 mb-2" style="border-left: 2px solid #ef0046;">
                            <p class="mb-0">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus perferendis repellat dolorum ipsa suscipit delectus illum corporis pariatur culpa recusandae libero numquam doloribus, dolor, ea adipisci optio commodi debitis maxime."</p>
                        </div>
                        <p class="fw-light">-HENDRIK MORELLA | ZEROXE FOUNDER</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-juara d-flex justify-content-center align-items-center" style="width: 125px;">
                            Learn More
                            <i class="bi bi-caret-right-fill ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="key-benefits" class="bg-dark py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-md-4 text-light">
                    <h5 class="fw-bold text-juara">KEY BENEFITS</h5>
                    <h3>Why Should Choose Us?</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eos sint ullam veniam soluta, ducimus doloremque minus veritatis iste. Omnis voluptas in ea reprehenderit nam molestias consectetur obcaecati, ullam aspernatur?</p>
                    <ul style="list-style-type: none; margin: 0; padding: 0;">
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check me-3" style="font-size: 30px;"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check me-3" style="font-size: 30px;"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check me-3" style="font-size: 30px;"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check me-3" style="font-size: 30px;"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check me-3" style="font-size: 30px;"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-8 text-light d-flex flex-column justify-content-start justify-content-md-between">
                    <div class="container mb-3 px-0">
                        <div class="row row-cols-1 row-cols-md-2 g-3">
                            <div class="col">
                                <div class="overflow-hidden" style="height: 250px;">
                                    <img src="https://plus.unsplash.com/premium_photo-1661274038674-4af6db432393" alt="" class="h-100 w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col">
                                <div class="overflow-hidden" style="height: 250px;">
                                    <img src="https://plus.unsplash.com/premium_photo-1682125948844-e2dc8996b0f0" alt="" class="h-100 w-100 object-fit-cover"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>Business goals are our priority</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore accusantium ea ipsa numquam illum quisquam hic sed dicta nesciunt, obcaecati officiis cumque, fugit iusto est nostrum cupiditate suscipit nihil? Animi.</p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-juara-invert d-flex justify-content-center align-items-center" style="width: 125px;">
                                Learn More
                                <i class="bi bi-caret-right-fill ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="totally-commited" class="py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-md-5 px-0">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="border shadow d-flex justify-content-center align-items-center scale-up" style="height: 200px;">This is Data with Graph</div>
                            </div>
                            <div class="col-6">
                                <div class="border shadow d-flex justify-content-center align-items-center scale-up" style="height: 200px;">This is Data with Graph</div>
                            </div>
                            <div class="col-6">
                                <div class="border shadow d-flex justify-content-center align-items-center scale-up" style="height: 200px;">This is Data with Graph</div>
                            </div>
                            <div class="col-6">
                                <div class="border shadow d-flex justify-content-center align-items-center scale-up" style="height: 200px;">This is Data with Graph</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 d-flex flex-column justify-content-between gap-3 gap-md-0">
                    <div class="d-flex flex-column">
                        <h5 class="fw-bold text-juara">TOTALLY COMMITED</h5>
                        <h3>How to find the best security consultant?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, quo! Harum, excepturi. Vel sapiente aliquid laudantium ipsum quisquam voluptates excepturi reprehenderit, eveniet nulla laborum provident, iste ut neque repellendus doloribus.</p>
                        <ul style="list-style-type: none; margin: 0; padding: 0;">
                            <li class="d-flex align-items-center">
                                <i class="bi bi-chevron-right me-3" style="font-size: 17px;"></i>
                                Lorem ipsum dolor sit amet consectetur.
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-chevron-right me-3" style="font-size: 17px;"></i>
                                Lorem ipsum dolor sit amet consectetur.
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-chevron-right me-3" style="font-size: 17px;"></i>
                                Lorem ipsum dolor sit amet consectetur.
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-chevron-right me-3" style="font-size: 17px;"></i>
                                Lorem ipsum dolor sit amet consectetur.
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-chevron-right me-3" style="font-size: 17px;"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-juara d-flex align-items-center" style="width: 125px;">
                            Learn More
                            <i class="bi bi-caret-right-fill ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="who-we-are" class="py-5 bg-dark">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <div class="col d-flex flex-column text-light">
                    <h5 class="fw-bold text-juara">WHO WE ARE</h5>
                    <h3>Consultants typically have expertise in a particular industry or business.</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id iure reiciendis quos aperiam hic ratione similique iusto! Asperiores tempore, distinctio, quibusdam dolore explicabo minus cumque, magnam in et dicta quisquam.</p>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-plus text-light bg-juara me-3 px-2 py-1" style="font-size: 15px;"></i>
                            <h5 class="mb-0">VISION</h5>
                        </div>
                        <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam distinctio odit suscipit? Voluptatem inventore, possimus eum consequatur facere harum tempora esse porro perspiciatis quae, eius ipsa enim quidem! Ipsum, reprehenderit!</p>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-plus text-light bg-juara me-3 px-2 py-1"></i>
                            <h5 class="mb-0">MISSION</h5>
                        </div>
                        <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam distinctio odit suscipit? Voluptatem inventore, possimus eum consequatur facere harum tempora esse porro perspiciatis quae, eius ipsa enim quidem! Ipsum, reprehenderit!</p>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <canvas id="security-chart" class="w-100"></canvas>
                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do" class="py-5">
        <div class="container d-flex flex-column">
            <div class="d-flex flex-column align-items-center">
                <h5 class="fw-bold text-juara">WHAT WE DO</h5>
                <h3>Our Expertize & Services.</h3>
                <p class="text-center section-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, laboriosam blanditiis eos, corrupti voluptatum aliquam repudiandae perferendis voluptatem harum tenetur similique beatae molestiae, ab accusamus quibusdam. Aut aliquid ullam consectetur.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Market Research</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Develop Expertise</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Business Plan</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Legal and Financial</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Marketing and Networking</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border scale-up shadow d-flex align-items-center p-3">
                        <i class="bi bi-diamond-half me-3 text-juara"></i>
                        <div class="d-flex flex-column">
                            <h5>Identify Your Niche</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-project" class="py-5 bg-dark">
        <div class="container text-light d-flex flex-column gap-3">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col d-flex flex-column">
                    <h5 class="fw-bold text-juara">LATEST PROJECT</h5>
                    <h3>Thinking forward for your results.</h3>
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, odit. Cupiditate obcaecati velit asperiores dignissimos veniam id, in explicabo ullam hic necessitatibus debitis magni nemo voluptatum iste quam mollitia deleniti.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col">
                    <div class="scale-up" style="height: 350px;">
                        <img src="https://images.unsplash.com/photo-1571283056653-e9802feac258" alt="" class="h-100 w-100 object-fit-cover">
                    </div>
                </div>
                <div class="col">
                    <div class="row row-cols-2 g-3">
                        <div class="col">
                            <div class="scale-up" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="" class="h-100 w-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="col">
                            <div class="scale-up" style="height: 160px;">
                                <img src="https://images.unsplash.com/flagged/photo-1570343271132-8949dd284a04" alt="" class="h-100 w-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="col">
                            <div class="scale-up" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1461685265823-f8d5d0b08b9b" alt="" class="h-100 w-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="col">
                            <div class="scale-up" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1611077479643-5b3c01381f9e" alt="" class="h-100 w-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-juara-invert d-flex justify-content-center align-items-center" style="width: 125px;">
                    View All
                    <i class="bi bi-caret-right-fill ms-1"></i>
                </button>
            </div>
        </div>
    </section>

    <section id="services-and-pricing" class="py-5">
        <div class="container d-flex flex-column">
            <div class="d-flex flex-column align-items-center mb-5">
                <h5 class="fw-bold text-juara">SERVICES AND PRICING PLAN</h5>
                <h3>Effective & Flexible Pricing.</h3>
                <p class="text-center section-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ex dolorem libero, laudantium est eos alias ducimus veniam asperiores iusto excepturi cum minus quaerat sed nam vitae, repudiandae quos perspiciatis.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Learning Management System (LMS)</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;"><span class="fw-normal text-decoration-line-through" style="font-size: 15px;">Rp 200.000</span> Rp 50.000 <span class="fw-normal" style="font-size: 15px;">/month</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Close Procedure Operative (CPO)</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;">Rp 1.000.000 <span class="fw-normal" style="font-size: 15px;">/operation</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Event Security</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;">Rp 500.000 <span class="fw-normal" style="font-size: 15px;">/day</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Cyber Security</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;">Rp 800.000 <span class="fw-normal" style="font-size: 15px;">/operation</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Concierge Security</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;">Rp 500.000 <span class="fw-normal" style="font-size: 15px;">/operation</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="bg-light border shadow scale-up d-flex flex-column justify-content-between p-3 p-md-5 gap-5 h-100" style="min-height: 400px;">
                        <div class="d-flex flex-column">
                            <h3 class="text-center fw-bold">Security Academy</h3>
                            <small class="mb-0 text-start">start from</small>
                            <p class="fw-bold text-center" style="font-size: 30px;">Rp 1.500.000 <span class="fw-normal" style="font-size: 15px;">/class</span></p>
                            <p class="mb-2">features</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle mb-0"></i>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <button class="btn btn-juara">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
