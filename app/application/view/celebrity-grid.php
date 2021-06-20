<!DOCTYPE html>


<!-- BEGIN | Header -->

<?php include('Layouts/header.php'); ?>


<body class="bodydirection">

<div class="buster-light">
    <div class="hero common-hero-grid">
        <div class="container bodydirection">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>دنیای فیلم</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="<?php $this->url('Home/home'); ?>">خانه</a></li>
                            <li><span class="ion-ios-arrow-left"></span> صفحه ی بازیگران</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="topbar-filter user">
                        <p> تعداد بازیگر پیدا شده  : <span><?php echo sizeof($actors); ?></span> </p>

                    </div>
                    <div class="celebrity-items">
                        <?php foreach ($actors as $actor) { ?>
                            <div class="ceb-item">
                                <a href="<?php $this->url('Person/actor/' . $actor['id']); ?>"><img
                                            src="<?php echo $actor['picture']; ?>" alt=""></a>
                                <div class="ceb-infor">
                                    <h2>
                                        <a href="<?php $this->url('Person/actor/' . $actor['id']); ?>"><?php echo $actor['first_name'] . " " . $actor['last_name']; ?></a>
                                    </h2>
                                    <span><?php echo 'بازیگر، ' . $actor['birth_place']; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <ul class="pagination" >
                        <?php for ($i = 1; $i <= $pageNum; $i++) {
                            $cui = $i; ?>
                            <li><a href="<?php $this->url('Person/actors/' . $i); ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!-- footer section-->
<?php include('Layouts/footer.php'); ?>
</html>