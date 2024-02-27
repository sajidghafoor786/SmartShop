<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    <?php echo $__env->make('light_admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="app">
    <header class="app-header fixed-top">

        <?php echo $__env->make('light_admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--//app-header-inner navbar-->

        <?php echo $__env->make('light_admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="container">
            <div class="row  py-5 mt-5">
                <div class="col-8  offset-md-2   mb-5">
                    <div CLASS=" col-md-12 text-center bg-secondary wow fadeInRight  ">
                        <h1 class="text-light">Canceled_Appointment</h1>
                    </div>
                    <div class="app-card app-card shadow-sm  wow zoomIn ">
                        <div class="app-card-body p-3 ">
                            <table class="table table-striped table-hover  wow zoomIn">
                                <thead>
                                    <tr>

                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">stutas</th>



                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $Cancel_Appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <th scope="row"><?php echo e($values->id); ?></th>
                                        <td><?php echo e($values->Name); ?></td>
                                        <td><?php echo e($values->Phone); ?></td>
                                        <td><?php echo e($values->Email); ?></td>
                                        <td><?php echo e($values->Date); ?></td>
                                        <td><?php echo e($values->Doctor_Name); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php echo $__env->make('light_admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--//app-footer-->
    </div>
    <!--//app-wrapper-->



    <?php echo $__env->make('light_admin.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel2\resources\views/light_admin/Dash_Data/Cancel_Appointment.blade.php ENDPATH**/ ?>