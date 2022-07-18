@extends('layouts.app')
@section('title')
    Home
@endsection
@section('section')
    <!-- Swiper-->
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;{{ asset('assets/images/disabled-people.jpg') }}&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Help The Persons With Disabilities</h1>
                            <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <div class="row row-50 justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6">
                    <div class="box-img-animate">
                        <div class="box-img-animate-item"
                            data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 140,  &quot;smoothness&quot;: 50 }">
                            <img src="{{ asset('assets/images/audi-nissen-COmEXrbCtf4-unsplash (1).jpg') }}" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="innset-xl-left-70">
                        <h3>Our Mission</h3>
                        <p class="text-opacity-80">Our mission is to raise awareness of disabled people's rights by providing information on all of their rights under the United Nations Sustainable Development Goals. </p>
                        <div class="row row-50">
                            <div class="col-md-6 col-lg-12">
                                <div class="box-icon-modern">
                                    <div class="box-icon-inner decorate-triangle"><span
                                            class="icon-xl linearicons-baby2 icon-primary"></span></div>
                                    <div class="box-icon-caption">
                                        <h4><a href="#">Aware People</a></h4>
                                        <p>We want to aware and  help the people by providing the information of different institutes ,NGOs ,Schools and Stores that are working for persons with disabilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="box-icon-modern">
                                    <div class="box-icon-inner decorate-circle"><span
                                            class="icon-xl linearicons-sun icon-primary"></span></div>
                                    <div class="box-icon-caption">
                                        <h4><a href="#">Peace On The Planet</a></h4>
                                        <p>By working with our partners, we aim to establish peaceful relationships with persons with disabilities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  <div class="col-md-6 col-lg-12">
                                <div class="box-icon-modern">
                                    <div class="box-icon-inner decorate-rectangle"><span
                                            class="icon-xl linearicons-umbrella2 icon-primary"></span></div>
                                    <div class="box-icon-caption">
                                        <h4><a href="#">Care &amp; Protection</a></h4>
                                        <p>We provide global care and protection to support children all over the
                                            Pakistan.</p>
                                    </div>
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-1">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-lg-7 wow-outer">
                    <div class="wow slideInDown">
                        <h3>Organizations</h3>
                        <p>We are providing  the facilities  of  education and  health treatments to  the persons with disabilities.</p>
                    </div>
                </div>
            </div>
            <div class="row row-50">
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="{{ asset('assets/images/ngo-new.jpg') }}" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="{{ route('ngo-detail') }}">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="{{ route('ngo-detail') }}">NGO</a></h4>
                            {{--  <p class="box-causes-donate"><span class="box-causes-donate-complete">$92,160</span> of
                                <span>$100,000</span> raised
                            </p>  --}}
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="{{ asset('assets/images/school-new.jpg') }}" alt=""
                                    width="372" style="height:200px" /><a class="button button-sm button-primary"
                                    href="{{ route('school-detail') }}">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="{{ route('school-detail') }}">Schools</a></h4>
                            {{--  <p class="box-causes-donate"><span class="box-causes-donate-complete">$52,380</span> of
                                <span>$55,000</span> raised
                            </p>  --}}
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="{{ asset('assets/images/hospital.jpg') }}" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="{{ route('hospital-detail') }}">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="{{ route('hospital-detail') }}">Hospitals</a></h4>
                            {{--  <p class="box-causes-donate"><span class="box-causes-donate-complete">$42,280</span> of
                                <span>$45,000</span> raised
                            </p>  --}}
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="{{ asset('assets/images/store.jpg') }}" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="{{ route('store-detail') }}">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="{{ route('store-detail') }}">Stores</a></h4>
                            {{--  <p class="box-causes-donate"><span class="box-causes-donate-complete">$42,280</span> of
                                <span>$45,000</span> raised
                            </p>  --}}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  <section class="parallax-container bg-gray-600" data-parallax-img="assest/images/parallax-img-2.jpg">
        <div class="parallax-content section-xxl text-center">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-9 col-lg-8 col-xl-8 wow-outer">
                        <div class="innset-xl-right-30 innset-xl-left-30">
                            <div class="wow slideInDown">
                                <h3>Subscribe to Stay Informed</h3>
                                <form class="rd-form rd-mailform rd-form-inline"
                                    data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                    action="bat/rd-mailform.php">
                                    <div class="form-wrap">
                                        <input class="form-input" id="subscribe-form-email" type="email"
                                            name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-primary button-lg"
                                            type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
@endsection

