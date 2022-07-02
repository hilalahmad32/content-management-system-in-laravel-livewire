<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Admin - {{$title}}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('assets/css/demo.css')}}" rel="stylesheet" />
        @livewireStyles
        <style>
            button{
                cursor: pointer;
            }
        </style>
    </head>

<body>
    {{ $slot }}
</body>
 <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{ asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
 <script src="{{ asset('assets/js/plugins/chartist.min.js')}}"></script>
 <script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{ asset('assets/js/light-bootstrap-dashboard.js')}} " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{ asset('assets/js/demo.js')}}"></script>
 @livewireScripts

 <script type="text/javascript">

 </script>

 </html>
