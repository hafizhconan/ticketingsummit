<!DOCTYPE html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CCI SUMMIT</title>

  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">

  <!-- endinject -->

  <!-- plugin css for this page -->

  <!-- End plugin css for this page -->

  <!-- inject:css -->

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- endinject -->

  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />

  <script>

      window.Laravel = <?php echo json_encode([

          'csrfToken' => csrf_token(),

      ]); ?>

  </script>

</head>



<body>

    <div class="container bg-light">

      <!-- partial:partials/_navbar.html -->

      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <div class="navbar-menu-wrapper d-flex align-items-center">

          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown d-none d-xl-inline-block">

              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

                <span class="profile-text">{{ Auth::user()->name }}</span>

                <img class="img-xs rounded-circle" src="{{ asset('images/logo.png') }}" alt="Profile image">

              </a>

              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                <!-- <a class="dropdown-item p-0">

                  <div class="d-flex border-bottom">

                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>

                    </div>

                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">

                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>

                    </div>

                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>

                    </div>

                  </div>

                </a> -->

                <a class="dropdown-item mt-2">

                  Manage Accounts

                </a>

                <a class="dropdown-item">

                  Change Password

                </a>

                <a class="dropdown-item">

                  Check Inbox

                </a>

                <a class="dropdown-item" href="{{ url('/user/logout') }}"

                    onclick="event.preventDefault();

                             document.getElementById('logout-form').submit();">

                    Logout

                </a>



                <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">

                    {{ csrf_field() }}

                </form>

              </div>

            </li>

          </ul>

          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

            <span class="mdi mdi-menu"></span>

          </button>

        </div>

      </nav>

      

      <!-- partial -->

      <div class="container-fluid page-body-wrapper bg-light">

        <!-- partial -->

        <div class="main-panel" style="width: 100%">

          <div class="content-wrapper bg-light justify-content-center">

            <div class="row">

              <div class="col-lg-7 grid-margin stretch-card">

                <!--weather card-->

                <div class="card card-weather">

                  <div class="card-body">

                    <div class="weather-date-location">

                      <h3>{{ \Carbon\Carbon::now()->format('l') }}</h3>

                      <p class="text-gray">

                        <span class="weather-date"></span>

                        <span class="weather-location">Bandung, ID</span>

                      </p>

                    </div>

                    <div class="weather-data d-flex">

                      <div class="mr-auto">

                        <h4 class="display-3">{{\Carbon\Carbon::now()->toFormattedDateString() }}

                      </div>

                    </div>

                  </div>

                </div>

                <!--weather card ends-->

              </div>

     @yield('content')



<!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->

        <footer class="footer">

          <div class="container-fluid clearfix">

            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019

                <a href="https://www.facebook.com/hafizh.conan.1" target="_blank">Made By Hafizh Conan</a>

              <a href="http://www.bootstrapdash.com/" target="_blank">Template By Bootstrapdash</a>. All rights reserved.</span>

            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with

              <i class="mdi mdi-heart text-danger"></i>

            </span>

          </div>

        </footer>

        <!-- partial -->

      </div>

      <!-- main-panel ends -->

    </div>

    <!-- page-body-wrapper ends -->

  </div>

  <!-- container-scroller -->



  <!-- plugins:js -->

  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>

  <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>

  <!-- endinject -->

  <!-- Plugin js for this page-->

  <!-- End plugin js for this page-->

  <!-- inject:js -->

  <script src="{{ asset('js/off-canvas.js') }}"></script>

  <script src="{{ asset('js/misc.js') }}"></script>

  <!-- endinject -->

  <!-- Custom js for this page-->

  <script src="{{ asset('js/dashboard.js') }}"></script>

  <!-- End custom js for this page-->

</body>



</html>