 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo me-auto"><a href="/">SwiftCredit</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('loan_plan') }}">Loan Plans</a></li>
          <li class="dropdown"><a href="{{ url('/about') }}"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/about') }}#privacy-policy">Privacy Policy</a></li>
              <li><a href="{{ url('/about') }}#security-policy"> Security Policy</a></li>
              <li><a href="{{ url('/about') }}#services">Terms Of Service</a></li>
              <li><a href="{{ url('/about') }}#faq">Frequently Asked Questions(FAQ)</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
          <li>@auth
            <ul>
                <li><i class="fi-rs-user"></i>{{ Auth::user()->name }} /
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                </li>
            </ul>
        @else
            <ul>
                {{-- <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register') }}">Sign Up</a></li> --}}
            </ul>
        @endif</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login') }}" class="appointment-btn scrollto d-none d-md-inline">Apply Now</a>

    </div>
  </header><!-- End Header -->
