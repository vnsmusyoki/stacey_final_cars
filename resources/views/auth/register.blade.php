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

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left position-relative">
                            <div class="signUP-overlay">
                           
                            </div>
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="{{ url('/') }}">a</a>
                                    <span class="text-dark">Cars</span>
                                </div>
                                <h1>Provide the following details to get started.</h1>
                            </div>
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="{{ asset('dashboard/img/svg/signupIllustration.svg') }}"
                                    alt="img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right  p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="color-primary">
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
                                                <form method="POST"
                                                    action="{{ url('create-account') }}"class="edit-profile__body">
                                                    @csrf
                                                    <div class="form-group mb-20">
                                                        <label for="name">First Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="John" value="{{ old('first_name') }}">
                                                        @error('first_name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="name">Other Name(s)</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="other_names" placeholder="Doe" value="{{  old('other_names') }}">
                                                        @error('other_names')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="username">username</label>
                                                        <input type="text" class="form-control" id="username"
                                                            name="username" placeholder="Username" value="{{  old('username') }}">
                                                        @error('username')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="username">Phone Number</label>
                                                        <input type="text" class="form-control" id="username"
                                                            name="phone_number" placeholder="Username" value="{{ old('phone_number') }}">
                                                        @error('phone_number')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="email">Email Adress</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" placeholder="name@example.com" value="{{  old('email') }}">
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">password</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" type="password"
                                                                class="form-control" name="password" >
                                                            <span
                                                                class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                        </div>
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">Confirm password</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" type="password"
                                                                class="form-control" name="password_confirmation">
                                                            <span
                                                                class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                        </div>
                                                        @error('password_confirmation')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn"
                                                            type="submit">
                                                            Create Account
                                                        </button>
                                                    </div>

                                                </form>
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



    <!-- inject:js-->

    <script src="{{ asset('dashboard/js/plugins.min.js') }}"></script>

    <script src="{{ asset('dashboard/js/script.min.js') }}"></script>

    <!-- endinject-->
</body>

</html>
