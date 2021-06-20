<?php include('Layouts/header.php'); ?>
<!-- moviegridfw_light16:30-->

<div class="buster-light">
    <div class="hero common-hero-grid">
        <div class="container bodydirection">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>دنیای فیلم</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="<?php $this->url('Home/home'); ?>">خانه</a></li>
                            <li><span class="ion-ios-arrow-left"></span> صفحه ی فیلم ها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container bodydirection">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="topbar-filter user bodydirection ">
                        <p> تعداد فیلم پیدا شده : <span><?php echo sizeof($movies); ?></span></p>
                    </div>
                    <div class="flex-wrap-movielist mv-grid-fw">
                        <?php foreach ($movies as $movie) { ?>
                            <div class="movie-item-style-2 movie-item-style-1 movie-item-style-1-favrite">
                                <img src="<?php echo $movie['picture'] ?>" alt="">
                                <div class="hvr-inner mv-padding">
                                    <a href="<?php $this->url('movie/movie/' . $movie['id']); ?>"> بیشتر <i></i> </a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6>
                                        <a href="<?php $this->url('movie/movie/' . $movie['id']); ?>"> <?php echo $movie['movie_name'] ?> </a>
                                    </h6>
                                    <p class="rate"><i
                                                class="ion-android-star"></i><span><?php echo $movie['score'] ?> </span>
                                        /10</p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pageNum; $i++) { ?>
                            <li><a href="<?php $this->url('Movie/movies/' . $i); ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('Layouts/footer.php'); ?>
</html>