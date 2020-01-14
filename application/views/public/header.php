<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="Cameroon projects directory">
	<meta name="author" content="Akah">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?= $this->lang->line('app_name') ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Work+Sans:300,400,500,600,700,800,900" rel="stylesheet">

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/base.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/fontello.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/select.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/colors.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/leaflet.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/hamburgers.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/range.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/style.css" />
	<!--[if lt IE 9]> <script type="text/javascript" src="<?= base_url('assets/')?>js/modernizr.custom.js"></script> <![endif]-->

</head>

<body>

<!-- WRAPPER ALL -->
<div class="directify_fn_wrapper_all">

	<!-- SIGN IN POPUP -->
	<div class="directify_fn_sign_in">
		<div class="directify_fn_sign_in_content">
			<div class="aaa">
				<div class="sign_in_box effect-1">
					<div class="sign_in_box_content">
						<div class="closer">
							<a href="#"><i class="xcon-cancel"></i></a>
						</div>
						<h3><?= $this->lang->line('sign_in') ?></h3>
						<a href="#" class="facebook"><?= $this->lang->line('sign_in_with_facebook') ?></a>
						<a href="#" class="google"><?= $this->lang->line('sign_with_google') ?></a>
						<p></p>
					</div>
				</div>
				<div class="directify_fn_sign_in_closer"></div>
			</div>
		</div>
	</div>
	<!-- /SIGN IN POPUP -->

	<!-- MOBILE MENU -->
	<div class="directify_fn_mobile_menu_wrap absolute" data-bg-type="translight">

		<div class="directify_fn_mobile_menu">
			<div class="mobile_logo">
				<a class="dark" href=""><img src="<?= base_url('assets/') ?>img/logo-dark.png" alt="LOGO" /></a>
				<a class="light" href=""><img src="<?= base_url('assets/') ?>img/logo-light.png" alt="LOGO" /></a>
			</div>
		</div>
		<div class="directify_fn_mobile_nav">
			<ul class="nav">
				<!--
                 <li>
                     <a href="#">Explore<i class="xcon-angle-down"></i></a>
                     <ul class="sub_menu">
                         <li><a href="listing.html">Restaurants</a></li>
                         <li><a href="listing.html">Hotels</a></li>
                         <li><a href="listing.html">Shopping</a></li>
                         <li><a href="listing.html">Galleries</a></li>
                         <li><a href="listing.html">Parks</a></li>
                         <li><a href="listing.html">Movies</a></li>
                         <li><a href="listing.html">Services</a></li>
                         <li><a href="listing.html">Theatres</a></li>
                         <li><a href="listing.html">Hospitals</a></li>
                         <li><a href="listing_single1.html">Single Page #1</a></li>
                         <li><a href="listing_single2.html">Single Page #2</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="#">Pages<i class="xcon-angle-down"></i></a>
                     <ul class="sub_menu">
                         <li><a href="index-2.html">Homepage #1</a></li>
                         <li><a href="index21.html">Homepage #2</a></li>
                         <li><a href="index23.html">Homepage #3</a></li>
                         <li><a href="index25.html">Homepage #4</a></li>
                         <li><a href="index10.html">Homepage #5</a></li><li><a href="contact.html">Contact</a></li>
                         <li>
                             <a href="#">Submenu Level #1<i class="xcon-angle-down"></i></a>
                             <ul class="sub_menu">
                                 <li><a href="#">Level #2</a></li>
                                 <li><a href="#">Level #2</a></li>
                                 <li>
                                     <a href="#">Level #2<i class="xcon-angle-down"></i></a>
                                     <ul class="sub_menu">
                                         <li><a href="#">Level #3</a></li>
                                         <li><a href="#">Level #3</a></li>
                                         <li><a href="#">Level #3</a></li>
                                         <li>
                                             <a href="#">Level #3<i class="xcon-angle-down"></i></a>
                                             <ul class="sub_menu">
                                                 <li><a href="#">Level #4</a></li>
                                                 <li><a href="#">Level #4</a></li>
                                                 <li><a href="#">Level #4</a></li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a href="#">Level #2</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href="#">Dashboard<i class="xcon-angle-down"></i></a>
                     <ul class="sub_menu">
                         <li><a href="dashboard-home.html">Dashboard - Home</a></li>
                         <li>
                             <a href="#">Dashboard - Listings<i class="xcon-angle-down"></i></a>
                             <ul class="sub_menu">
                                 <li><a href="dashboard-listings.html">Active</a></li>
                                 <li><a href="dashboard-listings.html">Panding</a></li>
                                 <li><a href="dashboard-listings.html">Expired</a></li>
                             </ul>
                         </li>
                         <li><a href="dashboard-reviews.html">Dashboard - Reviews</a></li>
                         <li><a href="dashboard-bookmarks.html">Dashboard - Bookmarks</a></li>
                         <li><a href="dashboard-adding.html">Dashboard - Adding</a></li>
                         <li><a href="dashboard-invoices.html">Dashboard - Invoices</a></li>
                         <li><a href="dashboard-profile.html">Dashboard - Profile</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="#">Blog<i class="xcon-angle-down"></i></a>
                     <ul class="sub_menu">
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="blog_single.html">Single Page</a></li>
                     </ul>
                 </li>
             -->
				<li class="log-in">
					<a href="<?= site_url('home/login')?>"><?= $this->lang->line('login') ?></a>
				</li>
				<li class="add_listing">
					<a href="<?= site_url('project/add')?>">
                        <span><?= $this->lang->line('add_project')?></span>
                    </a>
				</li>
			</ul>
		</div>

		<!--
        <div class="mobile_search_see one">
         <div class="selects">
             <div>
                 <input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" />
             </div>
             <div>
                 <select class="directify_fn_select">
                     <option value="all">All Listings</option>
                     <option value="restaurant">Restaurants</option>
                     <option value="hotel">Hotels</option>
                     <option value="shopping">Shopping</option>
                     <option value="gallery">Gallery</option>
                     <option value="park">Park</option>
                     <option value="movie">Movie</option>
                     <option value="service">Services</option>
                     <option value="theatre">Theatres</option>
                     <option value="hospital">Hospitals</option>
                 </select>
             </div>
             <div>
                 <input type="text" id="select-location" placeholder="Location" />
                 <img class="svg" src="img/svg/gps-fixed-indicator.svg" alt="" />
             </div>
         </div>
         <a href="#"><img class="svg" src="img/svg/search.svg" alt="" /><span>Search</span></a>
     </div>
     -->

	</div>
	<!-- /MOBILE MENU -->

    <!-- HEADER -->
    <header class="directify_fn_header_wrap absolute" data-bg-type="translight">
        <div>
            <div class="directify_fn_header">
                <div class="header">
                    <div class="directify_fn_header_logo">
                        <a class="dark" href=""><img src="<?= base_url('assets/') ?>img/logo-dark.png" alt="" /></a>
                        <a class="light" href=""><img src="<?= base_url('assets/') ?>img/logo-light.png" alt="" /></a>
                    </div>
                    <!--
                    <div class="directify_fn_header_search">
                        <a href="#">
                            <img class="svg" src="img/svg/search.svg" alt="" />
                            Search
                        </a>
                        <div class="directify_fn_header_search_see_wrap one">
                            <div class="header_search_see">
                                <div class="selects">
                                    <div>
                                        <input class="directify_fn_search_input" type="search" placeholder="What Are You Looking For?" />
                                    </div>
                                    <div>
                                        <select class="directify_fn_select">
                                            <option value="all">All Listings</option>
                                            <option value="restaurant">Restaurants</option>
                                            <option value="hotel">Hotels</option>
                                            <option value="shopping">Shopping</option>
                                            <option value="gallery">Gallery</option>
                                            <option value="park">Park</option>
                                            <option value="movie">Movie</option>
                                            <option value="service">Services</option>
                                            <option value="theatre">Theatres</option>
                                            <option value="hospital">Hospitals</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" id="select-location-1" placeholder="Location" />
                                        <img class="svg" src="img/svg/gps-fixed-indicator.svg" alt="" />
                                    </div>
                                </div>
                                <a href="#"><img class="svg" src="img/svg/search.svg" alt="" /><span>Search</span></a>
                            </div>
                        </div>
                    </div>
                -->
                    <div class="directify_fn_header_nav_list">
                        <ul class="nav__hor">
                            <!--
                            <li>
                                <a href="#">Explore<i class="xcon-angle-down"></i></a>
                                <ul class="sub_menu">
                                    <li><a href="listing.html">Restaurants</a></li>
                                    <li><a href="listing.html">Hotels</a></li>
                                    <li><a href="listing.html">Shopping</a></li>
                                    <li><a href="listing.html">Galleries</a></li>
                                    <li><a href="listing.html">Parks</a></li>
                                    <li><a href="listing.html">Movies</a></li>
                                    <li><a href="listing.html">Services</a></li>
                                    <li><a href="listing.html">Theatres</a></li>
                                    <li><a href="listing.html">Hospitals</a></li>
                                    <li><a href="listing_single1.html">Single Page #1</a></li>
                                    <li><a href="listing_single2.html">Single Page #2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages<i class="xcon-angle-down"></i></a>
                                <ul class="sub_menu">
                                    <li><a href="index-2.html">Homepage #1</a></li>
                                    <li><a href="index21.html">Homepage #2</a></li>
                                    <li><a href="index23.html">Homepage #3</a></li>
                                    <li><a href="index25.html">Homepage #4</a></li>
                                    <li><a href="index10.html">Homepage #5</a></li><li><a href="contact.html">Contact</a></li>
                                    <li>
                                        <a href="#">Submenu Level #1<i class="xcon-angle-right"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="#">Level #2</a></li>
                                            <li><a href="#">Level #2</a></li>
                                            <li>
                                                <a href="#">Level #2<i class="xcon-angle-right"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#">Level #3</a></li>
                                                    <li><a href="#">Level #3</a></li>
                                                    <li><a href="#">Level #3</a></li>
                                                    <li>
                                                        <a href="#">Level #3<i class="xcon-angle-right"></i></a>
                                                        <ul class="sub_menu">
                                                            <li><a href="#">Level #4</a></li>
                                                            <li><a href="#">Level #4</a></li>
                                                            <li><a href="#">Level #4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Level #2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Dashboard<i class="xcon-angle-down"></i></a>
                                <ul class="sub_menu">
                                    <li><a href="dashboard-home.html">Dashboard - Home</a></li>
                                    <li>
                                        <a href="#">Dashboard - Listings<i class="xcon-angle-right"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="dashboard-listings.html">Active</a></li>
                                            <li><a href="dashboard-listings.html">Panding</a></li>
                                            <li><a href="dashboard-listings.html">Expired</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard-reviews.html">Dashboard - Reviews</a></li>
                                    <li><a href="dashboard-bookmarks.html">Dashboard - Bookmarks</a></li>
                                    <li><a href="dashboard-adding.html">Dashboard - Adding</a></li>
                                    <li><a href="dashboard-invoices.html">Dashboard - Invoices</a></li>
                                    <li><a href="dashboard-profile.html">Dashboard - Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog<i class="xcon-angle-down"></i></a>
                                <ul class="sub_menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_single.html">Single Page</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="log-in">
                                <a href="#"><?= $this->lang->line('login') ?></a>
                            </li>
                            <li class="add_listing">
                                <a href="<?= site_url('project/add')?>">
                                    <img class="svg" src="<?= base_url('assets/') ?>img/svg/pencil.svg" alt="" />
                                    <span><?= $this->lang->line('add_project')?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /HEADER -->

