<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MyWorkDetails - blog </title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="bg-dark">
  
  <div class="container">
    @yield('container')
  </div>


  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <!-- Page level plugin JavaScript-->
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
  <!-- Custom scripts for this page-->
  <script src="{{asset('admin/js/sb-admin-datatables.min.js')}}"></script>
  <script src="{{asset('admin/js/sb-admin-charts.min.js')}}"></script>
</body>

</html>
