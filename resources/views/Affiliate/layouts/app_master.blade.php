<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('affiliate/assets/')}}"
  data-template="vertical-menu-template">

  @include('Affiliate.layouts.partials.head')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('Affiliate.layouts.partials.sidebar')

          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->
            @include('Affiliate.layouts.partials.navbar')

               <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')

            @include('Affiliate.layouts.partials.footer')

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('affiliate/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('affiliate/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('affiliate/assets/js/main.js')}}"></script>
    <script src="{{ asset('affiliate/assets/js/tables-datatables-basic.js')}}"></script>
    <script src="{{ asset('affiliate/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('affiliate/assets/js/app-logistics-dashboard.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


    <script>
        $(function () {
            $('#tableId').DataTable();
        });
    </script>



  </body>
</html>

