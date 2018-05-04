<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            {{ env('APP_NAME') }}
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="favicon.png" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper">
                                <div class="m-login__logo">
                                    <a href="#">
                                        <img src="favicon.png">
                                    </a>
                                </div>
                                <div class="m-login__signin">
                                    <form class="m-login__form m-form">
                                        {{ csrf_field() }}
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="row m-login__form-sub">
                                            <div class="col m--align-left">
                                                <label class="m-checkbox m-checkbox--focus">
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col m--align-right">
                                                <a href="/password/remind" id="m_login_forget_password" class="m-link">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Sign In 
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="m-login__signup">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Sign Up
                                        </h3>
                                        <div class="m-login__desc">
                                            Enter your details to create your account:
                                        </div>
                                    </div>
                                    <form class="m-login__form m-form" method="POST" action="/register">
                                        {{ csrf_field() }}
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
                                        </div>                                       
                                        <div class="m-login__form-action">
                                            <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Sign Up
                                            </button>
                                            <button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="m-login__forget-password">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Forgotten Password ?
                                        </h3>
                                        <div class="m-login__desc">
                                            Enter your email to reset your password:
                                        </div>
                                    </div>
                                    <form class="m-login__form m-form" method="POST" action="/password/remind">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Request
                                            </button>
                                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="m-stack__item m-stack__item--center">
                            <div class="m-login__account">
                                <span class="m-login__account-msg">
                                    Don't have an account yet ?
                                </span>
                                &nbsp;&nbsp;
                                <a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content" style="background-image: url(assets/app/media/img//bg/bg-4.jpg)">
                    <div class="m-grid__item m-grid__item--middle">
                        <h3 class="m-login__welcome">
                            Join Our Church
                        </h3>
                        <p class="m-login__msg">
                            <i>For God so loved the world that he gave his one and only Son, 
                            <br>
                            that whoever believes in him shall not perish but have eternal life.</i>
                            <br>
                            <small class="pull-right"><i>John 3:16</i></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->        
        <!--begin::Base Scripts -->
        <script src="assets/vendors/base/vendors.bundle.js?v1" type="text/javascript"></script>
        <script src="assets/demo/default/base/scripts.bundle.js?v1" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        <script src="assets/snippets/pages/user/login.js?v4" type="text/javascript"></script>
        <!--end::Page Snippets -->
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
    <!-- end::Body -->
</html>