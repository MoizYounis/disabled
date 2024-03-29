@extends('layouts.app')
@section('title')
    Contact
@endsection
@section('section')
    <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-small text-center bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span
                                class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="tel:#">+923481980942</a></h4>
                            <p>You can call us anytime</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span
                                class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">National Textile University, Faisalabad.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span
                                class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="mailto:#">laibasahiba118211@gmail.com</a></h4>
                            <p>Feel free to email us your questions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us-->
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3>Get in Touch</h3>
                    <!-- RD Mailform-->
                    @include('flash-message')
                    <form {{-- class="rd-form rd-mailform" --}} {{-- data-form-output="form-output-global" --}} {{-- data-form-type="contact" --}} method="post"
                        action="{{ route('contact-us') }}">
                        @csrf
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Your Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="text" name="phone"
                                data-constraints="@Numeric">
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message"> Message</label>
                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-7 col-lg-5">
                                <button class="button button-block button-lg button-primary" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
