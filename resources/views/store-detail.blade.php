@extends('layouts.app')
@section('title')
   Read About Stores
@endsection
@section('section')
    <!-- Swiper-->
    <style>
        ul {
            list-style-type: disc;
            font-size: 18px;
        }

        p {
            font-size: 20px;
        }
    </style>
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;{{ asset('assets/images/hospital.jpg') }}&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Read About Store</h1>
                            {{-- <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <h4 class="text-center"><b>We are providing some Items related to disabled persons as follows:</b></h4>
            <ul class="ml-5">
                <li class="my-3">⦁ Mobility aids, such as wheelchairs, scooters, walkers, canes, crutches⦁	1, prosthetic devices, and orthotic devices</li>
                <li class="my-3">⦁ Hearing aids to help people hear or hear more clearly</li>
                <li class="my-3">⦁ Cognitive aids, including computer or electrical assistive devices, to help people with memory, attention, or other challenges in their thinking skills</li>
                <li class="my-3">⦁ Computer software and hardware, such as voice recognition programs, screen readers, and screen enlargement applications, to help people with mobility and sensory impairments use computers and mobile devices.</li>
                <li class="my-3">⦁ Tools such as automatic page turners, book holders, and adapted pencil grips to help learners with disabilities participate in educational activities.</li>
                <li class="my-3">⦁ Closed captioning to allow people with hearing problems to watch movies, television programs, and other digital media.</li>
                <li class="my-3">⦁ Physical modifications in the built environment, including ramps, grab bars, and wider doorways to enable access to buildings, businesses, and workplaces.</li>
                <li class="my-3">⦁ Lightweight, high-performance mobility devices that enable persons with disabilities to play sports and be physically active.</li>
                <li class="my-3">⦁ Adaptive switches and utensils to allow those with limited motor skills to eat, play games, and accomplish other activities.</li>
                <li class="my-3">⦁ Devices and features of devices to help perform tasks such as cooking, dressing, and grooming; specialized handles and grips, devices that extend reach, and lights on telephones and doorbells are a few examples. </li>
            </ul>
            <h3 class="text-center my-4"><b><a href="{{ route('stores') }}">See All Stores</a></b></h3>
        </div>
    </section>
@endsection
