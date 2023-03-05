<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __VIEW__ . "head.php";?>
</head>

<body class="body">

    <!-- header -->
    <?php include __VIEW__ . "header.php";?>

    <!-- end header -->

    <!-- home -->
    <!-- end home -->z

  

    <?php include __VIEW__ . $template . '.php';?>

    <!-- footer -->
    <?php include __VIEW__ . "footer.php";?>

    <!-- end footer -->

    <!-- JS -->
    <script src="<?=$_ENV['BASE_URL']?>/template/js/jquery-3.5.1.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/owl.carousel.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/jquery.mousewheel.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/wNumb.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/nouislider.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/plyr.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/jquery.morelines.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/photoswipe.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/photoswipe-ui-default.min.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>/template/js/main.js"></script>
</body>

</html>