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
 
       
    <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">Dashboard</h1>

                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Welcome, developer!</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">

                                    <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple,
                                        clean and modular so it's a great base for building any modern web app.</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a class="btn app-btn-primary"
                                        href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg
                                            width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-file-earmark-arrow-down me-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                            <path fill-rule="evenodd"
                                                d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                                        </svg>Free Download</a>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->

                <div class="row g-4 mb-4">
                  
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Users</h4>
                                <div class="stats-figure"><?php echo e($usercount); ?></div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg>
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(url('user')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Admin</h4>
                                <div class="stats-figure"><?php echo e($admincount); ?></div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                    </svg>
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(url('totall_admin')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Totall_Appointment</h4>
                                <div class="stats-figure"><?php echo e($totall_Appointment); ?></div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(url('totall_appoint')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Approve_Appointment</h4>
                                <div class="stats-figure"><?php echo e($Appointment_approve); ?></div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(('Approve_Appointment')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Cancel_Appointment</h4>
                                <div class="stats-figure"><?php echo e($Appointment_cancel); ?></div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(('Cancel_Appointment')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Pandding_Appointment</h4>
                                <div class="stats-figure"><?php echo e($Appointment_pendding); ?></div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(('Pendding_Appointment')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Doctors</h4>
                                <div class="stats-figure"><?php echo e($doctorcount); ?></div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="<?php echo e(('Doctor')); ?>"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">patients</h4>
                                <div class="stats-figure">6</div>
                               
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    
                    <!--//col-->
                </div>
                <!--//row-->
                
            

            </div>
            <!--//container-fluid-->
        </div>          

        <?php echo $__env->make('light_admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          <!--//app-footer-->
    </div>
    <!--//app-wrapper-->


   
    <?php echo $__env->make('light_admin.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel2\resources\views/light_admin/Dashboard_Admin.blade.php ENDPATH**/ ?>