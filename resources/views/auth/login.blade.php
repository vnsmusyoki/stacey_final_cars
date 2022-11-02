<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('dashboard/css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left signIn-admin-left position-relative">
                            <div class="signUP-overlay">
                                {{-- <img class="svg signupTop" src="{{ asset('dashboard/img/svg/signuptop.svg') }}"
                                    alt="img" />
                                <img class="svg signupBottom" src="{{ asset('dashboard/img/svg/signupbottom.svg') }}"
                                    alt="img" /> --}}
                            </div><!-- End: .signUP-overlay  -->
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="{{ url('/') }}">a</a>
                                    <span class="text-dark">Cars</span>
                                </div>
                                <h1>Welcome Back</h1>
                            </div><!-- End: .signUP-admin-left__content  -->
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="{{ asset('dashboard/img/svg/signupIllustration.svg') }}"
                                    alt="img" />
                            </div><!-- End: .signUP-admin-left__img  -->
                        </div><!-- End: .signUP-admin-left  -->
                    </div><!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="color-primary">
                                        Sign up
                                    </a>
                                </p>
                            </div><!-- End: .signUp-topbar  -->
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Sign up to <span class="color-primary">Our Website</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('login') }}"
                                                    class="edit-profile__body" autocomplete="off">
                                                    @csrf
                                                    @if (\Session::has('success'))
                                                        <div class="alert alert-success">
                                                            <ul>
                                                                <li>{!! \Session::get('success') !!}</li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="form-group mb-20">
                                                        <label for="username">Email Address</label>
                                                        <input type="text" class="form-control " id="username"
                                                            placeholder="Your registered email address" name="email"
                                                            value="{{ old('email') }}">
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">Password</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" type="password"
                                                                class="form-control" name="password">
                                                            <div
                                                                class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2">
                                                            </div>

                                                        </div>
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="signUp-condition signIn-condition">
                                                        <!-- <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox" id="check-1">
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Keep me logged in</span>
                                                            </label>
                                                        </div> -->

                                                        <!-- @if (Route::has('password.request'))
                                                            <a class="btn btn-link"
                                                                href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif -->
                                                    </div>
                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn "
                                                            type="submit">
                                                            sign in
                                                        </button>
                                                    </div>


                                                </form>
                                            </div><!-- End: .card-body -->
                                        </div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>


    <!-- inject:js-->

    <script src="{{ asset('dashboard/js/plugins.min.js') }}js/plugins.min.js"></script>

    <script src="{{ asset('dashboard/js/script.min.js') }}"></script>

    <!-- endinject-->
</body>

</html>
