<?php $__env->startSection('title'); ?>
   Contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyContent'); ?>
  <div class="container">
    <div class="col-md-12 text-center py-5">
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?>
        <h1>Contact</ Us>
        
        <div class="row">
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <p>Have questions? We're here to help!</p>

                <address>
                    <strong>[Company Name]</strong><br>
                    [Street Address]<br>
                    [City, State, ZIP]<br>
                    <abbr title="Phone">P:</abbr> [Phone Number]<br>
                    <abbr title="Email">E:</abbr> <a href="mailto:[Email Address]">[Email Address]</a>
                </address>
            </div>

            <div class="col-md-6">
                <h2>Send Us a Message</h2>
                <form action="<?php echo e(route('contact')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SmartShop\resources\views/user/pages/contact.blade.php ENDPATH**/ ?>