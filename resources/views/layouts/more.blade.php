<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>

    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->


    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>

    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">

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

                </div>
            </a>
            <a href="#" class="simple-text logo-normal">



            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="{{route('read.more',['id'=>$key])}}">

                        <p>Auto Biography</p>
                    </a>
                </li>
                <li>
                    <a href="/index_achievement">
                        <p>Achievements</p>
                    </a>
                </li>

                <li>
                    <a href="/index_employments">
                        <p>Employments</p>
                    </a>
                </li>
                <li>
                    <a href="/index_qualifications">
                        <p>Qualifications</p>
                    </a>
                </li>
                <li>
                    <a href="/index_specialization">
                        <p>Specialization</p>
                    </a>
                </li>
                <li>
                    <a href="/index_research">
                        <p>Research Interest</p>
                    </a>
                </li>
                <li>
                    <a href="/index_institution">
                        <p>Institutions</p>
                    </a>
                </li>
                <li>
                    <a href="/index_position">
                        <p>Positions Held / Current</p>
                    </a>
                </li>
                <li>
                    <a href="/index_profession">
                        <p>Profession/(Teaching Experience)</p>
                    </a>
                </li>
                <li>
                    <a href="/index_projects">
                        <p>Research Projects</p>
                    </a>
                </li>
                <li>
                    <a href="/index_associations">
                        <p>Association & Affiliations </p>
                    </a>
                </li>
                <li>
                    <a href="/index_articles">
                        <p>Articles & Blocks </p>
                    </a>
                </li>
                <li>
                    <a href="/index_publications">
                        <p>Publications</p>
                    </a>
                </li>
                <li>
                    <a href="/index_awards">
                        <p>Awards and Grants</p>
                    </a>
                </li>
                <li>
                    <a href="/index_cv">
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
