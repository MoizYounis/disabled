@extends('layouts.app')
@section('title')
    Read About NGOs
@endsection
@section('section')
    <!-- Swiper-->
    <style>
        ul {
            list-style-type: disc;
            padding-left: 1em;
            margin-left: 1em;
        }

        ol {
            padding-left: 1.5em !important;
            margin-left: 1.5em;
        }

        ol li {
            font-size: 18px;
        }
        p {
            font-size: 20px;
        }
    </style>
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;{{ asset('assets/images/ngo-new.jpg') }}&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Read About NGOs</h1>
                            {{-- <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            <h3>What is an NGO?</h3>
            <p><span style="font-weight: bold">NGO stands for non-governmental organization.</span>. While there is no
                universally agreed-upon definition of an NGO, typically it is a voluntary group or institution with a social
                mission, which operates independently from the government.</p>
            <p>NGOs or similar organizations exist in all parts of the world. What is considered an NGO in one country may
                not qualify as an NGO in another, as legal definitions, permitted activities, monitoring, and oversight
                differ from country to country. The term can encompass many types of organizations.
            </p>
            <p>Although these terms are not necessarily interchangeable, an organization similar to an NGO may be called
                nonprofit, charity, non-profit organization (NPO), civil society organization (CSO), citizen sector
                organization (CSO), social benefit organization (SBO), an advocacy organization, voluntary organization,
                grassroots support organization (GSO), and non-state actor (NSA). You may also hear the terms independent
                sector, volunteer sector, and civil society during discussions about NGOs.
            </p>
            <h3>NGOs in PAKISTAN</h3>
            <p>Throughout the times’ humanity has grown, evolved, and survived with the help of each other. A perfect
                society is one where everyone helps each other to the best of their abilities to improve the living
                conditions of all members of society.</p>
            <p>In recent times with ever-growing problems such as economic recession, poverty, scarcity of resources,
                inequality, and health issues, the need for people to get together and help each other has gone from a
                formality to a need.</p>
            <p>Due to such need arising, the world was introduced to the concept of NGOs. NGOs or NPOs are independent
                organizations formed with the goal of challenging a social, political, or economic issue.
            </p>
            <p>NGOs or NPOs’ goal is to tackle the issue they feel is important to the society they live in. These
                organizations have missions and objectives which are carried out by their members and volunteers. They can
                be organized and operated on variable levels, including local, national, or even international.</p>
            <p>
            <ul>
                <li> <a href="https://jdcwelfare.org" style="font-size:20px"><u>⦁ JDC Foundation Pakistan</u></a></li>
            </ul>
            <ol>
                <li>1. EDHI FOUNDATION</li>
                <li>2. AGA KHAN FOUNDATION</li>
                <li>3. SAYLANI WELFARE TRUST</li>
                <li>4. ANSAR BURNEY TRUST</li>
                <li>5. DAR-UL-SUKUN</li>
                <li>6. WAR (War against Rape)</li>
                <li>7. AKHUWAT FOUNDATION</li>
                <li>8. KASHF FOUNDATION</li>
                <li>9. CHIPPA WELFARE ASSOCIATION</li>
                <li>10. AMAN FOUNDATION</li>
                <li>11. AL-KHIDMAT FOUNDATION</li>
                <li>12. AURAT FOUNDATION</li>
                <li>13. TCF</li>
                <li>14. GREEN CRESCENT TRUST</li>
            </ol>
            </p>
            <h3>1. JDC Foundation Pakistan</h3>
            <p>JDC organization was founded by Zafar Abbas. For the past 12 years, the JDC welfare organization is serving
                all over Pakistan and almost in all areas of human development. The organization currently provides
                charitable and welfare services like:
            <ul>
                <li> <a href="https://jdcwelfare.org/campaigns/free-mobile-restaurant-in-karachi"
                        style="font-size:20px"><u>Free Mobile Restaurant In Karachi</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/orphanage-house" style="font-size:20px"><u>Orphanage
                            House</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/free-dialysis-center" style="font-size:20px"><u>Free Dialysis
                            Center</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/free-ambulance-services" style="font-size:20px"><u>Free
                            Ambulance Services</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/free-educational-system" style="font-size:20px"><u>Free
                            Educational System</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/free-dastar-khwan" style="font-size:20px"><u>Free Dastar
                            khwan</u></a></li>
                <li> <a href="https://jdcwelfare.org/campaigns/first-free-covid-hospital" style="font-size:20px"><u>First
                            free covid hospital</u></a></li>
            </ul>
            From helping individuals to families and promoting ideas and initiatives that can help develop Pakistan, JDC
            aims to expand to a whole new level that can make Pakistan a prosperous place.
            </p>
            <h4>Head Office: B-24 Federal B Area, Incholi.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>2. EDHI FOUNDATION</h3>
            <p>Founded by the great visionary Abdul Sattar Edhi, the foundation has provided support during testing times as
                well. They have the biggest free ambulance service in the world; the foundation also offers orphan houses
                and health care services to the needy.</p>
            <h4>Head Office: Sarafa Bazar, Bolton Market, Mithadar.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>3. AGA KHAN FOUNDATION</h3>
            <p>Founded in 1967, the foundation has been providing health, financial and technical resources to marginalized groups throughout the world. The organization’s services include food security, education, and scholarship programs.</p>
            <h4>Head Office: SMS School, Karimabad.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>4. SAYLANI WELFARE TRUST</h3>
            <p>Saylani Trust has been operational since 1999; since then, the organization has provided relief to thousands of people through its services. The trust has an active dastarkhwan campaign as well as an RO plant installation campaign to provide the most basic necessity to the needy. Their education services provide education facilities to 180,000 students annually.</p>
            <h4>Head Office: Grappetite Chowrangi, Bahadurabad.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>5. ANSAR BURNEY TRUST</h3>
            <p>Since the 80s, the trust has paid incredible attention to protecting the sovereignty of humans. The organization focuses strongly on protecting human rights and is always at the forefront to speak against any human rights violation.</p>
            <h4>Head Office: 6 Hasan Manzil, Arambagh Road.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>6. DAR-UL-SUKUN</h3>
            <p>Since the 80s, the trust has paid incredible attention to protecting the sovereignty of humans. The organization focuses strongly on protecting human rights and is always at the forefront to speak against any human rights violation.</p>
            <h4>Head Office: Kashmir Road Block3, PECHS.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>7. WAR (War against Rape)</h3>
            <p>Founded in 1989by associates of WAF, WAR focuses on the taboo subject of rape. The organization helps provide mental and judicial support to the rape victims as well as call out harassment cultures. The organization, due to its taboo objective, has been scrutinized by the public numerous times.
            </p>
            <h4>Head Office:  Office#102 Pearl Crest, 18th C4 commercial lane, Zamzama Blvd.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>8. AKHUWAT FOUNDATION</h3>
            <p>The organization helps people by providing them with interest-free loans. The organization also has a cloth bank that provides clothing to the necessary. Other than that, they have affordable health services to help the needy as well.
            </p>
            <h4>Head Office: 19 Civic Center, Sector A2</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>9. KASHF FOUNDATION</h3>
            <p>The foundation started in 1996 as a microfinancing institution. The organization aims to provide financial services, including loans, to women who want to become independent and start their own businesses.
            </p>
            <h4>Head Office: 19 Aibak Block, New Garden town.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>10. CHIPPA WELFARE ASSOCIATION</h3>
            <p>Founded by Ramzan Chippa, the foundation is one of the biggest groups of volunteers in the country. Their services include ambulances, graveyards, dastarkhwan, orphanages, and ration distribution.
            </p>
            <h4>Head Office: Plot#ZC-5, Sector 8/A, Shahrah Faisal.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>11. AL-KHIDMAT FOUNDATION</h3>
            <p>Founded in 1980, the foundation has been providing humanitarian services such as orphan care, disaster management, ration packages, and ambulance services. There have been more than 2 million beneficiaries of their services.
            </p>
            <h4>Head Office: 501, Quaideen Colony.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>12. AURAT FOUNDATION</h3>
            <p>Founded in 1986, the organization tackles the issues and challenges faced by women in society. The organization has raised awareness as well as provided help to women who are suffering due to inequality in society.
            </p>
            <h4>Head Office: Building No. D-1, Street NO.11, G-11/1.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>13. AMAN FOUNDATION</h3>
            <p>The organization aims to develop social and economic equality. The organization provides education and training facilities to the deserving so they can fulfill their true potentials. The organization also has a large fleet of state of the art ambulances.
            </p>
            <h4>Head Office: PECHS Ext. Block 6.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>14. TCF</h3>
            <p>The organization was started with the aim of providing quality education to the underprivileged. Currently, the organization has more than 1600 schools under operation that provide education to the deserved.
            </p>
            <h4>Head Office: Plot#20, Brookes Chowrangi.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

            <h3>15. GREEN CRESCENT TRUST</h3>
            <p>Founded with the goal of providing education GTC established its first school in 1994. The organization now has more than 150 schools and focuses on empowering females as well. The organization also operates orphanages.
            </p>
            <h4>Head Office: Office 310-311, Plot E1, Jinnah Housing Society, PECHS.</h4>
            <h4 class="text-center my-3"><u>Contact Us</u></h4>

        </div>
    </section>
@endsection
