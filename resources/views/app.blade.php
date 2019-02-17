<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('aimeos_header')
    <title>Aimeos on Laravel</title>

    <link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    @yield('aimeos_styles')
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">

                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <li><a href="#"> <span class="hidden-xs">HELP</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
                            <li class="phone-number">
                                <a href="callto:+12025550151">
                                    <span> <i class="glyphicon glyphicon-phone-alt "></i></span>
                                    <span class="hidden-xs" style="margin-left:5px"> +1-202-555-0151 </span> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                            <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create
                                    Account </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="w100 brandWrap">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span></button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00) </span>
                </button>
                <a class="navbar-brand " href="index.html"> <img src="images/logo.png" alt="Facesouk"> </a>

                <!-- this part for mobile -->
                <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
                    <!-- /input-group -->

                </div>
            </div>

            <!--- navbar social icon || this part will be hidden on mobile version -->
            <div class="nav navbar-nav navbar-right margin-top-10 hidden-xs">
                <ul class="social-icon">
                    <li><a title="" class="fa fa-facebook tooltipHere" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" href="#"></a></li>
                    <li><a title="" class="fa fa-google-plus tooltipHere" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Google+"></a></li>
                    <li><a title="" class="fa fa-twitter tooltipHere" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Twitter"></a></li>
                    <li><a title="" class="fa fa-pinterest tooltipHere" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Pinterest"></a></li>
                    <li><a title="" class="fa fa-linkedin tooltipHere" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Linkedin"></a></li>
                    <li><a title="" class="fa fa-rss tooltipHere" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Feedburner"></a></li>
                </ul>
            </div>
            <!--/.navbar-right || social icon end-->
        </div>
    </div>
    <!-- /w100 -->

    <div class="w100 menuWrap">
        <div class="container">

            <!-- this part is duplicate from cartMenu  keep it for mobile -->

            <!--/.navbar-cart-->

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route(('home'))}}"> Acceuil </a></li>
                    <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           Services <b class="caret"> </b> </a>
                        <ul class="dropdown-menu">
                            <li class="megamenu-content ">
                                <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                    <li class="no-border">
                                        <p class="promo-1"><strong> NEW COLLECTION </strong></p>
                                    </li>
                                    <li><a href="category.html"> ALL NEW PRODUCTS </a></li>
                                    <li><a href="category.html"> NEW TOPS </a></li>
                                    <li><a href="category.html"> NEW SHOES </a></li>
                                    <li><a href="category.html"> NEW TSHIRT </a></li>
                                    <li><a href="category.html"> NEW TSHOP </a></li>
                                </ul>
                                <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                    <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo1.jpeg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                        </a></li>
                                </ul>
                                <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                    <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo2.jpeg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span>
                                        </a></li>
                                </ul>
                                <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                    <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo3.jpeg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="{{route(('home'))}}"> Export </a></li>

                    <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Opportunités d'affaires <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('opportunities.index')}}">Voir les opportunitées</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('opportunities.create')}}">Ajouter une opportunitée</a></li>

                        </ul>
                    </li>


                    <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                    <li class="dropdown megamenu-80width ">
                       <a> BOUTIQUE <b class="caret"> </b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="megamenu-content">

                                <!-- megamenu-content -->

                                <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                                    <li>
                                        <p><strong> Women Collection </strong></p>
                                    </li>
                                    <li><a href="#"> Kameez </a></li>
                                    <li><a href="#"> Tops </a></li>
                                    <li><a href="#"> Shoes </a></li>
                                    <li><a href="#"> T shirt </a></li>
                                    <li><a href="#"> TSHOP </a></li>
                                    <li><a href="#"> Party Dress </a></li>
                                    <li><a href="#"> Women Fragrances </a></li>
                                </ul>
                                <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                    <li>
                                        <p><strong> Men Collection </strong></p>
                                    </li>
                                    <li><a href="#"> Panjabi </a></li>
                                    <li><a href="#"> Male Fragrances </a></li>
                                    <li><a href="#"> Scarf </a></li>
                                    <li><a href="#"> Sandal </a></li>
                                    <li><a href="#"> Underwear </a></li>
                                    <li><a href="#"> Winter Collection </a></li>
                                    <li><a href="#"> Men Accessories </a></li>
                                </ul>
                                <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                                    <li>
                                        <p><strong> Top Brands </strong></p>
                                    </li>
                                    <li><a href="#"> Diesel </a></li>
                                    <li><a href="#"> Farah </a></li>
                                    <li><a href="#"> G-Star RAW </a></li>
                                    <li><a href="#"> Lyle & Scott </a></li>
                                    <li><a href="#"> Pretty Green </a></li>
                                    <li><a href="#"> TSHOP </a></li>
                                    <li><a href="#"> TANJIM </a></li>
                                </ul>
                                <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                    <li class="no-margin productPopItem "><a href="product-details.html"> <img class="img-responsive" src="images/site/g4.jpeg" alt="img"> </a> <a class="text-center productInfo alpha90" href="product-details.html"> Eodem
                                            modo typi <br>
                                            <span> $60 </span> </a></li>
                                </ul>
                                <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                                    <li class="no-margin productPopItem relative"><a href="product-details.html"> <img class="img-responsive" src="images/site/g5.jpeg" alt="img"> </a> <a class="text-center productInfo alpha90" href="product-details.html"> Eodem
                                            modo typi <br>
                                            <span> $60 </span> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>



                </ul>
                <div class="nav navbar-nav navbar-right hidden-xs">
                @yield('aimeos_head')

                <!--/.cartMenu-->


                    <!--/.search-box -->
                </div>
                <!--/.navbar-nav hidden-xs-->

                <!--- this part will be hidden for mobile version -->

            </div>
            <!--/.nav-collapse -->

        <!--/.container -->


            <div class="searchInputBox1">
                <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input1">

                <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>

            </div>
        </div>
    </div>

    <!--/.search-full ||  search form here-->

    <!--/.w100-full-->

</div>
<!-- /.Fixed navbar  -->
<div class="col-xs-12 relative">
    @yield('aimeos_body')
    @yield('aimeos_aside')
    @yield('content')
</div>

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/js/jquery/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- include jqueryCycle plugin -->
<script src="{{asset('assets/js/jquery.cycle2.min.js')}}"></script>
<!-- include easing plugin -->
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="{{asset('assets/js/jquery.parallax-1.1.js')}}"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="{{asset('assets/js/helper-plugins/jquery.mousewheel.min.js')}}"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="{{asset('assets/js/jquery.mCustomScrollbar.js')}}"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="{{asset('assets/plugins/icheck-1.x/icheck.min.js')}}"></script>

<!-- include grid.js // for equal Div height  -->
<script src="{{asset('assets/plugins/jquery-match-height-master/dist/jquery.matchHeight-min.js')}}"></script>
<script src="{{asset('assets/js/grids.js')}}"></script>

<!-- include carousel slider plugin  -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>


<!-- jQuery select2 //
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

custom select   -->

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="{{asset('assets/js/bootstrap.touchspin.js')}}"></script>

<!-- include custom script for only homepage  -->
<script src="{{asset('assets/js/home.js')}}"></script>
<!-- include custom script for site  -->
<script src="{{asset('assets/js/script.js')}}"></script>
@yield('aimeos_scripts')
</body>
</html>