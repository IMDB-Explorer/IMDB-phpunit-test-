
<link rel="stylesheet" href="<?php $this->asset('css/loginpagestyle.css') ?>">
<?php include('Layouts/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="hero user-hero">
    <div class="container bodydirection">
        <div class="row">
            <div class="col-md-12 col-md-12-c">
                <div class="hero-ct">
                    <h1>دنیای فیلم</h1>
                    <ul class="breadcumb">
                        <li ><a href="<?php $this->url('Home/home'); ?>">خانه</a></li>
                        <li class="active margin-change-password-li"> <span class="ion-ios-arrow-left"></span>پروفایل</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="buster-light">
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-3 col-md-3-c col-sm-12 col-xs-12 ">
                    <div class="user-information">
                        <div class="user-img">
                            <a href="#"><img class="profile-height" src=<?php $this->asset('image/uploads/user-img.png') ?> alt=""><br></a>
                            <a class="redbtn"><?php echo $_SESSION['userName']; ?></a>
                        </div>
                        <div class="user-fav">
                            <p>حساب کاربری</p>
                            <ul>
                                <li><a href="<?php $this->url('Home/home'); ?>">پروفایل</a></li>
                                <li><a href="<?php $this->url('UserProfile/watchlist'); ?>">فیلم های مورد علاقه</a></li>
                                <li class="active"><a href="<?php $this->url('User/changePassword'); ?>">تغییر رمز</a></li>
                                <li><a href="<?php $this->url('User/logout'); ?>">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-8-c col-sm-12 col-xs-12 ">
                    <div class="form-style-1 user-pro  margin-change-password" action="#">
                        <form action="<?php $this->url('User/changeUserPassword'); ?>"  method="post" class="password">
                            <div class="margin-change-password-h3">
                                <h3>تغییر رمز عبور</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-md-12-c form-it input-icons inner-addon right-addon">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="currentPassword" id="currentPassword" placeholder="رمزعبور فعلی">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-md-6-c form-it input-icons inner-addon right-addon">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="newPassword" id="newPassword" placeholder="رمز عبور جدید">
                                </div>
                                <div class="col-md-6 col-md-6-c form-it input-icons inner-addon right-addon">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="repeatNewPassword" id="repeatNewPassword" placeholder="تکرار رمز عبور جدید">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <input class="submit" name="login-page" id="login-page" type="submit" value="ثبت رمز عبور">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include('Layouts/footer.php'); ?>