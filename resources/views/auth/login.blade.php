<!DOCTYPE html>
<html class="no-js" lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>
    <meta charset="utf-8">
    <title>پایان پی - ورود به پنل ادمین</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Ali Rahmani">
    <meta name="description" content="راهکار های نوین پرداخت پایان پی">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/dashboard/assets//images/favicon.ico">
    <!-- App css -->
    <link href="/dashboard/assets//css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/dashboard/assets//css/icons.css" rel="stylesheet" type="text/css">
    <link href="/dashboard/assets//css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="/dashboard/assets//css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="account-body accountbg">
<!-- Log In page -->
<div class="row vh-100">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg">
                <div class="card-body">
                    <div class="px-3">
                        <div class="auth-logo-box">
                            <a href="../analytics/analytics-index.html" class="logo logo-admin"><img src="/dashboard/assets//images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
                        </div>
                        <!--end auth-logo-box-->
                        <div class="text-center auth-logo-text">
                            <h4 class="mt-0 mb-3 mt-5">ورود به پنل ادمین پایان پی</h4>
                            <p class="text-muted mb-0">اطلاعات حساب کاربری خودرا جهت ورود به سیستم وارد نمایید:</p>
                        </div>
                        <!--end auth-logo-text-->
                            <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                <label for="username">آدرس ایمیل</label>
                                <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-user"></i> </span>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="مثال: Rahmani@p.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="userpassword">رمز عبور</label>
                                <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock"></i> </span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="رمز عبور">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--end form-group-->
                            <div class="form-group row mt-4">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-switch switch-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                        <label class="custom-control-label text-muted" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <!--end col-->
                                <!--end col-->
                            </div>
                            <!--end form-group-->
                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-round btn-block waves-effect waves-light iranyekan" type="submit">ورود به پنل ادمین <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end /div-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end auth-page-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<!-- End Log In page -->
<!-- jQuery  -->
<script src="/dashboard/assets//js/jquery.min.js"></script>
<script src="/dashboard/assets//js/bootstrap.bundle.min.js"></script>
<script src="/dashboard/assets//js/metisMenu.min.js"></script>
<script src="/dashboard/assets//js/waves.min.js"></script>
<script src="/dashboard/assets//js/jquery.slimscroll.min.js"></script>
<!-- App js -->
<script src="/dashboard/assets//js/app.js"></script>
</body>

</html>
