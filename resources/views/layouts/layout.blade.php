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

                            <li class="has-subMenu">
                                <a href="#" class="">Apps</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="message-square" class="nav-icon"></span>
                                            <span class="menu-text">Chat</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="shopping-cart" class="nav-icon"></span>
                                            <span class="menu-text">eCommerce</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="products.html" class="">Products</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" class="">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="add-product.html" class="">Product
                                                    Add</a>
                                            </li>
                                            <li>
                                                <a href="" class="">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="cart.html" class="">Cart</a>
                                            </li>
                                            <li>
                                                <a href="order.html" class="">Orders</a>
                                            </li>
                                            <li>
                                                <a href="sellers.html" class="">Sellers</a>
                                            </li>
                                            <li>
                                                <a href="invoice.html" class="">Invoices</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="mail" class="nav-icon"></span>
                                            <span class="menu-text">Email</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="inbox.html" class="">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="read-email.html" class="">Read
                                                    Email</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="bookmark" class="nav-icon"></span>
                                            <span class="menu-text">Note</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user" class="nav-icon"></span>
                                            <span class="menu-text">Profile</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="profile.html" class="">Profile</a>
                                            </li>
                                            <li>
                                                <a href="profile-setting.html" class="">Profile Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user-check" class="nav-icon"></span>
                                            <span class="menu-text">Contact</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="contact-1.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a class="" href="contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="activity" class="nav-icon"></span>
                                            <span class="menu-text">To-Do</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="kanban.html" class="">
                                            <span data-feather="columns" class="nav-icon"></span>
                                            <span class="menu-text">Kanban Board</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="repeat" class="nav-icon"></span>
                                            <span class="menu-text">Import & Export</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="import.html">Import</a>
                                            </li>
                                            <li>
                                                <a class="" href="export.html">Export</a>
                                            </li>
                                            <li>
                                                <a class="" href="export-selected.html">Export Selected
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="file-manager.html" class="">
                                            <span data-feather="file" class="nav-icon"></span>
                                            <span class="menu-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="task-app.html" class="">
                                            <span data-feather="clipboard" class="nav-icon"></span>
                                            <span class="menu-text">Task App</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>





                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Pages</a>
                                <ul class="megaMenu-wrapper megaMenu-small">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="projects.html" class="">Project</a>
                                            </li>
                                            <li>
                                                <a href="application-ui.html" class="">Project Details</a>
                                            </li>
                                            <li>
                                                <a href="create.html" class="">Create
                                                    Project</a>
                                            </li>
                                            <li>
                                                <a href="users-card.html" class="">Team</a>
                                            </li>
                                            <li>
                                                <a href="users-card2.html" class="">Users</a>
                                            </li>
                                            <li>
                                                <a href="user-info.html" class="">Users
                                                    Info</a>
                                            </li>
                                            <li>
                                                <a href="users-list.html" class="">Users
                                                    List</a>
                                            </li>
                                            <li>
                                                <a href="users-group.html" class="">Users
                                                    Group</a>
                                            </li>
                                            <li>
                                                <a href="banner.html" class="">
                                                    <span class="menu-text">Banners</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="testimonial.html" class="">
                                                    <span class="menu-text">Testimonial</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="support.html" class="">
                                                    <span class="menu-text">Support Center</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dynamic-table.html" class="">
                                                    <span class="menu-text">Dynamic Table</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="users-datatable.html" class="">Users
                                                    Table</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html" class="">Gallery 1</a>
                                            </li>
                                            <li>
                                                <a href="gallery2.html" class="">Gallery 2</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html" class="">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="faq.html" class="">FAQ's</a>
                                            </li>
                                            <li>
                                                <a href="search.html" class="">Search
                                                    Results</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">Coming
                                                    Soon</a>
                                            </li>
                                            <li>
                                                <a href="404.html" class="">404</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">
                                                    <span class="menu-text">Maintenance</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="">
                                                    <span class="menu-text">Log In</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html" class="">
                                                    <span class="menu-text">Sign Up</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blank.html" class="">
                                                    <span class="menu-text">Blank</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Components</a>
                                <ul class="megaMenu-wrapper megaMenu-wide">
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="alert.html">Alert</a>
                                            </li>
                                            <li>
                                                <a class="" href="avatar.html">Avatar</a>
                                            </li>
                                            <li>
                                                <a class="" href="badge.html">Badge</a>
                                            </li>
                                            <li>
                                                <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                            </li>
                                            <li>
                                                <a class="" href="buttons.html">Button</a>
                                            </li>
                                            <li>
                                                <a class="" href="cards.html">Cards</a>
                                            </li>
                                            <li>
                                                <a class="" href="carousel.html">Carousel</a>
                                            </li>
                                            <li>
                                                <a class="" href="checkbox.html">Checkbox</a>
                                            </li>
                                            <li>
                                                <a class="" href="collapse.html">Collapse</a>
                                            </li>
                                            <li>
                                                <a class="" href="comments.html">Comments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="dashboard-base.html">Dashboard
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="date-picker.html">DatePicker</a>
                                            </li>
                                            <li>
                                                <a class="" href="drawer.html">Drawer</a>
                                            </li>
                                            <li>
                                                <a class="" href="drag-drop.html">Drag &
                                                    Drop</a>
                                            </li>
                                            <li>
                                                <a class="" href="dropdown.html">Dropdown</a>
                                            </li>
                                            <li>
                                                <a class="" href="empty.html">Empty</a>
                                            </li>
                                            <li>
                                                <a class="" href="input.html">Input</a>
                                            </li>
                                            <li>
                                                <a class="" href="list.html">List</a>
                                            </li>
                                            <li>
                                                <a class="" href="menu.html">Menu</a>
                                            </li>
                                            <li>
                                                <a class="" href="message.html">Message</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="modal.html">Modals</a>
                                            </li>
                                            <li>
                                                <a class="" href="notifications.html">Notification</a>
                                            </li>
                                            <li>
                                                <a class="" href="page-header.html">Page
                                                    Headers</a>
                                            </li>
                                            <li>
                                                <a class="" href="pagination.html">Paginations</a>
                                            </li>
                                            <li>
                                                <a class="" href="progressbar.html">Progress</a>
                                            </li>
                                            <li>
                                                <a class="" href="radio.html">Radio</a>
                                            </li>
                                            <li>
                                                <a class="" href="rate.html">Rate</a>
                                            </li>
                                            <li>
                                                <a class="" href="result.html">Result</a>
                                            </li>
                                            <li>
                                                <a class="" href="select.html">Select</a>
                                            </li>
                                            <li>
                                                <a class="" href="skeleton.html">Skeleton</a>
                                            </li>
                                            <li>
                                                <a class="" href="time-picker.html">Timepicker</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="slider.html">Slider</a>
                                            </li>
                                            <li>
                                                <a class="" href="spin.html">Spinner</a>
                                            </li>
                                            <li>
                                                <a class="" href="statistics.html">Statistic</a>
                                            </li>
                                            <li>
                                                <a class="" href="steps.html">Steps</a>
                                            </li>
                                            <li>
                                                <a class="" href="switch.html">Switch</a>
                                            </li>
                                            <li>
                                                <a class="" href="tab.html">Tabs</a>
                                            </li>
                                            <li>
                                                <a class="" href="tag.html">Tags</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-2.html">Timeline
                                                    2</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-3.html">Timeline
                                                    3</a>
                                            </li>
                                            <li>
                                                <a class="" href="uploads.html">Upload</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Features</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="editors.html" class="">
                                            <span data-feather="edit" class="nav-icon"></span>
                                            <span class="menu-text">Editors</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="grid" class="nav-icon"></span>
                                            <span class="menu-text">Icons</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="feather.html" class="">Feather icons
                                                    (svg)</a>
                                            </li>
                                            <li>
                                                <a href="fontawesome.html" class="">Font
                                                    Awesome</a>
                                            </li>
                                            <li>
                                                <a href="lineawesome.html" class="">Line
                                                    Awesome</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="bar-chart-2" class="nav-icon"></span>
                                            <span class="menu-text">Charts</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="charts.html">Chart JS</a>
                                            </li>
                                            <li>
                                                <a class="" href="google-chart.html">Google
                                                    Charts</a>
                                            </li>
                                            <li>
                                                <a class="" href="peity-chart.html">Peity
                                                    Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="disc" class="nav-icon"></span>
                                            <span class="menu-text">Froms</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="form.html">Basics</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-layouts.html">Layouts</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-elements.html">Elements</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-components.html">Components</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-validations.html">Validations</a>
                                            </li>
                                        </ul>
                                    </li>



                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="map" class="nav-icon"></span>
                                            <span class="menu-text">Maps</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="google-map.html" class="">Google
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="leaflet-map.html" class="">Leaflet
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="vector-map.html" class="">Vector
                                                    Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="server" class="nav-icon"></span>
                                            <span class="menu-text">Widget</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="widget-charts.html">Chart</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-card.html">Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="square" class="nav-icon"></span>
                                            <span class="menu-text">Wizards</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="checkout-wizard6.html" class="">Wizard
                                                    1</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard7.html" class="">Wizard
                                                    2</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard8.html" class="">Wizard
                                                    3</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard9.html" class="">Wizard
                                                    4</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard10.html" class="">Wizard
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="book" class="nav-icon"></span>
                                            <span class="menu-text">Knowledge Base</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="knowledgebase.html">Knowledge
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="knowledgebase-2.html">All
                                                    Article</a>
                                            </li>

                                            <li>
                                                <a class="" href="knowledgebase-3.html">Single Article</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
                    <li class="has-child open">
                        @role('administrator')
                            <a href="{{ route('administrator') }}" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                                <span class="toggle-icon"></span>
                            </a>
                        @endrole


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
                                    <a class="" href="">Uploaded Today</a>
                                </li>
                                <li>
                                    <a class="" href="">Declined Cars</a>
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
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="folder" class="nav-icon"></span>
                                <span class="menu-text">Users</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="" class="">Add User</a>
                                </li>
                                <li>
                                    <a href="" class="">Users Grid</a>
                                </li>
                                <li>
                                    <a href="" class="">Users List</a>
                                </li>
                                <li>
                                    <a href="" class="">Blocked Users</a>
                                </li>

                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="user-check" class="nav-icon"></span>
                                <span class="menu-text">Contact</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="">Car Sellers</a>
                                </li>
                                <li>
                                    <a class="" href="">Winning Bidders</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="" class="">
                                <span data-feather="clock" class="nav-icon"></span>
                                <span class="menu-text">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="">
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
                                    <a href="{{ route('user.allbids')}}" class="">All My Bids</a>
                                </li>
                                <li>
                                    <a href="" class="">Winning Bids</a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="user-check" class="nav-icon"></span>
                                <span class="menu-text">Contact</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="">Car Sellers</a>
                                </li>
                                <li>
                                    <a class="" href="">Winning Bid Car Sellers</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="" class="">
                                <span data-feather="clock" class="nav-icon"></span>
                                <span class="menu-text">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="">
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
                </ul>
            </div>
        </aside>

        <div class="contents">

            <div class="container-fluid" >
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
    <script src="{{ asset('dashboard/js/plugins.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/script.min.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <!-- endinject-->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
    @livewireScripts

</body>

</html>
