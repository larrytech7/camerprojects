<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- CONTENT -->
<div class="directify_fn_content">

	<div class="directify_fn_all_listings_wrap index10 index30">
		<div class="directify_fn_all_listings_bg">
			<div class="overlay_color"></div>
			<div class="overlay_image"></div>
		</div>
		<div class="directify_fn_all_listings">
			<div class="all_listings">
				<div class="container">
					<div class="listings_wrap">
						<div class="discovering_wrap">
							<div class="discovering">
								<div class="title_holder">
									<h3><?= $this->lang->line('app_tag_line') ?></h3>
									<span><?= $this->lang->line('app_subtag') ?></span>
								</div>
								<div class="searching">
									<input class="directify_fn_search_input" type="search" placeholder="<?= $this->lang->line('search_placeholder') ?>" />
									<a class="directify_fn_search_btn" href="#"><img class="svg" src="<?= base_url('assets/') ?>img/svg/search.svg" alt="" /><span><?= $this->lang->line('search') ?></span></a>
								</div>
								<div class="cat_single_wrap" data-hover-text="#fff" data-hover-bg="" data-hover-border="rgba(255,255,255,1)" data-skew="6" data-text-color="#fff" data-bg-color="" data-bg-opacity="" data-border-width="1" data-border-color="rgba(255,255,255,0.64)">
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="<?= site_url('home/search/foodtech')?>">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/restaurant.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_foodtech') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/hotel.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_realestate') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/shopping.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_ecommerce') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/gallery.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_images') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/share.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_messages') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/movie.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_vod') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/service.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_api') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/credit-card.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_fintech') ?></span>
											</a>
										</div>
									</div>
									<div class="cat_single">
										<div class="cat_single_bg">
											<div class="overlay_color"></div>
										</div>
										<div class="cat_single_content">
											<a href="#">
												<img class="svg" src="<?= base_url('assets/') ?>img/svg/hospital.svg" alt="" />
												<span class="cat_title"><?= $this->lang->line('cat_ehealth') ?></span>
											</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<!-- #1 item -->
								<div class="fdbox">
									<div class="featured_box_wrap">
										<div class="featured_box">
											<div class="featured_box_img">
												<img src="<?= base_url('assets/') ?>img/featured_listing/list1-l.jpg" alt="" />
											</div>
											<div class="featured_box_price">
												<span class="text">YEAR</span>
												<span class="after"></span>
											</div>

											<div class="featured_box_info_wrap">
												<div class="featured_box_info">
													<div class="featured_box_like">
														<a href="#">
															<img class="svg" src="<?= base_url('assets/') ?>img/svg/share.svg" alt="" />
														</a>
														<div class="featured_box_tooltip">
															<span>Favorite</span>
														</div>
													</div>
													<div class="featured_box_title">
														<h3><a href="#">Project Name</a> </h3>
														<p>Project description ...</p>
														<p>
															<a href="#"><span>C</span></a>
															<a href="#"><span>Python</span></a>
														</p>
													</div>
													<div class="directify_fn_rating" data-rating="1">
														<div class="featured_box_preview">
															<a href="#"><span>Opensource</span></a>
														</div>
													</div>

													<div class="featured_box_address">
														<img class="svg" src="<?= base_url('assets/') ?>img/svg/user.svg" alt="" />
														<span>By Author name</span>
													</div>
													<div class="featured_box_author_img">
														<div class="author_img">
															<img src="<?= base_url('assets/') ?>img/featured_listing/author1.jpg" alt="" />
															<img class="svg" src="<?= base_url('assets/') ?>img/svg/checked.svg" alt="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /#1 item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FAMOUS CITIES HOVERTAB
    <div class="directify_fn_tab_famous_cities_wrap">
        <div class="directify_fn_tab_famous_cities">
            <div class="tab_famous_cities">
                <div class="container">
                    <div class="directify_fn_tabs" data-skin="light" data-x-pos="left">
                        <div class="title_holder">
                            <h3>Most Popular Cities to Travel</h3>
                            <span class="title">These are Top Places that recommended by Directify</span>
                            <span class="line"></span>
                        </div>
                        <ul class="fam_city tabHeader">
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">01</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>New York</h3>
                                                <span>227 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city1-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">02</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>Paris</h3>
                                                <span>154 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city2-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">03</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>Rome</h3>
                                                <span>854 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city3-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">04</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>London</h3>
                                                <span>239 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city4-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">05</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>Moscow</h3>
                                                <span>634 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city5-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="fam_city_wrap">
                                        <div class="number">
                                            <span class="text">06</span>
                                            <span class="after"></span>
                                        </div>
                                        <div class="fam_city_content">
                                            <div class="title_holder">
                                                <h3>Tokyo</h3>
                                                <span>123 Listings</span>
                                            </div>
                                            <div class="arrow">
                                                <i class="xcon-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="hidden_img">
                                            <img src="img/popular_cities/city6-s.jpg" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tabContent">
                            <nav>
                                <div class="active"><a href="#"></a><nav class="overlay"></nav></div>
                                <div class=""><a href="#"></a><nav class="overlay"></nav></div>
                                <div class=""><a href="#"></a><nav class="overlay"></nav></div>
                                <div class=""><a href="#"></a><nav class="overlay"></nav></div>
                                <div class=""><a href="#"></a><nav class="overlay"></nav></div>
                                <div class=""><a href="#"></a><nav class="overlay"></nav></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     /FAMOUS CITIES HOVERTAB -->

	<!-- HOW IT WORK
    <div class="directify_fn_workstep_wrap">
        <div class="directify_fn_workstep">
            <div class="workstep_wrap">
                <div class="container">
                    <div class="workstep">
                        <div class="title_holder">
                            <h3>How It Works</h3>
                            <span class="title">Let the Directify direct you toward to top places</span>
                            <span class="line"></span>
                        </div>
                           <div class="steps">
                               <div class="step_single_wrap">
                                   <div class="step_single">
                                       <div class="number">
                                           <span class="text">01</span>
                                           <span class="after"></span>
                                       </div>
                                       <div class="title_holder">
                                           <h3>Choose What To Do</h3>
                                           <span>Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</span>
                                       </div>
                                   </div>
                               </div>
                               <div class="step_single_wrap">
                                   <div class="step_single">
                                       <div class="number">
                                           <span class="text">02</span>
                                           <span class="after"></span>
                                       </div>
                                       <div class="title_holder">
                                           <h3>Find the Best Locations </h3>
                                           <span>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.</span>
                                       </div>
                                   </div>
                               </div>
                               <div class="step_single_wrap">
                                   <div class="step_single">
                                       <div class="number">
                                           <span class="text">03</span>
                                           <span class="after"></span>
                                       </div>
                                       <div class="title_holder">
                                           <h3>Go and Have Fun</h3>
                                           <span>Go and have a good time or even make a booking directly from the listing page. Sed do eiusmod tempor </span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     /HOW IT WORK -->


	<!-- FROM OUR BLOG
    <div class="directify_fn_exmblog_wrap">
        <div class="directify_fn_exmblog">
            <div class="exmblog_wrap">
                <div class="container">
                    <div class="exmblogs">
                        <div class="title_holder">
                            <h3>From Our Blog</h3>
                            <span class="title">We post everyday about places that you want to know about.</span>
                            <span class="line"></span>
                        </div>
                        <div class="exmblog_single_wrap">
                            <div class="exmblog_single">
                                <img class="svg" src="img/svg/open-book.svg" alt="" />
                                <div class="title_holder">
                                    <h3><a href="#">Best Destinations for Travellers</a></h3>
                                    <span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
                                    <span class="read_more"><a href="#">Read More</a><span class="date"> - April 01</span></span>
                                </div>
                            </div>
                            <div class="exmblog_single">
                                <img class="svg" src="img/svg/open-book.svg" alt="" />
                                <div class="title_holder">
                                    <h3><a href="#">How to Promote Your Business</a></h3>
                                    <span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
                                    <span class="read_more"><a href="#">Read More</a><span class="date"> - March 27</span></span>
                                </div>
                            </div>
                            <div class="exmblog_single">
                                <img class="svg" src="img/svg/open-book.svg" alt="" />
                                <div class="title_holder">
                                    <h3><a href="#">Tips for High Quality Holiday</a></h3>
                                    <span class="title">Cras aliquam sagittis urna in consectetur. Aenean felis lacus.</span>
                                    <span class="read_more"><a href="#">Read More</a><span class="date"> - January 18</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     /FROM OUR BLOG -->

</div>