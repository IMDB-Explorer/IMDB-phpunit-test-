<?php include('Layouts/header.php'); ?>

    <body class="bodydirection">
    <div class="buster-light">
        <div class="hero hero3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>

        <div class="page-single movie-single cebleb-single">
            <div class="container">
                <div class="row ipad-width">
                    <div class="col-md-4 col-md-4-c col-sm-12 col-xs-12">
                        <div class="mv-ceb mv-ceb-cel">
                            <img src="<?php echo $actor['picture']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-md-8-c col-sm-12 col-xs-12">
                        <div class="movie-single-ct">
                            <div class=".social-btn  social-btn-actor">
                                <h1 class="bd-hd"><?php echo $actor['first_name'] . " " . $actor['last_name']; ?></h1>
                            </div>
                            <div class="movie-tabs">
                                <div class="tabs">
                                    <ul class="tab-links tabs-mv-actor tabs-mv">
                                        <li class="active"><a href="#overviewceb">معرفی</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="overviewceb" class="tab active">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12 col-sm-12">
                                                    <div class="sb-it">
                                                        <h6> نام و نام خانوادگی </h6>
                                                        <p><?php echo $actor['first_name'] . " " . $actor['last_name']; ?></p>
                                                    </div>
                                                    <div class="sb-it">
                                                        <h6> تولد تاریخ </h6>
                                                        <p><?php echo $actor['birth_date']; ?></p>
                                                    </div>
                                                    <div class="sb-it">
                                                        <h6>زادگاه</h6>
                                                        <p><?php echo $actor['birth_place']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-8-c col-sm-12 col-xs-12">
                                                    <p><?php echo $actor['bio']; ?></p>
                                                    <div class="title-hd-sm">
                                                        <h4>عکس ها</h4>
                                                    </div>
                                                    <div class="mvsingle-item ov-item">
                                                        <?php foreach ($actorPictures as $actorPicture) { ?>
                                                            <a class="img-lightbox"
                                                               data-fancybox-group="gallery"
                                                               href="<?php echo $actorPicture['picture']; ?>"><img
                                                                        class="img-actor-size"
                                                                        src="<?php echo $actorPicture['picture']; ?>"
                                                                        alt=""></a>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- movie cast -->
                                                    <div class="title-hd-sm">
                                                        <h4>فیلم ها</h4>
                                                    </div>
                                                    <div class="mvcast-item">
                                                        <?php foreach ($actorMovies
                                                                       as $actorMovie) { ?>
                                                            <div class="cast-it">
                                                                <div class="cast-left cebleb-film">
                                                                    <img class="img-movie-size"
                                                                         src="<?php echo $actorMovie['picture']; ?>"
                                                                         alt="">
                                                                    <div>
                                                                        <p>
                                                                            <a href="#"><?php echo $actorMovie['movie_name']; ?></a>
                                                                        </p>
                                                                        <p>
                                                                            <a href="<?php $this->url('Person/director/' . $actorMovie['director_id']); ?>"
                                                                               class="time"><?php echo $actorMovie['first_name'] . " " . $actorMovie['last_name']; ?></a>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <p><?php echo $actorMovie['release_date']; ?></p>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

    <!-- celebrity single section-->

    <!-- celebritysingle_light16:31-->
<?php include('Layouts/footer.php'); ?>