<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <!-- Swiper-->
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;<?php echo e(asset('assets/images/disabled-people.jpg')); ?>&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Help The Persons With Disabilities</h1>
                            <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p>
                            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg">
        <div class="container">
            <div class="row row-50 justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6">
                    <div class="box-img-animate">
                        <div class="box-img-animate-item"
                            data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 0,  &quot;smoothness&quot;: 0 }">
                            <img src="<?php echo e(asset('assets/images/audi-nissen-COmEXrbCtf4-unsplash (1).jpg')); ?>" alt="" >
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
                                    <div class=""><span
                                            class="icon-xl linearicons-baby2 icon-primary"></span></div>
                                    <div class="box-icon-caption">
                                        <h4><a href="#">Aware People</a></h4>
                                        <p>We want to aware and  help the people by providing the information of different institutes ,NGOs ,Schools and Stores that are working for persons with disabilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="box-icon-modern">
                                    <div class=""><span
                                            class="icon-xl linearicons-sun icon-primary"></span></div>
                                    <div class="box-icon-caption">
                                        <h4><a href="#">Peace On The Planet</a></h4>
                                        <p>By working with our partners, we aim to establish peaceful relationships with persons with disabilities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
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
                            <div class="box-causes-img"><img src="<?php echo e(asset('assets/images/ngo-new.jpg')); ?>" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="<?php echo e(route('ngo-detail')); ?>">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="<?php echo e(route('ngo-detail')); ?>">NGO</a></h4>
                            
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="<?php echo e(asset('assets/images/school-new.jpg')); ?>" alt=""
                                    width="372" style="height:200px" /><a class="button button-sm button-primary"
                                    href="<?php echo e(route('school-detail')); ?>">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="<?php echo e(route('school-detail')); ?>">Schools</a></h4>
                            
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="<?php echo e(asset('assets/images/hospital.jpg')); ?>" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="<?php echo e(route('hospital-detail')); ?>">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="<?php echo e(route('hospital-detail')); ?>">Hospitals</a></h4>
                            
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow-outer">
                    <div class="wow fadeInUp">
                        <article class="box-causes">
                            <div class="box-causes-img"><img src="<?php echo e(asset('assets/images/store.jpg')); ?>" alt="" width="372"
                                style="height:200px" /><a class="button button-sm button-primary" href="<?php echo e(route('store-detail')); ?>">Read More</a>
                            </div>
                            <h4 class="font-weight-medium"><a href="<?php echo e(route('store-detail')); ?>">Stores</a></h4>
                            
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/home.blade.php ENDPATH**/ ?>