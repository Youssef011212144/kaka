<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- Required meta tags -->
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    @livewireStyles



    <!-- Scripts -->
    
</head>
<body>
  @include('layouts.inc.admin.navbar')
  @include('layouts.inc.admin.sidebare')

    @livewireScipts
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!--<script src="{{ asset('admin/vendors/chart.js/Chart.min.js')}}"></script>-->
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('admin/js/template.js')}}"></script>
  <script src="{{ asset('admin/js/dashboard.js')}}"></script>
  <script src="{{ asset('admin/js/data-table.js')}}"></script>
  <script src="{{ asset('admin/js/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
</body>
</html>