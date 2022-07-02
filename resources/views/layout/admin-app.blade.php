 <!DOCTYPE html>

 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
     <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Admin - {{ $title }}</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
         name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
     <link href="{{ asset('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
     @livewireStyles
     <style>
         button{
             cursor: pointer;
         }
     </style>
 </head>

 <body>
     <div class="wrapper">
         <div class="sidebar" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">
             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a href="http://www.creative-tim.com" class="simple-text">
                         CMS
                     </a>
                 </div>
                 <ul class="nav">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{@route('admin.dashboard')}}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li class="nav-item active">
                         <a class="nav-link" href="{{@route('admin.category')}}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Category</p>
                         </a>
                     </li>
                     <li class="nav-item active">
                         <a class="nav-link" href="{{@route('admin.admin')}}">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Admin</p>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button"
                         data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                         aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         <ul class="navbar-nav ml-auto">
                             <li class="nav-item">
                                 <a class="nav-link" href="#pablo">
                                     @livewire('admin.logout')
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
             {{ $slot }}
             <footer class="footer">
                 <div class="container-fluid">
                     <nav>
                         <p class="copyright text-center">
                             ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer>
         </div>
     </div>
 </body>
 <!--   Core JS Files   -->
 <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }} " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{ asset('assets/js/demo.js') }}"></script>
 @livewireScripts
 <script type="text/javascript"></script>

 </html>
