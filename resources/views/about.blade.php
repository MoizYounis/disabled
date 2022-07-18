@extends('layouts.app')
@section('title')
    About
@endsection
@section('section')
    <section class="parallax-container" data-parallax-img="{{ asset('assets/images/about-us-l.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">About Us</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-1 bg-gray-1-decor">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-6 pr-xl-5"><img src="{{ asset('/assets/images/about-our-mission.jpeg') }}" alt="" width="518"
                        height="430" />
                </div>
                <div class="col-lg-6">
                    <h3>Our Mission</h3>
                    {{-- <div class="text-with-divider">
                        <div class="divider"></div>
                        <h4 class="text-opacity-70">We are committed to helping wounded kids find their place.</h4>
                    </div> --}}
                    <p>The main objective of our project is to aware people of the rights of disabled persons by providing
                        all the rights of the disabled person according to UNO SDGs and will also provide the knowledge of
                        schools, hospitals, stores; NGO’s that facilitate disable persons and will also signup there. </p>
                    <p>
                        Persons with disabilities use this portal and select what they want to do at that time so, in this
                        way we try to provide a medium or a channel which they have use and view the information of their
                        supportive institute (NGO’s, Schools, Hospitals & Stores).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="text-center">Our Mission</h3>
            <div class="row row-30 row-md-40 row-xl-60">
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-triangle"><span
                                class="icon-xl linearicons-earth icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Achieving Change</a></h4>
                            <p>Grandis, albus decors etiam desiderium de noster, clemens vita.</p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-circle"><span
                                class="icon-xl linearicons-umbrella2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Care &amp; Protection</a></h4>
                            <p>Cum advena peregrinationes, omnes brabeutaes manifestum germanus.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span
                                class="icon-xl linearicons-baby2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Awaring People</a></h4>
                            <p>We want to aware and help the people by providing the information of different institutes
                                ,NGOs ,Schools and Stores that are working for persons with disabilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span
                                class="icon-xl linearicons-sun icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Peace On The Planet</a></h4>
                            <p>By working with our partners, we aim to establish peaceful relationships with persons with
                                disabilities.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-triangle"><span
                                class="icon-xl linearicons-leaf icon-primary icon-xl-min"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Increasing Awareness</a></h4>
                            <p>Cum lixa accelerare, omnes xiphiases tractare festus, regius demolitionees.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-circle"><span
                                class="icon-xl linearicons-share2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Sharing Happiness</a></h4>
                            <p>We want to spread happiness and joy .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="section section-lg bg-gray-1">
        <div class="container">
            <h3 class="text-center">Our Team</h3>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-1-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Jane Smith</a></h4>
                            <p>Executive director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-2-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Albert Martinez</a></h4>
                            <p>Adoption program Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-3-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Ann Allen</a></h4>
                            <p>Educational program Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-4-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Evelyn Perez</a></h4>
                            <p>IT Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-5-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Daniel Bryant</a></h4>
                            <p>Community support Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-6-390x252.jpg" alt="" width="390"
                                height="252" />
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Louis Powell</a></h4>
                            <p>Assistant property Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
