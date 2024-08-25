@extends('layout/navbarmain')
@section('container')
<!-- banner -->

<section id="banner">
    <div class="banner">
        <div class="container">
            <div class="row justify-content-center align-items-center mt-3">
                <div class="container col-md-5 mb-5 mt-5 mt-lg-4 justify-content-center align-items-center">

                    <h1 class="header-title text-light mt-4">Abadikan Momen Indah
                        <br> <span> di Moon Eater</span>
                    </h1>
                    <h4> </h4>

                    <h7 class="text text-light">Terimakasih telah mengunjungi website kami, silahkan tekan tombol dibawah ini untuk memilih paket selengkapnya</h7>
                    <br>
                    <br>
                    <button class="cssbuttons-io-button"> Selengkapnya
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                            </svg>
                        </div>
                    </button>

                </div>
                <div class="col-md-7 mt-5 mt-5">
                    <img src="/img/camera.png " width="1000" height="1000" class="ban-img img-fluid ms-auto" alt="">
                </div>
                <div class="header-shape mx-auto mb-5">
                    <img src="/img/gradient4.png" class="img-fluid  mx-auto" width="1430" height="600" alt="">
                </div>

            </div>
        </div>

    </div>




    </div>


</section>

<div class="mt-5"></div>

<br>
<br>
<br>
<br>
<br>
<br>


<section class="gallery">

    <div class="d-grid gap-1 col-4 mx-auto">
        <button class="contactButton">
            Gallery
            <div class="iconButton">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                </svg>
            </div>
        </button>

    </div>
    <div class="mt-4"></div>
    <div class="container-lg mx-auto">
        <div class="row gy-4 col-8 row-cols-1 row-cols-sm-2 row-cols-md-3 mx-auto">
            <div class="col">
                <img src="/img/1.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="img/2.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="img/3.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="img/4.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="img/5.jpg" class="gallery-item" alt="gallery">
            </div>
            <div class="col">
                <img src="img/6.jpg" class="gallery-item" alt="gallery">
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md mx-auto">
        <div class="modal-content mx-auto">
            <div class=" modal-header ">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mx-auto">

                <img src="/img/1.jpg" class="modal-img modal-sm" alt="modal img" width="180" height="280">


            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="container col-9 d-flex">
    <div class="container">
        <div class="card" style="width: 19rem;">
            <div class="card-img-top align-items-center mx-auto my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="220" fill="white" class="bi bi-camera-reels mx-auto" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z" />
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z" />
                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
            </div>
            <div class="card-body mb-5">
                <h5 class="card-title">Kualitas terbaik</h5>
                <p class="card-text">Some quick example text </p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="card" style="width: 19rem ">
            <div class="card-img-top align-items-center mx-auto my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="220" fill="white" class="bi bi-cash mx-auto" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                </svg>
            </div>
            <div class="card-body mb-5">
                <h5 class="card-title">Harga Bersaing</h5>
                <p class="card-text">Some quick example text </p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card" style="width: 19rem; ">
            <div class="card-img-top align-items-center mx-auto my-auto d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="220" fill="white" class="bi bi-people mx-auto d-flex" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                </svg>
            </div>
            <div class="card-body mb-5">
                <h5 class="card-title">Crew Berpengalaman</h5>
                <p class="card-text">Some quick example text </p>

            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>

<!-- <div class="container-sm mx-auto">
    <div class="row align-items-center ">
        <div class="col-6 mx-auto">
            <div id="owl-demo" class="owl-carousel owl-theme col-md-6">
                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/1.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>

                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/2.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/3.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/4.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/5.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="container-gallery">
                    <div class="card border-2 shadow">
                        <img src="/img/6.JPG" alt="" class="card-img-top">
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<!-- <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 100,


        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script> -->
</section>
@endsection