{{-- navbar --}}
<nav class="navbar navbar-expand-lg sticky-top navbar-light p-3" style="background-color: darkgoldenrod">
  <div class="container">
    <span class="navbar-text mb-0 text-uppercase fs-2 mt-2" style="font-family: 'Uchen', serif;">
      Fivicake
    </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fs-5 mb-0" id="navbarText">
      <ul class="navbar-nav mx-lg-5">
        {{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0 py-4 fs-5"> --}}
          <li class="nav-item mx-lg-1">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/">Beranda</a>
          </li>
          <li class="nav-item mx-lg-1">
            <a class="nav-link {{ Request::is('menu*') ? 'active' : '' }}" href="/menu">Menu</a>
          </li>
          <li class="nav-item mx-lg-1">
            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontak</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          {{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex"> --}}
            @guest
            <div class="d-flex">
              <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register">Register</a>
              </li>
              <li class="nav-item btn btn-primary px-5 mx-3 fs-5">
                <a class="nav-link {{ Request::is('login') ? 'active' : '' }} text-white" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
            </div>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @can('member')
                <li><a class="dropdown-item" href="/cart"><i class="bi-cart"></i> Cart
                  ({{ App\Models\Cart::query()
                    ->whereRelation('transaction', 'user_id', '=', Auth::user()->id)
                    ->whereRelation('transaction', 'status', '=', 'unpaid')
                    ->count();
                    }})</a></li>
                <li><a class="dropdown-item" href="/history"><i class="bi bi-clock-history"></i> History</a></li>
                @else
                <li><a class="dropdown-item" href="/transaction"><i class="bi-cart"></i>
                  Transaction Management
                  ({{ App\Models\Transaction::where('status', 'pending')->count();
                    }})
                </a></li>
                @endcan
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>