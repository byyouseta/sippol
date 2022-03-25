@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>TIM UPG RSUP Surakarta</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Profil</li>
                    <li>Tim UPG</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    {{-- <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/img/tim.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="team" class="team ">
        <div class="container">
            <div class="row content mb-3">
                <div class="col-lg-12">
                    <div class="member d-flex justify-content-center">
                        <img src="{{ asset('assets/img/tim.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/BuDir.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>dr. Jamilatun Rosidah, MM</h4>
                            <span>Direktur RSUP Surakarta</span>
                            <p>Explicabo voluptatem mollitia et repellat</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/masudah.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Mas'udah, SKM</h4>
                            <span>Ketua TIM UPG</span>
                            <p>Aut maiores voluptates amet et quis</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/windy.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Windhy J, S.iKom</h4>
                            <span>Sekretaris TIM UPG</span>
                            <p>Quisquam facilis cum velit laborum corrupti</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/herni.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Herni Indrasmi</h4>
                            <span>TIM UPG</span>
                            <p>Dolorum tempora officiis odit laborum officiis</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/taufan.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Taufan Afgani</h4>
                            <span>TIM UPG</span>
                            <p>Quisquam facilis cum velit laborum corrupti</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/Mira.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Mira Rahmawati
                            </h4>
                            <span>TIM UPG</span>
                            <p>Dolorum tempora officiis odit laborum officiis</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
