<?php $__env->startSection('title'); ?>
    About
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <section class="parallax-container" data-parallax-img="<?php echo e(asset('assets/images/about-us-l.jpg')); ?>">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">About Us</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
                <div class="col-lg-6 pr-xl-5"><img src="<?php echo e(asset('/assets/images/about-our-mission.jpeg')); ?>" alt="" width="518"
                        height="430" />
                </div>
                <div class="col-lg-6">
                    <h3>Our Mission</h3>
                    
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
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/about.blade.php ENDPATH**/ ?>