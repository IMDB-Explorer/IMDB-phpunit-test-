<?php include('Layouts/header.php'); ?>
<!-- index_light16:30-->

<div class="slider movie-items">
    <div class="container bodydirection">
        <div class="row">
            <div class="slick-multiItemSlider">
                <?php foreach ($rewardedMovies
                               as $rewardedMovie) { ?>
                    <div class="movie-item bodydirection">
                        <div class="mv-img mv-slider-size">
                            <a href="<?php $this->url('Movie/movie/' . $rewardedMovie['id']); ?>"><img
                                        src="<?php echo $rewardedMovie['picture']; ?>" alt="" width="285" height="437"></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="buster-light">
    <div class="movie-items">
        <div class="container ">
            <div class="row ipad-width">
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="celebrities bodydirection">
                            <h4 class="sb-title">بهترین هنرمندان</h4>
                            <?php foreach ($topActors

                                           as $actor) { ?>
                                <div class="celeb-item">
                                    <a href="#"><img class="mv-actor-size-samll" src="<?php echo $actor['picture']; ?>"
                                                     alt="" width="70"
                                                     height="70"></a>
                                    <div class="celeb-author">
                                        <h6><a
                                                    href="#"><?php echo $actor['first_name'] . " " . $actor['last_name']; ?></a>
                                        </h6>
                                        <span class="margin-right">بازیگر</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <form method="post" action="<?php $this->url('Home/vote'); ?>">
                        <div class="sidebar">
                            <div class="celebrities bodydirection">
                                <h4 class="sb-title"><?php echo $votes[0]['title']; ?></h4>
                                <div class="checkbox-item">
                                    <div class="bodycheckbox">
                                        <label>
                                            <input type="radio"
                                                   class="option-input radio" name="item1" id="item1"
                                                   value="<?php echo $votes[0]['candidate_id']; ?>"/>
                                            <?php echo $votes[0]['first_name'] . " " . $votes[0]['last_name']; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="checkbox-item">
                                    <div class="bodycheckbox">
                                        <label>
                                            <input type="radio" class="option-input radio" name="item2" id="item2"
                                                   value="<?php echo $votes[1]['candidate_id']; ?>"/>
                                            <?php echo $votes[1]['first_name'] . " " . $votes[1]['last_name']; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class=" checkbox-item">
                                    <div class="bodycheckbox">
                                        <label>
                                            <input type="radio" class="option-input radio" name="example3"
                                                   value="<?php echo $votes[2]['candidate_id']; ?>"/>
                                            <?php echo $votes[2]['first_name'] . " " . $votes[2]['last_name']; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="checkbox-item">
                                    <div class="bodycheckbox">
                                        <label>
                                            <input type="radio" class="option-input radio" name="example"
                                                   value="<?php echo $votes[3]['candidate_id']; ?>"/>
                                            <?php echo $votes[3]['first_name'] . " " . $votes[3]['last_name']; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['userId']) and $_SESSION['loggedIn'] == true) { ?>
                            <input type="submit" id="myBtn" class="submit" value="ثبت"></div>
                        <?php }else ?>
                        <input type="submit" id="myBtn" class="submit" value="ثبت" disabled>
                </div>
                <?php ?>
                </form>

            </div>
            <div class="col-md-8">
                <div class="title-hd bodydirection">
                    <h2>پر بیننده ترین</h2>
                    <a href="<?php $this->url('Home/popularMovies/'); ?>" class="viewall">مشاهده همه <i
                                class="ion-ios-arrow-left"></i> </a>
                </div>
                <div class="tabs">
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <div class="row ">
                                <div class="slick-multiItem  ">
                                    <?php foreach ($recentlyReleasedMovies as $recentlyReleasedMovie) { ?>
                                        <div class="slide-it">
                                            <div class="movie-item movie-slider-box ">
                                                <div class="mv-img mv-slider-size-samll">
                                                    <img src="<?php echo $recentlyReleasedMovie['picture']; ?>"
                                                         alt=""
                                                         width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="<?php $this->url('Movie/movie/' . $recentlyReleasedMovie['id']); ?>">
                                                        بیشتر </i> </a>
                                                </div>
                                                <div class="mv-item-infor paddig-text-top">
                                                    <h6>
                                                        <a class="color-text"
                                                           href="<?php $this->url('movie/movie/' . $recentlyReleasedMovie['id']); ?>"> <?php echo $recentlyReleasedMovie['movie_name'] ?> </a>
                                                    </h6>
                                                    <p class="rate  paddig-text rate-p"><i
                                                                class="ion-android-star  star-color"></i><span><?php echo $recentlyReleasedMovie['score'] ?></span>
                                                        /۱۰</p>
                                                </div>

                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-hd bodydirection">
                    <h2>بهترین هااز نظر کاریران</h2>
                    <a href="<?php $this->url('Home/recentlyReleasedMovies/'); ?>" class="viewall">مشاهده همه <i
                                class="ion-ios-arrow-left"></i> </a>
                </div>
                <div class="tabs">
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem  ">
                                    <?php foreach ($mostRatedMovies as $mostRatedMovie) { ?>
                                        <div class="slide-it">
                                            <div class="movie-item movie-slider-box ">
                                                <div class="mv-img mv-slider-size-samll">
                                                    <img src="<?php echo $mostRatedMovie['picture']; ?>"
                                                         alt=""
                                                         width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="<?php $this->url('Movie/movie/' . $mostRatedMovie['id']); ?>">
                                                        بیشتر </i> </a>
                                                </div>
                                                <div class="mv-item-infor paddig-text-top">
                                                    <h6>
                                                        <a class="color-text"
                                                           href="<?php $this->url('movie/movie/' . $mostRatedMovie['id']); ?>"> <?php echo $mostRatedMovie['movie_name'] ?> </a>
                                                    </h6>
                                                    <p class="rate  paddig-text rate-p"><i
                                                                class="ion-android-star  star-color"></i><span><?php echo $mostRatedMovie['score'] ?></span>
                                                        /۱۰</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trailers">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-12">
                <div class="title-hd bodydirection">
                    <h2>در سینما و تلوزیون چه خبره؟</h2>
                </div>
                <div class="videos">
                    <div class="slider-nav-2 thumb-ft">
                        <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous"
                                role="button" style="">Previous
                        </button>
                        <?php foreach ($newestMovies as $newestMovie) {
                            $m = $newestMovie; ?>
                            <div class="item bodydirection">
                                <div class="trailer-img">
                                    <img src="<?php echo $newestMovie['picture']; ?>"
                                         alt="photo by Barn Images" width="4096" height="2737">
                                </div>
                                <div class="trailer-infor margin-right">
                                    <h4 class="desc"><?php echo $newestMovie['movie_name']; ?></h4>
                                    <p><?php echo $newestMovie['trailer_duration']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next"
                                role="button" style="">Next
                        </button>
                    </div>
                    <div class="slider-for-2 video-ft">
                        <!--                            --><?php //foreach ($newestMovies as $newestMovie) { ?>
                        <video width="320" height="270" id="myVideo" controls="false" autoplay="false">
                            <source src="<?php echo $m['trailer']; ?>" type="video/mp4">
                        </video>
                        <!--                            --><?php //} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest new v1 section-->
<div class="latestnew">
    <div class="container">
        <div class="ipad-width bodydirection">
            <div class="title-hd">
                <h2>آخرین اخبار</h2>
            </div>
            <div class="tabs">
                <div class="tab-content">
                    <div id="tab31" class="tab active">
                        <div class="row">
                            <div class="blog-item-style-1">
                                <?php foreach ($blog as $singleBlog) { ?>
                                    <img class=" mv-blog-size"
                                         src="<?php echo $singleBlog['picture']; ?>" alt=""
                                         width="170"
                                         height="250">

                                    <div class="blog-it-infor">
                                        <h3><a><?php echo $singleBlog['title']; ?></a>
                                        </h3>
                                        <span class="time"><?php echo $singleBlog['time']; ?></span>
                                        <p><?php echo $singleBlog['text']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="morenew">
                <div class="title-hd">
                    <h3>مشاهده اخبار بیشتر </h3>
                    <a href="<?php $this->url('Blog/blogs'); ?>" class="viewall">مشاهده همه
                        اخبار<i
                                class="ion-ios-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="myModal" class="modal" style="display: none;">
    <div class="alert-wrapper">
        <div class="alert-frame">
            <div class="alert-header error-bg">
                <img class="img-alert" src="<?php $this->asset('image/uploads/alert.png'); ?>">
            </div>
            <div class="alert-body">
                <span class="alert-message">!شما قبلا رای خود را ثبت کرده اید</span>

                <button class="alert-button error-bg error-btn">باشه</button>

            </div>
        </div>
    </div>
</div>

<script>

    var modal = document.getElementById("myModal");


    var btn = document.getElementById("myBtn");


    var span = document.getElementsByClassName("error-btn")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }


    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<?php include('Layouts/footer.php'); ?>
</html>