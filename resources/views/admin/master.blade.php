<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hansoll Viet Nam | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- ---- CSS ----- -->
  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


    <!-- ---- Header ----- -->
    @include('admin.pages.header')
    <!-- ---- End Header ----- -->


    <!-- ---- Sidebar ----- -->
    @include('admin.pages.sidebar')
    <!-- ---- End Sidebar ----- -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      @yield('breadcrumbs')

      <!-- -------- Content ---------- -->
      @yield('content')
      <!-- -------- End Content ---------- -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Footer & Control Sidebar -->
    @include('admin.pages.footer')
    <!-- End Footer & Control Sidebar -->

  </div>
  <!-- ./wrapper -->

  <!-- ---------- Script ------------ -->
  @yield('script')
  <!-- ---------- End Script ------------ -->

  @include('admin.pages.codescript')
</body>
</html>