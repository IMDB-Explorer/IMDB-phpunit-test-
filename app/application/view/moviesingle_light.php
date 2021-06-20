<?php include('Layouts/header.php'); ?>

<script src="<?php $this->asset('js/alaki.js') ?>"></script>

<body class="white">
<!-- Cooment popup -->
<div class="login-wrapper bodydirection" id="comment-content">
    <div class="login-content">
        <!--        <a href="#" class="close">x</a>-->
        <h3>نوشتن نظرسنجی</h3>
        <form method="post" action="<?php $this->url('Movie/addComment/' . $movie['id']); ?>">
            <div class="row">
                <!-- textarea -->
                <label for="username-2">
                    متن نظرسنجی
                    <input type="text" name="title" id="title" placeholder="موضوع نظرسنجی" required="required"
                           style="height: 50px;"/>
                    <textarea type="text" name="text" id="text"
                              placeholder="لطفا نظر خود را در این قسمت وارد کنید" required="required"></textarea>
                </label>
                <!-- /textarea -->
            </div>
            <div class="row">
                <button type="submit">ثبت‌ نظر</button>
            </div>
        </form>
    </div>
</div>
<!--  END Cooment popup -->
<div class="buster-light">
    <div class="hero mv-single-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1> movie listing - list</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie-single movie_single">
        <div class="container bodydirection">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <div class="social-btn">
                            <h1 class="bd-hd"><?php echo $movie['movie_name']; ?> </h1>
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span><?php echo $movie['score']; ?></span> /10<br>
                                    <!-- <span class="rv">???</span> -->
                                </p>
                            </div>
                            <div class="rate-star">
                                <p> به فیلم امتیاز بده:</p>
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                            <div><a href="<?php $this->url('Movie/add2WatchList/' . $movie['id']); ?>"
                                    class="parent-btn"
                                    onmouseover="toggleBg(this,'red')" onmouseout="toggleBg(this)"><i
                                            class="ion-heart"></i> افزودن به لیست علاقه مندی ها</a></div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">معرفی فیلم</a></li>
                                    <!-- <li><a href="#cast">  عوامل فیلم </a></li> -->
                                    <li><a href="#reviews">نظرات</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>کارگردان: </h6>
                                                    <p>
                                                        <a href="#"><?php echo $movie['first_name'] . " " . $movie['last_name']; ?></a>
                                                    </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>نویسنده: </h6>
                                                    <p><a href="#"><?php echo $movie['author']; ?></a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>ستارگان: </h6>

                                                    <?php foreach ($movieStars as $movieStar) { ?>
                                                        <p><a href="#">
                                                                <?php echo $movieStar['first_name'] . " " . $movieStar['last_name']; ?>
                                                            </a></p>

                                                    <?php } ?>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>ژانر:</h6>
                                                    <?php foreach ($movieGenres as $movieGenre) { ?>

                                                        <p><a href="#">
                                                                <?php echo $movieGenre['genre']; ?>

                                                            </a></p>

                                                    <?php } ?>

                                                </div>
                                                <div class="sb-it">
                                                    <h6>جوایز:</h6>
                                                    <p> <?php echo $movie['rewards']; ?> </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>تاریخ انتشار:</h6>
                                                    <p><?php echo $movie['release_date']; ?></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>زمان فیلم:</h6>
                                                    <p><?php echo $movie['duration']; ?> دقیقه </p>
                                                </div>

                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p> <?php echo $movie['summary']; ?></p>
                                                <div class="title-hd-sm">
                                                    <h4>فیلم ها و عکس ها</h4>

                                                </div>
                                                <div class="mvsingle-item ov-item">
                                                    <?php foreach ($moviePics as $moviePic) { ?>
                                                        <a class="img-lightbox"
                                                           data-fancybox-group="gallery"
                                                           href="<?php echo $moviePic['picture']; ?>"><img
                                                                    class="img-actor-size"
                                                                    src="<?php echo $moviePic['picture']; ?>"
                                                                    alt=""></a>
                                                    <?php } ?>
                                                    <div class="vd-it">
                                                        <img class="vd-img"
                                                             src="<?php $this->asset('image/uploads/image4.png') ?>"
                                                             alt="">
                                                        <a class="fancybox-media hvr-grow"
                                                           href="https://www.youtube.com/embed/o-0hcF97wy0"><img
                                                                    src="<?php $this->asset('image/uploads/play-vd.png') ?>"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>بازیگران</h4>

                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    <?php foreach ($movieStars as $movieStar) { ?>
                                                        <div class="cast-it">
                                                            <div class="cast-left">
                                                                <img class="mv-actor-size-samll"
                                                                     src="<?php echo $movieStar['picture']; ?>"
                                                                     alt="">
                                                                <a href="<?php $this->url('Person/actor/' . $movieStar['id']); ?>"><?php echo $movieStar['first_name'] . " " . $movieStar['last_name']; ?></a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="reviews" class="tab review">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">

                                                    <h2><?php echo $movie['movie_name']; ?></h2>
                                                </div>
                                                <?php if (isset($_SESSION['userId']) and $_SESSION['loggedIn'] == true) { ?>

                                                    <li class="btn commentLink">
                                                        <button type="button" class="redbtn">نوشتن نظرسنجی</button>
                                                    </li>
                                                <?php } else { ?>

                                                    <button type="button" onclick="myFunction()" class="redbtn" >نوشتن نظرسنجی</button>
                                                <?php } ?>
                                            </div>
                                            <div class="alert-info" id="myDIV"><p>جهت ثبت نظر باید در سایت عضو شوید و یا
                                                    وارد سایت شده باشید .</p></div>
                                            <div class="mv-user-review-item">
                                                <?php foreach ($movieComments as $movieComment) { ?>
                                                    <div class="user-infor ">

                                                        <img src="<?php $this->asset('image/avatar.png') ?>" alt="">
                                                        <div style="margin-right: 20px;">
                                                            <h3> <?php echo $movieComment['subject']; ?></h3>
                                                            <p class="time">
                                                                <?php echo $movieComment['created_at'] ?> <a
                                                                        href="#"> <?php echo $movieComment['username']; ?> </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p> <?php echo $movieComment['text']; ?> </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="<?php echo $movie['picture']; ?>" alt="">
                        <div class="movie-btn">
                            <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> تماشای تریلر </a>
                                </div>
                                <div><a href="<?php echo $movie['trailer']; ?>"
                                        class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('Layouts/footer.php'); ?>
