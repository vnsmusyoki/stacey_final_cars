
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register New Account</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('dashboard/css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left position-relative">
                            <div class="signUP-overlay">
                                <img class="svg signupTop" src="img/svg/signuptop.svg" alt="img" />
                                <img class="svg signupBottom" src="img/svg/signupbottom.svg" alt="img" />
                            </div>
                            <div class="signUP-admin-left__content">
                                <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">a</a>
                                    <span class="text-dark">admin</span>
                                </div>
                                <h1>Bootstrap 4 React Web Application</h1>
                            </div>
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="img/svg/signupIllustration.svg" alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right  p-md-40 p-10">
                            <div class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="login.html" class="color-primary">
                                        Sign in
                                    </a>
                                </p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-10 col-md-12 ">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Sign up to <span class="color-primary">Admin</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="edit-profile__body">
                                                    <div class="form-group mb-20">
                                                        <label for="name">name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="username">username</label>
                                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="email">Email Adress</label>
                                                        <input type="text" class="form-control" id="email" placeholder="name@example.com">
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">password</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" type="password" class="form-control" name="password" value="secret">
                                                            <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                        </div>
                                                    </div>
                                                    <div class="signUp-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox" id="check-1">
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Creating an account means you’re okay
                                                                    with our <a href="#" class="color-secondary">Terms of
                                                                        Service</a> and <a href="#" class="color-secondary">Privacy
                                                                        Policy</a>
                                                                    my preference</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn">
                                                            Create Account
                                                        </button>
                                                    </div>
                                                    <p class="social-connector text-center mb-md-25 mb-15  mt-md-30 mt-20 "><span>Or</span></p>
                                                    <div class="button-group d-flex align-items-center justify-content-md-start justify-content-center">
                                                        <ul class="signUp-socialBtn">
                                                            <li>
                                                                <button class="btn text-dark px-30"><img class="svg" src="img/svg/google.svg" alt="img" /> Sign up with
                                                                    Google</button>
                                                            </li>
                                                            <li>
                                                                <button class=" radius-md wh-48 content-center"><img class="svg" src="img/svg/facebook.svg" alt="img" /></button>
                                                            </li>
                                                            <li>
                                                                <button class="radius-md wh-48 content-center"><img class="svg" src="img/svg/twitter.svg" alt="img" /></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <a href="#" class="customizer-trigger">
        <span data-feather="settings"></span></a>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <span data-feather="x"></span></a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="../ltr" class="">
                                <img src="img/ltr.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="../rtl" class="active">
                                <img src="img/rtl.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="active">
                                <img src="img/light.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark">
                                <img src="img/dark.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="img/side.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="img/top.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->
            </div>
        </div>
    </div>

    <!-- inject:js-->

    <script src="{{ asset('dashboard/js/plugins.min.js') }}"></script>

    <script src="{{ asset('dashboard/js/script.min.js') }}"></script>

    <!-- endinject-->
</body>

</html>
