<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __VIEW__ . "head.php";?>
</head>

<body class="body">
	

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Search</h2>
						<!-- end section title -->

						
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- faq -->
	<section class="section">
		<div class="container">
        <div class="row">
    <?php foreach ($results as $product): ?>
        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
            <div class="card">
                <div class="card__cover">
                    <img src="<?=$_ENV['BASE_URL'] . $product['thumb']?>" alt="IMG-PRODUCT">
                    <a href="<?=$_ENV['BASE_URL']. \System\Src\Str::slug($product['title'])?>-id<?=$product['id']?>.html"
                        class="card__play">
                        <i class="icon ion-ios-play"></i>
                    </a>
                </div>
                <div class="card__content">
                    <h3 class="card__title"><a href="<?=$_ENV['BASE_URL']. \System\Src\Str::slug($product['title'])?>-id<?=$product['id']?>.html"><?=$product['title']?></a></h3>
                    
                    <span class="card__rate"><i class="icon ion-ios-star"></i><?=$product['rating']?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
	</section>
	<!-- end faq -->


</body>

</html>
