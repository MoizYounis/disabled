<?php $__env->startSection('title'); ?>
Request for Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Request for Product</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="active">Request for Product</li>
                        </ul>
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
                    <h3>Submit Your Request</h3>
                    <!-- RD Mailform-->
                    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form    method="POST"
                        action="<?php echo e(route('add-product-request')); ?>?product_id=<?php echo e($product->id); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Your Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email  @Required">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\muham\Music\disabled_person\resources\views/store/product_request.blade.php ENDPATH**/ ?>