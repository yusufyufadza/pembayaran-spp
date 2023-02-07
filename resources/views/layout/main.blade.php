<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>Pembayaran | SPP</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
     <!-- Plugins css start-->
     <link rel="stylesheet" type="text/css" href="/assets/css/datatables.css">
     <link rel="stylesheet" type="text/css" href="/assets/css/datatable-extension.css">
     <!-- Plugins css Ends-->
     <!-- Bootstrap css-->
     <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
     <!-- App css-->
     <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
     <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
     <!-- Responsive css-->
     <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page Header Start-->
    @include('partials.navbar')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">

        <!-- Page Sidebar Start-->
       @include('partials.sidebar')
        <!-- Page Sidebar Ends-->

        <div class="page-body dashboard-2-main">
         @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->

      </div>
    </div>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- latest jquery-->
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="/assets/js/sidebar-menu.js"></script>
    <script src="/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/popper.min.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/js/chart/chartjs/chart.min.js"></script>
    <script src="/assets/js/chart/chartist/chartist.js"></script>
    <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/assets/js/chart/knob/knob.min.js"></script>
    <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/assets/js/prism/prism.min.js"></script>
    <script src="/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/js/counter/counter-custom.js"></script>
    <script src="/assets/js/custom-card/custom-card.js"></script>
    <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/owlcarousel/owl-custom.js"></script>
    <script src="/assets/js/dashboard/dashboard_2.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->

    <!-- Plugin used-->
     <!-- Plugins JS start-->
    <script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
    <script src="/assets/js/datatable/datatable-extension/custom.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->

  </body>
</html>
