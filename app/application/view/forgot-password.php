<?php include('Layouts/header.php');?>

<body style="<?php $this->asset('image/bg.jpg') ?>">
<link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php $this->asset('css/loginpagestyle.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-page-card">
            <div class="row no-gutters">
                <div class="col-md-5-login">
                    <img src="<?php $this->asset('image/login/people-watching-video-on-smartphon-gettyimages-youtube.jpg') ?>"
                         alt="login-page" class="login-page-card-img">
                </div>

                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="<?php $this->asset('image/login/logo.png') ?>" alt="logo" class="logo">
                        </div>
                        <p class="login-page-card-description">بازیابی رمز عبور</p>
                        <p class="login-page-card-header-text">پس از وارد کردن ایمیل خود لینک تغییر رمز عبور به ایمیل
                            شما ارسال می شود.</p>

                        <form action="<?php $this->url('User/forgetPassword'); ?>" method="post">

                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <div class="inner-addon right-addon">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="email" id="eamil" class="form-control"
                                           placeholder="ایمیل">
                                </div>

                            </div>


                            <input name="login-page" id="login-page" class="btn btn-block login-page-btn mb-4"
                                   type="submit" value="ارسال">

                        </form>

                        <p class="login-page-card-footer-text"> حساب کاربری ندارید؟<a
                                    href="<?php $this->url('User/register'); ?>" class="register">ثبت نام در سایت</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>


</html>