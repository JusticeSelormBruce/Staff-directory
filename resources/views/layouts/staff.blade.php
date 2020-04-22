<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Staff - Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->


    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>

    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    @yield('title', 'User Dashboard')
    <style>
        img {
            width: 40px;
            height: 40px;
        }

        body {
            font-family: sans-serif;
            color: black;
            font-size: medium;
        !important;
        }
        a{
            color: blue!important;
        }
    </style>
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="{{asset('storage/'.$user->avatar)}}" alt="avatar" class=" img mr-2 float-left">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">

                <small>{{$user->name}}</small>

            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="/biography">

                        <p>Auto Biography</p>
                    </a>
                </li>
                <li>
                    <a href="/Achievements">
                        <i class="fas fa-award fa-1x"></i>
                        <p>Achievements</p>
                    </a>
                </li>

                <li>
                    <a href="/Employments">
                        <p>Employments</p>
                    </a>
                </li>
                <li>
                    <a href="/Qualifications">
                        <p>Qualifications</p>
                    </a>
                </li>
                <li>
                    <a href="/Specialization">
                        <p>Specialization</p>
                    </a>
                </li>
                <li>
                    <a href="/Research-Interest">
                        <p>Research Interest</p>
                    </a>
                </li>
                <li>
                    <a href="/Institutions">
                        <p>Institutions</p>
                    </a>
                </li>
                <li>
                    <a href="/Positions">
                        <p>Positions Held / Current</p>
                    </a>
                </li>
                <li>
                    <a href="/Profession">
                        <p>Profession/(Teaching Experience)</p>
                    </a>
                </li>
                <li>
                    <a href="/Project">
                        <p>Research Projects</p>
                    </a>
                </li>
                <li>
                    <a href="/Association">
                        <p>Association & Affiliations </p>
                    </a>
                </li>
                <li>
                    <a href="/Articles">
                        <p>Articles & Blocks </p>
                    </a>
                </li>
                <li>
                    <a href="/Publications">
                        <p>Publications</p>
                    </a>
                </li>
                <li>
                    <a href="/Awards">
                        <p>Awards and Grants</p>
                    </a>
                </li>
                <li>
                    <a href="/cv">
                        <p>My CV</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>

                </div>

                @include('navbar')
            </div>
        </nav>
        <main class=" pt-2 mt-5">
            @yield('render')
        </main>
    </div>
</div>


<script src="{{asset('paper-dashboard/js/jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>
<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('paper-dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/chartjs.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('paper-dashboard/js/paper-dashboard.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script src="{{asset('boostrap/js/ck.js')}}"></script>
</body>
</html>
