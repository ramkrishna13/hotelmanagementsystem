<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>HotelPlex - @yield('title')</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('backend/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body>

    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{route('admin.index')}}">
              <img src="{{ asset('backend/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="HotelPlex Logo')}}">
            </a>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.index')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#homepage_settings" data-toggle="collapse" aria-expanded="false" class="collapsed">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Homepage Settings</span>
                  </a>
                  
                  
                  <ul id="homepage_settings" class="list-unstyled collapse">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('homepageedit', $home->id)}}">
                          <i class="ni ni-bold-up text-primary"></i>
                          <span class="nav-link-text">Banner Section</span>
                        </a>
                      </li>                           
                  </ul>
                  </li>

                <li class="nav-item">
                  <a href="#Hotel_configure" class="nav-link" data-toggle="collapse" aria-expanded="false" class="collapsed">
                  <i class="ni ni-app"></i> 
                  <span class="nav-link-text">Hotel Configuration</span>
                  </a>

                  

                  
                  <ul id="Hotel_configure" class="list-unstyled collapse">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('floors.index') }}">
                          <i class="ni ni-bold-up text-primary"></i>
                          <span class="nav-link-text">Floors</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('room_types.index') }}">
                            <i class="ni ni-bold-up text-primary"></i>
                            <span class="nav-link-text">Room Types</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('rooms.index') }}">
                              <i class="ni ni-bold-up text-primary"></i>
                              <span class="nav-link-text">Rooms</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('paid_services.index') }}">
                                <i class="ni ni-bold-up text-primary"></i>
                                <span class="nav-link-text">Paid Service</span>
                              </a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('tax.index') }}">
                                    <i class="ni ni-bold-up text-primary"></i>
                                    <span class="nav-link-text">Tax</span>
                                  </a>
                                </li>
                              
                  </ul>
                  </li>
                 <li class="nav-item">
                 <a class="nav-link" href="{{ route('guests.index') }}">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">Guests</span>
                  </a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('guests.index') }}">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                    <span class="nav-link-text">Reservation</span>
                  </a>
                </li>
             {{--    <li class="nav-item">
                  <a class="nav-link" href="login.html">
                    <i class="ni ni-key-25 text-info"></i>
                    <span class="nav-link-text">Login</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html">
                    <i class="ni ni-circle-08 text-pink"></i>
                    <span class="nav-link-text">Register</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="upgrade.html">
                    <i class="ni ni-send text-dark"></i>
                    <span class="nav-link-text">Upgrade</span>
                  </a>
                </li>--}}
              </ul>
              <!-- Divider -->
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Documentation</span>
              </h6>
              <!-- Navigation -->
              <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-text">Getting started</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                    <i class="ni ni-palette"></i>
                    <span class="nav-link-text">Foundation</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                    <i class="ni ni-ui-04"></i>
                    <span class="nav-link-text">Components</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                    <i class="ni ni-chart-pie-35"></i>
                    <span class="nav-link-text">Plugins</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active active-pro" href="{{route('home')}}" target="_blank">
                    <i class="ni ni-send text-dark"></i>
                    <span class="nav-link-text">Visit Homepage</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
  
      @yield('main')

       

@yield('scripts')

<script src="{{ asset('backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{ asset('backend/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{ asset('backend/assets/js/argon.js?v=1.2.0')}}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
</script>
</body>

</html>