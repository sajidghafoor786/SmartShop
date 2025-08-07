<?php $__env->startSection('title'); ?>
  About
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyContent'); ?>
  <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(Session::get('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h1 class="card-title mb-4 text-center">About Us</h1>

                    

                    <p class="lead">
                        Welcome to <strong>[Your Company Name]</strong>, your trusted partner in <em>[your industry or service]</em>.
                    </p>

                    <hr>

                    <h2 class="mt-4">Our Story</h2>
                    <p>
                        Founded in <strong>[Year]</strong>, we started with a simple mission: <em>[brief description of your mission]</em>.
                    </p>

                    <h2 class="mt-4">Our Team</h2>
                    <p>
                        We're a group of passionate professionals dedicated to delivering excellence.
                    </p>

                    <h2 class="mt-4">Our Values</h2>
                    <ul class="list-group list-group-flush mb-0">
                        <li class="list-group-item">Customer Satisfaction</li>
                        <li class="list-group-item">Innovation</li>
                        <li class="list-group-item">Integrity</li>
                        <li class="list-group-item">Quality</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SmartShop\resources\views/user/pages/about.blade.php ENDPATH**/ ?>