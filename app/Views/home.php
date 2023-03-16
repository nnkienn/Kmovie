<section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
        <div class="item home__cover" data-bg="<?=$_ENV['BASE_URL']?>/template/img/home/home__bg.jpg"></div>
        <div class="item home__cover" data-bg="<?=$_ENV['BASE_URL']?>/template/img/home/home__bg2.jpg"></div>
        <div class="item home__cover" data-bg="<?=$_ENV['BASE_URL']?>/template/img/home/home__bg3.jpg"></div>
        <div class="item home__cover" data-bg="<?=$_ENV['BASE_URL']?>/template/img/home/home__bg4.jpg"></div>
    </div>
    <!-- end home bg -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

                <button class="home__nav home__nav--prev" type="button">
                    <i class="icon ion-ios-arrow-round-back"></i>
                </button>
                <button class="home__nav home__nav--next" type="button">
                    <i class="icon ion-ios-arrow-round-forward"></i>
                </button>
            </div>
            <!-- Sliderbar -->
            <div class="col-12">
                <div class="owl-carousel home__carousel">
                    <div class="item">
                        <?php if ($sliders->num_rows > 0) { ?>

                        <?php  while ($slider = $sliders->fetch_assoc()) { ?>

                        <!-- card -->
                        <div class="card card--big">
                            <div class="card__cover">
                                <img src="<?=$_ENV['BASE_URL'] . $slider['thumb']?>" alt="">
                                <a href="<?=$slider['url']?>" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="<?=$slider['url']?>"><?=$slider['title']?></a></h3>
                                <span class="card__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                                <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <?php } }?>

                </div>
            </div>
        </div>
</section>


<section class="section section--bg" data-bg="<?=$_ENV['BASE_URL']?>/template/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="content__title">Phim lẻ mới cập nhập</h2>
            </div>
            <!-- end section title -->

            <!-- card -->
            <?php include  __VIEW__   .'products/content1.php' ?>
            <!-- end card -->



        </div>
    </div>
</section>





<section class="section section--bg" data-bg="<?=$_ENV['BASE_URL']?>/template/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title">Phim bộ mới cập nhập</h2>
            </div>
            <!-- end section title -->

            <!-- card -->
            <?php include  __VIEW__   .'products/content2.php' ?>

        </div>
    </div>
</section>

<section class="section section--bg" data-bg="<?=$_ENV['BASE_URL']?>/template/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title">Phim mới</h2>
            </div>
            <!-- end section title -->

            <!-- card -->
            <?php include  __VIEW__   .'products/detail.php' ?>
            <!-- end card -->


            <div class="col-12">
                <?= $pages ?>
            </div>
            <!-- section btn -->
            <!-- paginator -->

            <!-- end paginator -->
            <!-- end section btn -->
        </div>
    </div>
</section>