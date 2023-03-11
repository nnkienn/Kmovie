<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="index.html" class="header__logo">
                            <img src="<?=$_ENV['BASE_URL']?>/template/img/logo.png" alt="">
                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <!-- dropdown -->
                            <li class="header__nav-item">
                            <a class="header__nav-link" href="/" >Home</a>


                            </li>
                                <?php $menusTop = \App\Helpers\ViewComposer::getDataMenuIsActive();?>
                              <?=\App\Helpers\ViewComposer::loadViewMenuTop($menusTop)?>
                              
            





                          
                            <!-- end dropdown -->


                            <li class="header__nav-item">
                                <a href="faq" class="header__nav-link">Help</a>
                            </li>

                            <!-- dropdown -->
                            <li class="dropdown header__nav-item">
                                <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                                    role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="signin.html">Sign In</a></li>
                                    <li><a href="signup.html">Sign Up</a></li>
                                    <li><a href="forgot.html">Forgot password</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <!-- end dropdown -->
                        </ul>
                        <!-- end header nav -->

                        <!-- header auth -->
                        <div class="header__auth">
                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>

                            <!-- dropdown -->
                            <div class="dropdown header__lang">
                                <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Russian</a></li>
                                </ul>
                            </div>
                            <!-- end dropdown -->


                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end header search -->
</header>