<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('aimeos_header')
    <title>Aimeos on Laravel</title>

    <link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="assets/css/style.css" rel="stylesheet">

    @yield('aimeos_styles')
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
                <a class="navbar-brand " href="index.html"> <img src="images/logo.png" alt="TSHOP"> </a>

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
            <div class="navbar-cart  collapse">
                <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                    <div class="w100 miniCartTable scroll-pane">
                        <table>
                            <tbody>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/3.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/2.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/5.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/3.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/3.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            <tr class="miniCartProduct">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div><a href="product-details.html"> <img src="images/product/4.jpeg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                        <span class="size"> 12 x 1.5 L </span>

                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="width:5%" class="delete"><a> x </a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/.miniCartTable-->

                    <div class="miniCartFooter  miniCartFooterInMobile text-right">
                        <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                        <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW
                            CART </a><a class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                    <!--/.miniCartFooter-->

                </div>
                <!--/.cartMenu-->
            </div>
            <!--/.navbar-cart-->

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> Home </a></li>
                    <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            New Products <b class="caret"> </b> </a>
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

                    <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                    <li class="dropdown megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            SHOP <b class="caret"> </b> </a>
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
                    <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            PAGES <b class="caret"> </b> </a>
                        <ul class="dropdown-menu">
                            <li class="megamenu-content ProductDetailsList">

                                <!-- remove .ProductDetailsList class from megamenu-content || this class for demo uses only -->

                                <!-- megamenu-content -->

                                <!-- remove .ProductDetailsList class from megamenu-content || this class for demo uses only -->

                                <!-- megamenu-content -->

                                <h3 class="promo-1 no-margin hidden-xs">60 + HTML PAGES || AVAILABLE ONLY AT WRAP
                                    BOOTSTRAP </h3>

                                <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive
                                    on any Device, 10+ color Theme + Parallax Effect </h3>

                                <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                    <li class="no-border">
                                        <p><strong> Home Pages </strong></p>
                                    </li>
                                    <li><a href="index.html"> Home Version 1 </a></li>
                                    <li><a href="index2.html"> Home Version 2 </a></li>
                                    <li><a href="index3.html"> Home Version 3 (BOXES) </a></li>
                                    <li><a href="index4.html"> Home Version 4 (LOOK 2)</a></li>
                                    <li><a href="index5.html"> Home Version 5 (LOOK 3)</a></li>
                                    <li><a href="index6.html"> Home Version 6 (STORY)</a></li>
                                    <li><a href="index-v-7.html"> Home Version 7 (Flat) <span class="label label-success">new</span></a>
                                    </li>
                                    <li><a href="index-header2.html"> Header Version 2 </a></li>
                                    <li><a href="index-header3.html"> Header Version 3 </a></li>

                                    <li><a href="index-logged-in.html">Topbar Logged In user menu <span class="label label-success">new</span></a></li>
                                    <li><a href="sidebar-shopping-cart.html">Sidebar Shopping cart <span class="label label-success">new</span></a></li>
                                </ul>

                                <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                    <li class="no-border">
                                        <p><strong> Featured Pages </strong></p>
                                    </li>
                                    <li><a href="category.html"> Category </a></li>
                                    <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
                                    <li><a href="sub-category.html"> Sub Category </a></li>
                                    <li><a href="category-list.html"> Category List View </a></li>
                                    <li><a href="category-product-hover.html"> Category [Product Hover] </a></li>
                                    <li><a href="category-product-slide.html"> Category [Product Slide] </a></li>

                                    <li><a href="cart.html"> Cart </a></li>
                                    <li><a href="about-us-3.html"> About Us V3 <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="about-us-2.html"> About Us V2 </a></li>
                                    <li><a href="about-us.html"> About Us V1 </a></li>

                                    <li><a href="contact-us.html"> Contact us </a></li>
                                    <li><a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a></li>
                                    <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>

                                </ul>

                                <ul class="col-lg-3  col-sm-3 col-md-3 unstyled ">
                                    <li class="no-border">
                                        <p><strong> Product Details </strong></p>
                                    </li>
                                    <li><a href="product-details.html"> Product Details v1 </a></li>
                                    <li><a href="product-details-style2.html"> Product Details v 2 </a></li>
                                    <li><a href="product-details-style3.html"> Product Details v 3 (Custom Thumbnail
                                            Position)</a></li>
                                    <li><a href="product-details-style4.html"> Product Details v 4 (with litebox)</a></li>


                                    <li><a href="product-details-style5.html"> Product Details v 5 (Flat) <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-1.html"> Product Details v 5.1 <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-2.html"> Product Details v 5.2 <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-3.html"> Product Details v 5.3 <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-3-fadein.html"> Product Details v 5.3.1
                                            <small>(fadein)</small>
                                            <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-4.html"> Product Details v 5.4 <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-4.1-popup-video.html"> Product Details v 5.4.1
                                            <small>(popup video)</small>
                                            <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="product-details-style5-4.1-with-zoom.html"> Product Details v 5.4.1
                                            <small>(zoom + litebox)</small>
                                            <span class="label label-success">NEW</span></a></li>

                                </ul>
                                <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                    <li class="no-border">
                                        <p><strong> Checkout </strong></p>
                                    </li>
                                    <li><a href="checkout-0.html"> Checkout Before </a></li>
                                    <li><a href="checkout-1.html"> checkout step 1 </a></li>
                                    <li><a href="checkout-2.html"> checkout step 2 </a></li>
                                    <li><a href="checkout-3.html"> checkout step 3 </a></li>
                                    <li><a href="checkout-4.html"> checkout step 4 </a></li>
                                    <li><a href="checkout-5.html"> checkout step 5 </a></li>
                                    <li><a href="one-page-checkout.html"> One page checkout <span class="label label-success">NEW</span> </a></li>
                                    <li><a href="thanks-for-order.html"> Thanks for order</a></li>
                                </ul>
                                <ul class="col-lg-1  col-sm-1 col-md-1 no-padding unstyled">
                                    <li class="no-border">
                                        <p><strong> User Account </strong></p>
                                    </li>
                                    <li><a href="account-1.html"> Account Login </a></li>
                                    <li><a href="account.html"> My Account </a></li>
                                    <li><a href="my-address.html"> My Address </a></li>
                                    <li><a href="user-information.html"> User information </a></li>
                                    <li><a href="wishlist.html"> Wish List </a></li>
                                    <li><a href="order-list.html"> Order list </a></li>
                                    <li><a href="order-status.html"> Order Status </a></li>
                                    <li><a href="forgot-password.html"> Forgot Password </a></li>
                                    <li><a href="invoice-A4.html">invoice A4.html <span class="label label-success">new</span> </a></li>
                                </ul>
                                <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                                    <li class="no-border">
                                        <p><strong> &nbsp; </strong></p>
                                    </li>
                                    <li><a href="blog.html"> Blog </a></li>
                                    <li><a href="blog-details.html"> Blog Details </a></li>
                                    <li><a href="single-product-modal.html"> Single Product Details Modal</a></li>
                                    <li><a href="single-subscribe-modal.html"> Single Subscribe Modal</a></li>
                                    <li><a href="index-store-switcher-modal.html"> store switcher modal</a></li>
                                    <li><a href="error-page.html"> Error Page </a></li>
                                    <li><a href="blank-page.html"> Blank Page </a></li>
                                    <li><a href="form.html"> Basic Form Element </a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li><a href="all-page-link.html" target="_blank"> All Page Link </a></li>


                    <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="nav navbar-nav navbar-right hidden-xs">
                    <div class="dropdown  cartMenu "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b class="caret"> </b> </a>

                        <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                            <div class="w100 miniCartTable scroll-pane">
                                <table>
                                    <tbody>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/product/3.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> TSHOP Tshirt DO9 </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $22 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/product/2.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> TShir TSHOP 09 </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $15 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $120 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/product/5.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> Tshir 2014 </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $30 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $80 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/product/3.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> TSHOP T shirt DO20 </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $15 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/product/4.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> T shirt Black </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $44 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $40 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details.html"> <img src="images/site/winter.jpeg" alt="img"> </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details.html"> G Star T shirt </a></h4>
                                                <span class="size"> 12 x 1.5 L </span>

                                                <div class="price"><span> $80 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/.miniCartTable-->

                            <div class="miniCartFooter text-right">
                                <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                                <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i>
                                    VIEW CART </a><a class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                            <!--/.miniCartFooter-->

                        </div>
                        <!--/.dropdown-menu-->
                    </div>
                    <!--/.cartMenu-->

                    <div class="search-box">
                        <div class="input-group">
                            <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i>
                            </button>
                        </div>
                        <!-- /input-group -->

                    </div>
                    <!--/.search-box -->
                </div>
                <!--/.navbar-nav hidden-xs-->

                <!--- this part will be hidden for mobile version -->

            </div>
            <!--/.nav-collapse -->

        </div>
        <!--/.container -->

        <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i>
            </a>

            <div class="searchInputBox pull-right">
                <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input">
                <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
            </div>
        </div>
        <!--/.search-full ||  search form here-->

    </div>
    <!--/.w100-full-->

</div>
<!-- /.Fixed navbar  -->
<div class="col-xs-12">
    @yield('aimeos_nav')
    @yield('aimeos_stage')
    @yield('aimeos_body')
    @yield('aimeos_aside')
    @yield('content')
</div>

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('aimeos_scripts')
</body>
</html>
