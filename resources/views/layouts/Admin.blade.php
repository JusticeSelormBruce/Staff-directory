<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Admin - Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
          rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
          rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    @yield('title', 'Admin Dashboard')
    <style>
        img {
            width: 40px;
            height: 40px;
        }
        body{
            font-family: -apple-system;
        }
    </style>
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">

        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
{{--                    <img src="/uploads/avatars/{{$admin->avatar}}" alt="avatar" class=" img mr-2 float-left">--}}
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">

{{--                <small>{{$admin->name}}</small>--}}

            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="/user-profile-dashboard">

                        <br>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/staff-details">

                        <br>
                        <p>Staff Details</p>
                    </a>
                </li>
                <li>
                    <a href="/register">

                        <br>
                        <p>User Account</p>
                    </a>
                </li>
                <li>
                    <a href="/account-reset">
                        <br>
                        <p>Reset  Password</p>
                    </a>
                </li>
                <li>
                    <a href="/Write-News">

                        <br>
                        <p>Write News</p>
                    </a>
                </li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
</body>
</html>
