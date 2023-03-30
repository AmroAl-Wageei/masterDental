<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/LogoIcon.png')}}"/>
        <!-- Title Icon   -->
        <link rel="icon" href="{{asset('images/aamro.png')}}" type="image/icon type" />
        <!-- Title Icon   -->
  </head>
  <body>



    <div class="container-scroller">

      <!-- partial:../../partials/_navbar.html -->



            {{-- Navbar Include  --}}
            @Include('Admin.includes.admin.navbar')
            {{-- Navbar Include  --}}
      
      
      
      <!-- partial -->
      
      
      <div class="container-fluid page-body-wrapper">
          
          {{-- Sidebar Include  --}}
          @Include('Admin.includes.admin.sidebar')
          {{-- Sidebar Include  --}}
          



        <div class="main-panel">

        @yield('content')


        {{-- Footer Include  --}}
        @Include('Admin.includes.admin.footer')
        {{-- Footer Include  --}}

          

        </div>

        <!-- main-panel ends -->

      </div>
      
      <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->




    <!-- Scroll to top -->
    <span class="up"> <i class="fa-solid fa-arrow-up"></i></span>
    <!-- Scroll to top -->

    <!--  Scroll and Slid Up -->
    <script src="{{asset('JS/scrollUp.js')}}"></script>
    <!--  Scroll and Slid Up -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/file-upload.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>