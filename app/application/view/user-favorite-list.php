<link rel="stylesheet" href="<?php $this->asset('css/loginpagestyle.css') ?>">
<?php include('Layouts/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="hero user-hero">
    <div class="container bodydirection">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>دنیای فیلم</h1>
                    <ul class="breadcumb">
                        <li><a href="<?php $this->url('Home/home'); ?>">خانه</a></li>
                        <li class="active margin-change-password-li"><span class="ion-ios-arrow-left"></span>پروفایل
                        </li>
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
                            <a href="#" class="redbtn">تغییر پروفایل</a>
                        </div>
                        <div class="user-fav">
                            <p>حساب کاربری</p>
                            <ul>
                                <li><a href="<?php $this->url('UserProfile/profile'); ?>">پروفایل</a></li>
                                <li class="active"><a href="<?php $this->url('UserProfile/watchlist'); ?>">فیلم های مورد
                                        علاقه</a></li>
                                <li><a href="<?php $this->url('User/changePassword'); ?>">تغییر رمز</a></li>
                                <li><a href="<?php $this->url('User/logout'); ?>">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-9-c col-sm-12 col-xs-12 ">
                    <div class="topbar-filter user">
                        <p> تعداد فیلم پیدا شده : <span><?php echo sizeof($watchlist); ?></span></p>
                    </div>
                    <div class="flex-wrap-movielist grid-fav">

                        <?php foreach ($watchlist

                                       as $movie) { ?>
                            <div class="movie-item-style-2 movie-item-style-1 style-3 movie-item-style-1-favrite">
                                <img src="<?php echo $movie['picture']; ?>" alt="">
                                <div class="hvr-inner">
                                    <a href="<?php $this->url('Movie/movie/' . $movie['id']); ?>">بیشتر</a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6>
                                        <a href="<?php $this->url('Movie/movie/' . $movie['id']); ?>"><?php echo $movie['movie_name']; ?></a>
                                    </h6>
                                    <p class="rate"><i
                                                class="ion-android-star"></i><span><?php echo $movie['score']; ?></span>
                                        /۱۰
                                    </p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $count; $i++) { ?>
                            <li><a href="<?php $this->url('UserProfile/watchlist/' . $i); ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('Layouts/footer.php'); ?>