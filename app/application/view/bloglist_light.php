<?php include('Layouts/header.php'); ?>
<!-- bloglist_light16:31-->
<div class="hero common-hero-grid">
    <div class="container bodydirection">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1> اخبار</h1>
                    <ul class="breadcumb ">
                        <li class="active"><a href="<?php $this->url('Home/home'); ?>">خانه</a></li>
                        <li><span class="ion-ios-arrow-left"></span>لیست خبرها</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="buster-light">
    <!-- blog list section-->
    <div class="page-single">
        <div class="container bodydirection">

            <?php foreach ($blogs as $blog) { ?>
                <div class="blog-item-style-1 blog-item-style-3 mv-blog-size">
                    <img class="mv-blog-image-size" src="<?php echo $blog['picture']; ?>" alt="">
                    <div class="blog-it-infor">
                        <h3><a href="#"><?php echo $blog['title']; ?></a></h3>
                        <span class="time"><?php echo $blog['time']; ?></span>
                        <p class="h6-margin"><?php echo $blog['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $pageNum; $i++) { ?>
                    <li><a href="<?php $this->url('Blog/blogs/' . $i); ?>"><?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
        </div>

    </div>
</div>
<!--end of blog list section-->
</div>

<!-- bloglist_light16:31-->
<?php include('Layouts/footer.php'); ?>
</html>

