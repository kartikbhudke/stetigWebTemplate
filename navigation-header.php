<header class="page_header ls justify-nav-end">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-4 col-md-5 col-11">
                <a href="index.php" class="logo">
                    <span class="icon-styled fs-14">
                        <img src="./images/Logo.png" width="50%" id="logo1" style="display: none !important;">
                    </span>                                                                         
                </a>
            </div>
            <script>                                    
                $(document).scroll(function() {
                    var y = $(this).scrollTop();
                    var logoMain = document.querySelector("#logo1")
                    if (y > 75) {                                   
                        logoMain.style.display = "block ";
                    } else {
                        logoMain.style.display = "none";                                        
                    }
                }); 
            </script>
            <div class="col-xl-9 col-lg-8 col-md-7 col-1">
                <div class="nav-wrap">  
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">
                            <li class="active">
                                <a href="index.php">Home</a>                                                
                            </li>
                            <li>
                                <a href="about.php">About</a>
                                <ul>
                                    <li>
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="team.php">Team</a>                         
                                    </li>
                                    <li>
                                        <a href="gallery.php">Gallery</a>                                                     
                                    </li>                                               
                                </ul>
                            </li>
                            
                            <!-- blog -->
                            <li>
                                <a href="blog.php">Blog</a>
                                
                            </li>
                            <!-- eof blog -->
                            <li>
                                <a href="services.php">Services</a>                                                     
                            </li>
                            <!-- contacts -->
                            <li>
                                <a href="contact.php">Contact</a>                                              
                            </li>
                            <!-- eof contacts -->                                           
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- header toggler -->
    <span class="toggle_menu"><span></span></span>
</header>

<div class="page_header_wrapper main-header-side">
    <div class="page_header_side header_slide header_side_right aaaa ls">
        <span class="toggle_menu toggle_menu_side header-slide"><span></span></span>
        <div class="scrollbar-macosx">
            <div class="side_header_inner">
                <div class="header-side-menu">
                    <!-- main side nav start -->
                    <nav class="mainmenu_side_wrapper">
                        <ul class="nav menu-click">
                            <li>
                                <a href="faq.php">
                                    <i class="color-main7 fa fa-question-circle"></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="booking-form.php">
                                    <i class="color-main7 fa fa-paper-plane"></i>
                                    Submit a ticket
                                </a>
                            </li>
                            <li>
                                <a href="terms_of_use.php">
                                    <i class="color-main7 fa fa-rocket"></i>
                                    Terms Of Use
                                </a>
                            </li>
                            <li>
                                <a href="availability-map.php">
                                    <i class="color-main7 fa fa-file-text-o"></i>
                                    Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    <i class="color-main7 fa fa-phone"></i>
                                    call me back
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- eof main side nav -->
                </div>
            </div>
        </div>
        <div class="facebook-messeger d-flex align-items-center hero-bg">
            <img src="images/messeger.png" alt="">
            <a href="https://messenger.com" class="small-text">
                facebook messeger
            </a>
        </div>
    </div>

</div>
