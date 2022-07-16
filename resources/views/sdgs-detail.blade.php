@extends('layouts.app')
@section('title')
    SDG's Rules
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
                            <h1 class="main-bunner-title">Read About UNO's SDG's Rules</h1>
                            {{-- <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <h1 class="text-center">DISABILITY</h1>
            <p>
                The 2030 Agenda for Sustainable Development and its 17 SDGs provide a powerful framework to guide local
                communities, countries and the international community toward the achievement of disability-inclusive
                development .
            </p>
            <p>
                WHO’s International Classification of Functioning, Disability and Health. provides the scientific basis for
                this model of disability.
            </p>
            <p>
                Disability is a matter of degree, because mental and physical impairments range in severity, from minor to
                severe. The experience of disability over the life-course is a universal human experience since everyone
                will experience some limitation in bodily or mental function at some point.
            </p>
            <p>
                Leaving no one behind and the commitment to human rights for people with disabilities are guiding principles
                of the 2030 Agenda (1,5). It recognizes disability as a cross-cutting issue particularly relevant to the
                SDGs on education, growth and employment; inequality; accessibility of human settlements; and data,
                monitoring and accountability. People with disabilities were recognized as a primary disadvantaged group for
                ensuring healthy lives and well-being. At the same time, it also recognizes that indicators to monitor all
                SDGs targets need data that are disaggregated by disability status.
            </p>
            <div class="row mb-5">

                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-1.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-2.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-3.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-4.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-5.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
            </div>
            <h4>
                SDG 3.4. Reduce premature mortality from noncommunicable diseases and promote mental health and well-being
            </h4>
            <p>
                People with disabilities have higher health and well-being needs.
            </p>
            <p>
                In 2011, WHO produced an overall global estimate of 15% prevalence of disability, and an estimate produced
                in 2015 based on the European Union (EU) Labour Force Survey and the 2012 European Health and Social
                Integration Survey reported a 14% prevalence rate for citizens aged 15–64 years in the Member States of the
                EU .
            </p>
            <img src="{{ asset('assets/images/sdg-6.jpeg') }}" class="image-fluid" style="height:160px; width:140px;">
            <p>
                The years lived with disability (YLD), and potentially poor health, in the population of the WHO European
                Region is increasing. Based on Global Burden of Disease data and analysis, the extent of disability at the
                population level in the Region associated with the health conditions with the highest prevalence has shown a
                steady increase of 6.3% in the period (2006–2016).
            </p>
            <h4>
                SDG 3.8. Achieve universal health coverage
            </h4>
            <p>
                There is substantial evidence that people with disabilities have poorer access to and uptake of health-care
                services, which results in greater unmet health needs
            </p>
            <p>
                Universal health coverage is particularly important for people with disability since cost is a primary
                reason for health care being inaccessible. Even in high income countries, people with disabilities
                experience financial barriers to health care. The greatest financial barriers are out-of-pocket expenses,
                which are increasing and particularly impact people with chronic diseases and disability.
            </p>
            <p>
                In a 2016 study of countries in Europe, 30% of those with disabilities who needed but could not get health
                care cited expense as the reason for lack of access. There are also wide variations between countries: in
                Denmark, affordability was cited as an obstacle by only 16% of people with disability, while in Italy the
                figure was 94%.
            </p>
            <p>
                Evidence also suggests that people with disabilities are denied access to rehabilitation services based on
                age: a survey of 70 neurotrauma centres across Europe showed that in 32 centres people aged 65 years and
                older with brain injury were less likely to be referred to a rehabilitation clinic because of perceived
                inferior rehabilitation potential in the elderly.
            </p>
            <p>
                In a 2017 United Kingdom study, people with a severe disability were found to be 4.5 times more likely to
                face a problem accessing mental health care, primarily because of cost, while those with a mild disability
                had a 3.6 higher chance of facing difficulties. Austerity programmes in countries such as Greece tend to
                have a disproportionate impact on access to health care for people with disabilities.
            </p>
            <h4>
                SDG 1.3. Implement nationally appropriate social protection systems and measures for all and achieve
                substantial coverage for the poor and the vulnerable
            </h4>
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-7.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-10">
                    <p>
                        The aim of social protection policies is to ensure, as a minimum, that all people have access to
                        income security throughout their lives, through access to essential health care, including maternity
                        care; basic income security for children, providing access to nutrition, education, care and any
                        other necessary goods and services; basic income security for people of active (working) age who are
                        unable to earn sufficient income, in particular in cases of sickness, unemployment, maternity and
                        disability; and basic income security for older people.
                    </p>
                </div>
            </div>
            <p>
                Public expenditure on social protection impacts health equity as it improves financial security for those
                who are being left behind through disability, unemployment, housing deprivation and social exclusion.
            </p>
            <h4>
                SDG 3.7, 5.6 and 10.2. Ensure universal access to sexual and reproductive healthcare services and health and
                reproductive rights and promote universal social, economic and political inclusion
            </h4>
            <p>
                People with disabilities have equal needs to access sexual and reproductive health as those without
                disabilities and have similar requirements for family planning and childbirth. However, sexual and
                reproductive health for those with disabilities has received little attention because of misperceptions
                about people with disabilities and the assumption that they are not sexually active.
            </p>
            <p>
                A United Kingdom study found that females with intellectual disabilities died some 20 years younger, and
                males 13 years younger, than females and males in the general population. Deaths preventable by good-quality
                health care were three times more common in people with intellectual disability.
            </p>
            <p>
                A Dutch study on sexuality and contraception found that young people with mild intellectual disability did
                not have access to information about contraception and had increased risk of unwanted pregnancy and related
                health risks.
            </p>
            <p>
                People with disabilities face persistent inequality in social, economic and political spheres.
            </p>
            <p>
                Within countries of the EU, there are large inequalities in health and life expectancy associated with
                disadvantaged groups, such as people with disabilities, due to increased exposure to health risks and
                disparities in access to high-quality care.
            </p>
            <p>
                Nearly 80% of those in the EU with disability report their health as poor or very poor (28). At the same
                time, they also have poorer access to and uptake of quality health-care services and so greater unmet health
                needs.
            </p>
            <div class="row mb-5">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-8.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-9.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('assets/images/sdg-10.jpeg') }}" class="image-fluid" width="100%"
                        style="height:160px">
                </div>
                <div class="col-sm-3"></div>
            </div>
            <p>
                The extra cost of living with a disability in 31 Member States of the WHO European Region was estimated to
                range, depending on the method used (ability to make ends meet or household assets), between 17% (Cyprus)
                and 99% (Sweden) or 16% (Hungary) and 155% (Norway).
            </p>
            <p>
                A 2014 study found that older people with disability in Greece, Italy and Poland had a higher level of unmet
                care needs when compared with older people with disability in Germany and the United Kingdom.
            </p>
            <p>
                Health service gaps are due to the physical, financial, attitudinal, informational and communication
                barriers that are faced by people with disabilities when they try to access health-care services.For
                example, when sign language communication is not available, communication barriers between patients with
                hearing impairments and physicians have been shown to negatively impact the quality of health care,
                including less use of preventive services.
            </p>
        </div>
    </section>
@endsection
