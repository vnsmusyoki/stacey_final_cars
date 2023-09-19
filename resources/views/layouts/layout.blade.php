<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('dashboard/css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/img/favicon.png') }}">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    @livewireStyles
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="{{ asset('dashboard/img/svg/bars.svg') }}" alt="img"></a>
                <a class="navbar-brand" href="#">SmartMartCars</a>
                <form action="/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                </form>
                <div class="top-menu">

                    <div class="strikingDash-top-menu position-relative">
                        <ul>
                            <li class="has-subMenu">
                                @role('administrator')
                                    <a href="{{ route('administrator') }}" class="active">Dashboard</a>
                                @endrole
                                @role('user')
                                    <a href="{{ route('user') }}" class="active">Dashboard</a>
                                @endrole
                            </li>




                        </ul>
                    </div>

                </div>
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="text"
                                placeholder="Search...">
                        </form>
                    </li>
                    <li class="nav-message">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="mail"></span></a>

                        </div>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>

                        </div>
                    </li>
                    <!-- ends: .nav-notification -->
                    <li class="nav-settings">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="settings"></span></a>

                        </div>
                    </li>
                    <!-- ends: .nav-settings -->
                    <li class="nav-support">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="help-circle"></span></a>

                        </div>
                    </li>
                    <!-- ends: .nav-support -->
                    <li class="nav-flag-select">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href=""><img src="img/eng.png" alt=""> English</a>

                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg"
                                    alt="" class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Abdullah Bin Talha</h6>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="key"></span> Billing</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="" class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">

        <aside class="sidebar">
            <div class="sidebar__menu-group">
                <ul class="sidebar_nav">
                    <li class="menu-title">
                        <span>Main menu</span>
                    </li>

                    @role('user')
                        <li>
                            <a href="{{ route('user') }}" class="">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                    @endrole
                    @role('administrator')
                    <li>
                        <a href="{{ route('administrator') }}" class="">
                            <span data-feather="home" class="nav-icon"></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                @endrole

                    @role('administrator')
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="mail" class="nav-icon"></span>
                                <span class="menu-text">Cars</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{ route('admin.uploadedcars') }}">Uploaded Car</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('admin.approvedcars') }}">All Approved</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('admin.todaycars') }}">Uploaded Today</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('admin.declinedcars') }}}">Declined Cars</a>
                                </li>
                            </ul>
                        </li>

                        @role('user')
                            <li class="has-child">
                                <a href="#" class="">
                                    <span data-feather="shopping-cart" class="nav-icon"></span>
                                    <span class="menu-text">Bids</span>
                                    <span class="toggle-icon"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('user.placebid') }}">Place New Bid</a>
                                    </li>
                                    <li>
                                        <a href="" class="">All Bids</a>
                                    </li>
                                    <li>
                                        <a href="" class="">Winning Bids</a>
                                    </li>
                                </ul>
                            </li>
                        @endrole
                        @role('administrator')
                            <li class="has-child">
                                <a href="#" class="">
                                    <span data-feather="folder" class="nav-icon"></span>
                                    <span class="menu-text">Users</span>
                                    <span class="toggle-icon"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.allusers') }}" class="">Users List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="#" class="">
                                    <span data-feather="user-check" class="nav-icon"></span>
                                    <span class="menu-text">About cars</span>
                                    <span class="toggle-icon"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a class="" href="{{  route('admin.carmake') }}">Car make</a>
                                    </li>
                                    <li>
                                        <a class="" href="{{  route('admin.carmodels') }}">Car Models</a>
                                    </li>

                                </ul>
                            </li>
                        @endrole


                        <li>
                            <a href="{{ url('admin/account-settings')}}" class="">
                                <span data-feather="user" class="nav-icon"></span>
                                <span class="menu-text">Secure Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                                class="">
                                <span data-feather="user-plus" class="nav-icon"></span>
                                <span class="menu-text">Sign Out</span>
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endrole

                    @role('user')
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="mail" class="nav-icon"></span>
                                <span class="menu-text">Cars</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{ route('user.uploadcar') }}">Upload Car</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.mycars') }}">All cars</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('user.underreview') }}">Under Review</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('user.publishedcars') }}">Published Cars</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('user.declinedcars') }}">Declined Cars</a>
                                </li>
                                <li>
                                    <a class="" href="{{ route('user.soldcars') }}">Sold Cars</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="shopping-cart" class="nav-icon"></span>
                                <span class="menu-text">Bids</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('user.placebid') }}" class="">Place New Bid</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.allbids') }}" class="">All My Bids</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.winningbids') }}" class="">Winning Bids</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('user/account-settings') }}" class="">
                                <span data-feather="clock" class="nav-icon"></span>
                                <span class="menu-text">Account Security</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                                class="">
                                <span data-feather="user-plus" class="nav-icon"></span>
                                <span class="menu-text">Sign Out</span>
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endrole
                </ul>
            </div>
        </aside>

        <div class="contents">

            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2022 @<a href="#">SmartMartcars Auctioning System</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <!-- inject:js-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('dashboard/js/plugins.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/script.min.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <!-- endinject-->


    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf',
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#exampletwo').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf',
                ]
            });
        });
    </script>
        <script>
            $(document).ready(function() {
                $('#examplethree').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf',
                    ]
                });
            });
        </script>

    @livewireScripts

</body>

</html>
