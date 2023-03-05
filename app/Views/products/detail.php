<?php if ($products->num_rows > 0) { 
        while ($product = $products->fetch_assoc()) { ?>

<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                <img src="<?=$_ENV['BASE_URL'] . $product['thumb']?>" alt="IMG-PRODUCT">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#"> <?=$product['title']?></a></h3>
                            <span class="card__category">
                                <a href="#">Action</a>
                                <a href="#">Triler</a>
                            </span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                        </div>
                    </div>
                </div>


                <?php } } ?>