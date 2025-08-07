<?php $__env->startSection('title'); ?>
  Refund Policy
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyContent'); ?>
  <div class="container">
    <div class="col-md-12 text-center py-5">
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?>
        <h1>Refund Policy</h1>
        
        <p>Last Updated: [Date]</p>

        <h2>1. Refund Eligibility</h2>
        <p>We accept refund requests within [X] days of purchase for the following reasons:</p>
        <ul>
            <li>Defective or damaged products</li>
            <li>Incorrect items received</li>
            <li>Services not rendered as described</li>
        </ul>

        <h2>2. Non-Refundable Items</h2>
        <p>The following are not eligible for refunds:</p>
        <ul>
            <li>Downloadable software or digital products</li>
            <li>Services already performed</li>
            <li>Custom-made products</li>
        </ul>

        <h2>3. Refund Process</h2>
        <p>To request a refund:</p>
        <ol>
            <li>Contact our support team at [email/phone]</li>
            <li>Provide your order number and reason for refund</li>
            <li>We will review your request within [X] business days</li>
        </ol>

        <h2>4. Processing Time</h2>
        <p>Approved refunds will be processed within [X] business days and may take additional time to appear in your account.</p>

        <h2>5. Contact Us</h2>
        <p>For questions about our refund policy, contact us at [contact email].</p>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SmartShop\resources\views/user/pages/refund_policy.blade.php ENDPATH**/ ?>