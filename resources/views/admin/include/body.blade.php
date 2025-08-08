 <div class="container-fluid py-4">
    <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">group</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Users</p>
            <h4 class="mb-0">{{ $totalUsers }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">inventory</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Products</p>
            <h4 class="mb-0">{{ $totalProducts }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">category</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Categories</p>
            <h4 class="mb-0">{{ $totalCategories }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">layers</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Sub Categories</p>
            <h4 class="mb-0">{{ $totalSubCategories }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">store</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Brands</p>
            <h4 class="mb-0">{{ $totalBrands }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-secondary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">check_circle</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Completed Orders</p>
            <h4 class="mb-0">{{ $completedOrders }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">hourglass_empty</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Pending Orders</p>
            <h4 class="mb-0">{{ $pendingOrders }}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">local_shipping</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Shipping Orders</p>
            <h4 class="mb-0">{{ $shippingOrders }}</h4>
          </div>
        </div>
      </div>
    </div>
</div>

      <div class="row mb-4 mt-3">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Latest Complete Orders</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">10 done</span> this month
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                   @if ($order->isNotEmpty())
                                <table class="table table-flush align-items-center" id="datatable-search">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>OrderId</th>
                                            <th>Custemer</th>
                                            <th>Email</th>
                                            <th>Phone_Number</th>
                                            <th>Status</th>
                                            <th>Payment_Status</th>
                                            <th>Total</th>
                                            <th>Purchas Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $item)
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-xs">
                                                        <a
                                                            href="{{ route('order-detail', $item->id) }}">OR#{{ $item->id }}</a>

                                                    </span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        <span>{{ $item->Users->name }}</span>
                                                    </div>
                                                </td>
                                                <td class="font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $item->Users->email }}</span>
                                                </td>

                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $item->phone_no }}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    @if ($item->order_status == 'delivered')
                                                        <span
                                                            class="badge badge-sm bg-gradient-success fontSize">delivered</span>
                                                    @elseif($item->order_status == 'shipping')
                                                        <span
                                                            class="badge badge-sm bg-gradient-warning fontSize">shipping</span>
                                                    @elseif($item->order_status == 'cancelled')
                                                        <span class="badge badge-sm bg-gradient-danger fontSize">
                                                            Cancelled
                                                        </span>
                                                    @else
                                                        <span class="badge badge-sm bg-gradient-info  fontSize">
                                                            Pending
                                                        </span>
                                                    @endif

                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        @if ($item->payment_status == 'paid')
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">done</i></button>
                                                            <span>Paid</span>
                                                        @else
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">clear</i></button>
                                                            <span>un-paid</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span
                                                        class="my-2 text-xs">{{ number_format($item->grand_total, 2) }}/PKR</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">
                                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d F, Y') }}</span>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center p-5 ">
                                    <span class="text-secondary text-ls font-weight-bold">Record Not Found</span>
                                </div>
                            @endif
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Orders overview</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-success text-gradient">notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-danger text-gradient">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">shopping_cart</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-warning text-gradient">credit_card</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-primary text-gradient">key</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-icons text-dark text-gradient">payments</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">E-BookMart</a>
                for a better web.
              </div>
            </div>
            {{-- <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </footer>
    </div>
