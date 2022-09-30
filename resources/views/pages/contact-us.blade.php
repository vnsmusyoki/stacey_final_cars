<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SmartMart Motors - Online cars Auctoning System</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="CarLeader - Responsive HTML5 Template">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div class="tt-colorswatch">
        <div class="tt-colorswatch-options">
            <a href="#" class="colorswatch1 active js-swatch-color"></a>
            <a href="#" class="colorswatch2 js-swatch-color" data-color="1"></a>
            <a href="#" class="colorswatch3 js-swatch-color" data-color="2"></a>
            <a href="#" class="colorswatch4 js-swatch-color" data-color="3"></a>
            <a href="#" class="colorswatch5 js-swatch-color" data-color="4"></a>
            <a href="#" class="colorswatch6 js-swatch-color" data-color="5"></a>
        </div>
        <div class="tt-colorswatch-btn js-colorswatch">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="347.523px"
                height="347.523px" viewBox="0 0 347.523 347.523" style="enable-background:new 0 0 347.523 347.523;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M108.674,196.125c-2.857-0.402-5.777-0.592-8.746-0.534c-14.267,0.278-36.342,6.092-60.493,32.207
						c-19.171,20.729-19.954,42.635-20.644,61.961c-0.66,18.474-1.181,33.065-16.507,43.727c-1.506,1.049-2.318,2.837-2.113,4.661
						c0.128,1.147,0.645,2.191,1.434,2.98c0.466,0.466,1.026,0.843,1.658,1.099c28.523,11.553,77.316,5.895,117.044-33.833
						c18.043-18.044,28.812-37.145,31.14-55.233c0.607-4.719,0.618-9.323,0.091-13.763L108.674,196.125z M100.915,229.382
						c-1.553,2.174-3.859,3.612-6.494,4.052c-19.209,3.202-25.884,15.953-26.159,16.494c-1.627,3.387-5.167,5.611-8.989,5.611
						c-0.337,0-0.676-0.017-1.015-0.052c-1.149-0.117-2.264-0.432-3.313-0.936c-4.97-2.391-7.069-8.376-4.681-13.347
						c0.442-0.918,11.153-22.546,40.869-27.5c0.546-0.09,1.1-0.136,1.647-0.136c4.908,0,9.055,3.516,9.861,8.357
						C103.08,224.559,102.467,227.207,100.915,229.382z" />
                        <path
                            d="M340.587,6.796c-8.615-8.614-22.425-9.1-31.624-1.112c-5.782,5.021-141.818,123.166-160.166,141.513
						c-9.175,9.175-20.946,24.898-31.124,39.428l42.864,43.271c14.546-10.18,30.345-22.003,39.65-31.308
						C218.749,180.024,336.69,44.193,341.703,38.42C349.688,29.22,349.201,15.41,340.587,6.796z" />
                    </g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </div>
    </div>
    <!-- tt-mobile menu -->
    <nav class="panel-menu" id="mobile-menu">
        <ul>

        </ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header" class="tt-header-01">

        <div class="header-holder bg-dark">
            <div class="container">
                <div class="row">
                    <!--logo-->
                    <div class="col-logo">
                        <a class="tt-logo" href="index.html">
                            <img class="tt-logo-light svg-img" src="images/logo.svg" alt="">
                            <img class="tt-logo-dark svg-img" src="images/logo-dark.svg" alt="">
                        </a>
                    </div>
                    <!--desctope-menu-->
                    <div class="col-menu col-auto mr-auto ">
                        <div class="tt-desctop-menu" id="tt-desctop-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">HOME</a>

                                    </li>
                                    <li  >
                                        <a href="{{ url('all-cars') }}">ALL CARS</a>

                                    </li>


                                    <li><a href="{{ url('contact-us') }}">CONTACTS</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--btn toggle modal-->
                    <div class="col-btn-toggle-modal col-auto">
                        <a class="btn btn-toggle-modal" href="{{ route('login') }}"><i class="icon-addcar"></i><span
                                class="	tt-text">My Account</span>
                        </a>
                    </div>
                    <!--btn toggle mobile menu-->
                    <div class="col-menu-toggle col-auto">
                        <a href="#" class="tt-menu-toggle icon-menu"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- stuck nav -->
        <div id="tt-stuck">
            <div class="container-fluid">
                <div class="tt-stuck-row">
                    @if (Session::has('error'))
                        <div class="alert alert-error">
                            <ul>
                                <li>{{ Session::get('error') }}</li>
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ Session::get('success') }}</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <div class="tt-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div id="tt-pageContent">
        <div class="container-indent-04">
            <div class="container">
                <div class="tt-block-title tt-sub-pages">
                    <h1 class="tt-title">Contacts</h1>
                    <div class="tt-description">let's get in touch</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box-info box-info-indent">
                            <h3 class="tt-title">Contact Information</h3>
                            <div class="tt-item-layout">
                                <div class="tt-item">
                                    <div class="tt-col">
                                        <i class="icon-149984"></i>
                                        Address:
                                    </div>
                                    <div class="tt-col">
                                        3261 Anmoore Road, Brooklyn, Nairobi
                                    </div>
                                </div>
                                <div class="tt-item">
                                    <div class="tt-col">
                                        <i class="icon-15874"></i>
                                        Phone:
                                    </div>
                                    <div class="tt-col">
                                        +254 794 107 848
                                    </div>
                                </div>
                                <div class="tt-item">
                                    <div class="tt-col">
                                        <i class="icon-mail"></i>
                                        E-mail:
                                    </div>
                                    <div class="tt-col">
                                        smartmartcars@email.com
                                    </div>
                                </div>
                                <div class="tt-item">
                                    <div class="tt-col">
                                        <i class="icon-icon"></i>
                                        Working time:
                                    </div>
                                    <div class="tt-col">
                                        <strong>Sales Department</strong>
                                        <p>
                                            Mon-Sat: 8:00am - 5:00pm<br>Sunday is closed
                                        </p>
                                        <strong>Service Department</strong>
                                        <p>
                                            Mon-Sat: 8:00am - 5:00pm<br>Sunday is closed
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="tt-title">Stay Connected</h3>
                            <ul class="tt-social-icon">
                                <li><a href="#" class="icon-226234"></a></li>
                                <li><a href="#" class="icon-8800"></a></li>
                                <li><a href="#" class="icon-733613"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider divider--lg visible-xs"></div>
                    <div class="col-12 col-md-6">
                        <h6 class="tt-title-default">Get in touch</h6>
                        <p>
                            Smart Mart has a strong and committed sales staff with many years of experience satisfying our customers’ needs. Feel free to browse our massive inventory online, set up a test drive with a sales associate, or inquire about financing!
                        </p>
                        <form id="contactform" method="post" novalidate="novalidate" action="#" class="tt-form-default02 tt-form-review">
                            <div class="tt-form-aside">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Your name*">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail*">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message" id="textareaMessage" data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>
                                <button type="submit" class="btn btn-wide">LEAVE A MESSAGE</button>
                            </div>
                            <div class="tt-modal-message">Form sent successfully</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @include('pages.footer')
    <a href="#" id="ttBackToTop" class="tt-back-to-top">BACK TO TOP</a>

    <script src="{{ asset('external/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('external/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external/elevatezoom/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('external/slick/slick.min.js') }}"></script>
    <script src="{{ asset('external/panelmenu/panelmenu.js') }}"></script>
    <script src="{{ asset('external/sumoselect/jquery.sumoselect.min.js') }}"></script>
    <script src="{{ asset('external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('external/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('external/sticky/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- form validation and sending to mail -->
    <script src="{{ asset('external/form/jquery.form.js') }}"></script>
    <script src="{{ asset('external/form/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('external/form/jquery.form-init.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
