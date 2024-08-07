<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title></title>

    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/custom-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" />

    <script src="{{asset('js/mdb.umd.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>




    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

<nav class="navbar fixed-top px-0 shadow-sm bg-white">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                <img class="nav-logo mx-2"  src="{{asset('images/menu.png')}}" alt="logo"/>
            </span>
            <img class="nav-logo  mx-2"  src="{{asset('images/logo.png')}}" alt="logo"/>
        </a>
    </div>
</nav>


<div id="sideNavRef" class="side-nav-open">

    <a href="{{url("/dashboard")}}" class="side-bar-item">
        <i class="bi bi-graph-up"></i>
        <span class="side-bar-item-caption">Dashboard</span>
    </a>

    <a href="{{url("/appointment")}}" class="side-bar-item">
        <i class="bi bi-people"></i>
        <span class="side-bar-item-caption">Book Appointment</span>
    </a>
    <a href="{{url("/client")}}" class="side-bar-item">
        <i class="bi bi-people"></i>
        <span class="side-bar-item-caption">Client List</span>
    </a>
    <a href="{{url("/history")}}" class="side-bar-item">
        <i class="bi bi-clock-history"></i>
        <span class="side-bar-item-caption">Health History</span>
    </a>

    <a href="{{url('/basicSoapPage')}}" class="side-bar-item">
        <i class="bi bi-envelope"></i>
        <span class="side-bar-item-caption">Basic SOAP notes</span>
    </a>
    <a href="{{url('/generalSoapPage')}}" class="side-bar-item">
        <i class="bi bi-envelope"></i>
        <span class="side-bar-item-caption">General SOAP notes</span>
    </a>
    <a href="{{url('/detailSoapPage')}}" class="side-bar-item">
        <i class="bi bi-envelope"></i>
        <span class="side-bar-item-caption">Detail SOAP notes</span>
    </a>

 <a href="{{url('/basicSoapReport')}}" class="side-bar-item">
        <i class="bi bi-envelope"></i>
        <span class="side-bar-item-caption">Basic SOAP notes Report</span>
    </a>

  <a href="{{url('/generalSoapReport')}}" class="side-bar-item">
      <i class="bi bi-envelope"></i>
      <span class="side-bar-item-caption">General SOAP notes Report</span>
  </a>

  <a href="{{url('/detailSoapReport')}}" class="side-bar-item">
      <i class="bi bi-envelope"></i>
      <span class="side-bar-item-caption">Detail SOAP notes Reports</span>
    </a>

    <a href="{{url("/reportPage")}}" class="side-bar-item">
        <i class="bi bi-bag"></i>
        <span class="side-bar-item-caption">Report</span>
    </a>

    <a href="{{url("/logout")}}" class="side-bar-item">
        <i class="bi bi-box-arrow-right"></i>
        <span class="side-bar-item-caption">Log Out</span>
    </a>
</div>


<div id="contentRef" class="content">
    @yield('content')
</div>



<script>
    function MenuBarClickHandler() {
        let sideNav = document.getElementById('sideNavRef');
        let content = document.getElementById('contentRef');
        if (sideNav.classList.contains("side-nav-open")) {
            sideNav.classList.add("side-nav-close");
            sideNav.classList.remove("side-nav-open");
            content.classList.add("content-expand");
            content.classList.remove("content");
        } else {
            sideNav.classList.remove("side-nav-close");
            sideNav.classList.add("side-nav-open");
            content.classList.remove("content-expand");
            content.classList.add("content");
        }
    }
</script>

</body>
</html>
