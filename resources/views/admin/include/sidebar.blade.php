<aside class="sidenav navbar  navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main" style="z-index: 111;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
            <img src="{{ asset('admin-2/assets-2/logo/logo-1.png') }}" class="navbar-brand-img text-white" alt="main_logo">
            {{-- <span class="ms-1 font-weight-bold text-white mt-3">E-SHOP</span> --}}
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
             <li class="nav-item ">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'bg-gradient-primary' : '' }} " href="{{ url('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white {{ Request::is('category') ? 'bg-gradient-primary' : '' }} " href="{{ url('category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('sub_category') ? 'bg-gradient-primary' : '' }} " href="{{ url('sub_category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">sort</i>
                    </div>
                    <span class="nav-link-text ms-1">Sub_Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('brands') ? 'bg-gradient-primary' : '' }}  " href="{{ url('brands') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">branding_watermark</i>
                    </div>
                    <span class="nav-link-text ms-1">Brands</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('products') ? 'bg-gradient-primary' : '' }}  " href="{{ url('products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">inventory</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('shipping') ? 'bg-gradient-primary' : '' }}  " href="{{ url('shipping') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">local_shipping</i>
                    </div>
                    <span class="nav-link-text ms-1">Shipping</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('coupen') ? 'bg-gradient-primary' : '' }}  " href="{{ url('coupen') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">percent</i>
                    </div>
                    <span class="nav-link-text ms-1">Discount_Coupen</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('order*', 'order-details*') ? 'bg-gradient-primary' : '' }}" href="{{ url('order') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">lock</i>
                    </div>
                    <span class="nav-link-text ms-1">Order</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('user') ? 'bg-gradient-primary' : '' }}  " href="{{ url('user') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">manage_accounts</i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
