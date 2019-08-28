<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Ourshop | @yield('title')</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  <div id="header">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                  <div class="dropdown-menu custom_block">
                    <ul>
                      <li>
                        <table>
                          <tbody>
                            <tr>
                              <td><img alt="" src="image/banner/cms-block.jpg"></td>
                              <td><img alt="" src="image/banner/responsive.jpg"></td>
                            </tr>
                            <tr>
                              <td><h4>CMS Blocks</h4></td>
                              <td><h4>Responsive Template</h4></td>
                            </tr>
                            <tr>
                              <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                              <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                            </tr>
                            <tr>
                              <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                              <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Wish List (0)</a></li>
                <li><a href="checkout.html">Checkout</a></li>
              </ul>
            </div>
            <div id="language" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/gb.png" alt="English" title="English" /> English</button>
                </li>
                <li>
                  <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
                </li>
              </ul>
            </div>
            <div id="currency" class="btn-group">
              <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> $ USD <i class="fa fa-caret-down"></i></span></button>
              <ul class="dropdown-menu">
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                </li>
                <li>
                  <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                </li>
              </ul>
            </div>
          </div>
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    @include('front.header')
    @include('front.nav')
    @include('front.sidebar')


    @yield('content')

    @include('front.footer')