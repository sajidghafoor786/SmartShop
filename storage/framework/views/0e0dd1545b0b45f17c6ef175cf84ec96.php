 <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
     id="navbarBlur" data-scroll="true">
     <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">

                 <li class="text-sm"><a class="opacity-5 text-dark" href="javascript:;"> Pages <span class="text-danger">
                             ></span></a></li>
                 <li class="  text-sm text-dark active" aria-current="page"> <?php echo $__env->yieldContent('pageName'); ?> </li>
             </ol>
             <h6 class="font-weight-bolder mb-0">Dashboard</h6>
         </nav>
         <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
             <a href="javascript:;" class="nav-link text-body p-0">
                 <div class="sidenav-toggler-inner">
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                 </div>
             </a>
         </div>
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
             <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                 
             </div>
             <ul class="navbar-nav  justify-content-end">
                 <li class="nav-item dropdown pe-2">
                     <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="material-icons me-sm-1">
                             account_circle
                         </i>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="">
                             <a class="dropdown-item border-radius-md" href="<?php echo e(route('profile.edit')); ?>">
                                 <i class="fa fa-user me-sm-1"></i> profile
                             </a>
                         </li>
                         <li class="">
                             <a class="dropdown-item border-radius-md" href="<?php echo e(route('user.logout')); ?>">
                                 <i class="fas fa-sign-out-alt"></i> Logout
                             </a>

                         </li>

                     </ul>
                 </li>

                 <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                     <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                         <div class="sidenav-toggler-inner">
                             <i class="sidenav-toggler-line"></i>
                             <i class="sidenav-toggler-line"></i>
                             <i class="sidenav-toggler-line"></i>
                         </div>
                     </a>
                 </li>
                 
             </ul>
         </div>
     </div>
 </nav>
<?php /**PATH C:\xampp\htdocs\SmartShop\resources\views/admin/include/navbar.blade.php ENDPATH**/ ?>