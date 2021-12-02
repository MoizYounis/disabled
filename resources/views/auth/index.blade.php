@extends('layouts.master')
@section('section')
    {{-- <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg"> --}}
    <section class="parallax-container" data-parallax-img="https://image.freepik.com/free-vector/data-security-technology-background-vector-blue-tone_53876-112201.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Register</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Login</a></li>
                            <li class="active">Home</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register-->
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3>Register Yourself</h3>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Name *</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail *</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="text" name="phone"
                                data-constraints="@Numeric">
                            <label class="form-label" for="contact-phone">Phone *</label>
                        </div>
                        <div class="form-wrap">
                                <select class="form-input" name="" id="organization" data-constraints="@Required">
                                    <option value="">Select Your Organization *</option>
                                    <option value="1">School</option>
                                    <option value="2">Hospital</option>
                                    <option value="3">NGO</option>
                                    <option value="4">Others</option>
                                </select>
                            <label class="form-label" for="organization"></label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message"> Address *</label>
                            <textarea class="form-input" id="contact-message" name="message"
                                data-constraints="@Required"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-7 col-lg-5">
                                <button class="button button-block button-lg button-primary" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection