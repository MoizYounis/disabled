@extends('layouts.app')
@section('title')
    Read About Hospitals
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
                            <h1 class="main-bunner-title">Read About Hospitals</h1>
                            {{-- <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <h4><b><u>PSRD (Pakistan Society for the Rehabilitation of the Disabled) Hospital</u></b></h4>
            <p class="ml-5">
                PSRD (Pakistan Society for the Rehabilitation of the Disabled) Hospital is a state-of-the-art PMC verified
                hospital in Lahore. The hospital offers various facilities to both In-patient and out-patient. PSRD
                (Pakistan Society for the Rehabilitation of the Disabled) Hospital is well-equipped with advanced medical
                instruments.
            </p>
            <p class="ml-5">
                The consultants and specialists of the hospital are experienced and well-reputed in their field. The staff
                of the PSRD (Pakistan Society for the Rehabilitation of the Disabled) Hospital is fully trained, skilled and
                is committed to providing the best healthcare services.
            </p>
            <p class="ml-5">
                The PSRD (Pakistan Society for the Rehabilitation of the Disabled) Hospital aims to make healthcare services
                accessible and affordable using the latest technology for all patients without compromising the quality of
                the treatment.
            </p>
            <h4 class="ml-5 my-3"><b>National Council for Rehabilitation of Disabled Persons
                </b></h4>
            <p class="ml-5">
                Under the Disabled Persons (Employment & Rehabilitation) Ordinance, NCRDP and the Provincial Council for the
                Rehabilitation of Disabled Persons in each province (RCRDP) have been established with the provision of
                ordinance to ensure and enhance the work of employment, welfare and rehabilitation of PWDs. The main
                functions of NCRDP and PCRDP are:

                <ul class="ml-5">
                    <li class="my-3">⦁ Survey Disabled Persons who require rehabilitation b. Provide medical examination and
                        treatment, and training for PWDs Services being provided by NCRDP & PCRDP to PWDs: a. Assessment and
                        registration of PWDs.</li>
                    <li class="my-3">⦁ Protection of PWD the rights to employment according to 2% PWD employment quota in
                        public and private sectors.</li>
                    <li class="my-3">⦁ Financial assistance for setting up small businesses.</li>
                    <li class="my-3">⦁ Provision of equipment required for self-employment purpose like sewing, knitting
                        machines and other tools</li>
                    <li class="my-3">⦁ Provision of assistive devices and rehabilitation aids such as wheel chairs, tri
                        cycles, calipers, crutches, walkers, artificial limbs, hearing aids and low vision aids.</li>
                    <li class="my-3">⦁ Stipends for higher educations.</li>
                    <li class="my-3">⦁ Medical treatment by using local resources</li>
                </ul>
            </p>
        </div>
    </section>
@endsection
