  <div class="bg-light top-header">
      <div class="container">
          <div class="row align-items-center d-none d-lg-flex justify-content-between">
              <div class="col-lg-4 logo">
                  <a href="{{ route('user.home') }}" class="text-decoration-none"
                      >
                      <img src="{{ asset('admin-2/assets-2/logo/logo-2.png') }}" style="height: 100px; width: 150px;object-fit: cover; ">
                  </a>
              </div>

              <div class="col-lg-6 col-6 text-left  d-flex justify-content-end align-items-center">
                  @if (Auth::check())
                      <a href="{{ route('user.profile') }}" class="nav-link text-dark">My Account</a>
                  @else
                      <a href="{{ route('user.login') }}" class="nav-link text-dark">Login/Register</a>
                  @endif
                  <form action="{{ route('user.shop') }}" method="GET">
                      <div class="input-group">
                          <input type="text" placeholder="Search For Products" value="{{ Request::get('Search') }}"
                              class="form-control" name="Search">
                          <button type="submit" class="input-group-text ">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <header class="bg-dark">
      <div class="container">
          <nav class="navbar navbar-expand-xl" id="navbar">
              <a href="{{ route('user.home') }}" class="text-decoration-none mobile-logo">
                  <span class="h2 text-uppercase text-primary bg-dark">Online</span>
                  <span class="h2 text-uppercase text-white px-2">SHOP</span>
              </a>
              <button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon icon-menu"></span>
                  <i class="navbar-toggler-icon fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" title="Products">Home</a>
                            </li>  --}}
                      @if (getCategort()->isNotEmpty())
                          @foreach (getCategort() as $category)
                              <li class="nav-item dropdown">
                                  <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                      aria-expanded="false">
                                      {{ $category->name }}
                                  </button>
                                  @if ($category->sub_category->isNotEmpty())
                                      <ul class="dropdown-menu dropdown-menu-dark">
                                          @foreach ($category->sub_category as $sub_category)
                                              <li><a class="dropdown-item nav-link"
                                                      href="{{ route('user.shop', [str_replace(' ', '-', $category->slug), str_replace(' ', '-', $sub_category->slug)]) }}">{{ $sub_category->name }}</a>
                                              </li>
                                          @endforeach
                                      </ul>
                                  @endif
                              </li>
                          @endforeach
                        
                          </li>
                      @endif
                  </ul>
              </div>
              @php
                  $cartCount = Cart::count();
              @endphp
              <div class="right-nav py-0">
                  <a href="{{ route('user.cart') }}" class="ml-3 d-flex pt-2">
                      <i class="fas fa-shopping-cart text-primary fs-3"> <span
                              class="position-absolute top-0 start-100 translate-middle badge border border-light CartIcon  bg-danger">{{ $cartCount }}<span
                                  class="visually-hidden">unread messages</span></i>
                  </a>
              </div>
              <!-- <div class="wish">
                  <a href="{{ route('user.cart') }}" class="d-flex pt-2">
                       <i class="fas fa-heart  text-primary fs-3"><span
                              class="position-absolute top-0 start-100 translate-middle badge border border-light CartIcon  bg-danger"><span
                                  class="visually-hidden">unread messages</span></i>
                  </a>
              </div> -->
          </nav>
      </div>
  </header>

