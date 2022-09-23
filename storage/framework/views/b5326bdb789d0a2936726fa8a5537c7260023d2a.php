<?php $__env->startSection('title'); ?>
   Read About Schools
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <!-- Swiper-->
    <style>
        ul {
            list-style-type: disc;
            padding-left: 1em;
            margin-left: 1em;
            font-size: 18px;
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
            style="background-image: url(&quot;<?php echo e(asset('assets/images/school-new.jpg')); ?>&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Read About Schools</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
            
            <p class="mx-5">
                There are 171 centers exclusively working at each tehsil/town level for the welfare of disabled children.
                Special children confronted with any sort of visual impairment, mental incapacitation, hearing impairment
                and physical disability are admitted in these institutions.
            </p>
            <h4 class="mt-5"><b>Institutes for Blind (Visually Impaired Children), Punjab</b></h4>
            <ul>
                <li>⦁ Govt. Institute for Visually Impaired Sheranwala Gate, Lahore</li>
                <li>⦁ Govt. Sunrise Institute for Visually Impaired Ravi Road, Lahore.</li>
                <li>⦁ Govt. Institute for Visually Impaired Girls,128- Khyber Block Allama Iqbal Town, Lahore</li>
                <li>⦁ Govt. High School of Special Education for Blind, Multan. Shah Rukn-E-Alam Colony, Multan.</li>
                <li>⦁ Govt High School of Special, Education for V.I D.G. Khan. Z-Block.</li>
                <li>⦁ Govt. High School of Special Education for Blind Sahiwal. Street #02, Y-Block, Tariq Bin Zaid Road
                </li>
                <li>⦁ Govt. High School of Special Education for Blind Faisalabad. W-Block Medina Town, Faisalabad.</li>
                <li>⦁ Govt. High School of Special Education for VIC, Sargodha. Z-Block, Iqbal Colony, Sargodha</li>
                <li>⦁ Govt. Primary School for Visual Impaired Girls, Sargodha. (Newly Established)</li>
                <li>⦁ Govt. Secondary School of Special Education for Blind, Bahawalpur. Model Town A-Block, Bahawalpur</li>
                <li>⦁ Govt. Institute for Blind, Gujranwala W-Block, Peoples Colony.</li>
                <li>⦁ Govt. School for the Blind Girls, Rawalpindi Near Furniture Market, Shahmasabad.</li>
                <li>⦁ Govt. Qandeel Secondary School for the Blind, Rawalpindi Kohati Bazar.</li>
                <li>⦁ Govt. Razia Sultan Institute for the Blind, Attock. People Colony</li>
                <li>⦁ Institute for Hearing Impaired/Intellectually Challenged and Physically Challenged Kids. Tanzeem
                    al-Lissan - Eid Bagh, Dhobi Ghat, Faisalabad</li>
            </ul>
            <h4 class="mt-3"><b>Institutes for Mentally Challenged Children</b></h4>
            <p>There are 14 institutions working for the training and education of mentally challenged children. Special
                children aging from 5 to 14 years confronted with any sort of mental incapacitation are admitted in these
                institutions</p>
            <h4 class="mt-3"><b>Institutes for Slow Learners</b></h4>
            <p>There are 36 institutions exclusively functioning for slow learner children. Special children aging from
                5 to 10 years confronted with any sort of slow learning mantel capacity are admitted in these institutions.
                IQ level of the children for the admission in these institutions shall be in the range of 70-95.
                Those who repeatedly failed in any school of general education from Class 1-5 and are found reluctant to
                continue education because of slow learning abilities would be included through referral
                system. Facility of pick & drop and text books are being provided free of cost to needy students.
            </p>

            <h4 class="mt-3"><b>Special Education Centers</b></h4>
            <p>There are 171 centers exclusively working at each tehsil/town level for the welfare of disabled children. Special children confronted with any sort of visual impairment, mental incapacitation, hearing impairment and physical disability are admitted in these institutions.
            </p>

            <h4 class="mt-3"><b>Degree Colleges</b></h4>
            <p>There are 7 degree colleges exclusively functioning for the welfare of disabled students.
                Special children confronted with any sort of visual impairment, hearing impairment and physical disability
                are admitted in these degree college.<br>
                Facility of pick & drop is being provided free of cost to the needy students.
            </p>

            <h4 class="mt-3"><b>Teachers Training College</b></h4>
            <p>Presently 2 teachers training colleges are providing professional training in the field of special education
                and offering B.Ed. in Special Needs, M.Ed. in Visual Impairment, Teachers of Deaf. Speech & Languages
               and M.A Special Education to the teachers.
            </p>

            <h4 class="mt-3"><b>In-Service Training College</b></h4>
            <p>In-Service Training College is providing professional training and latest teaching techniques through teaching aid to the teachers.
            </p>
            <h4 class="text-center my-5"><b><a href="<?php echo e(route('contact')); ?>">Contact Us</a></b></h3>
            <h3 class="text-center my-5"><b><a href="<?php echo e(route('organization')); ?>?name=School">See All Schools's</a></b></h3>
        </div>
    </section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/school-detail.blade.php ENDPATH**/ ?>