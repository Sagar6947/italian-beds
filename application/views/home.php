<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner">
	<img src="<?= base_url() ?>assets/images/home-banner.png" alt="">
	<div class="banner_content">
		<h4>Spring for the best comfort and sleep</h4>
		<a href="#" class="bold-font">Shop now</a>
	</div>
</section>

<section class="features-area">
	<div class="features_box">
		<div class="box">
			<img src="<?= base_url() ?>assets/images/shield.png" alt="">
			<p>10-Year Warranty</p>
		</div>
		<div class="box">
			<img src="<?= base_url() ?>assets/images/shipping.png" alt="">
			<p>Free Shipping</p>
		</div>
	</div>
</section>

<!--====================  End of hero slider area  ====================-->
<!--====================  category grid  ====================-->

<div class="category-area section-space--small padding-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-area text-center">
					<h2 class="section-title bold-font my_heading">The Best Sleep Duo</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<!--=======  ctaegory grid wrapper  =======-->

				<div class="category-grid-wrapper">
					<div class="row">
						<div class="col-md-6">
							<!--=======  single-category  =======-->

							<div class="single-category single-category--type-one text-center">
								<div class="single-category--type-one__image">
									<a href=""><img src="<?= base_url() ?>assets/images/mattress.jpg" class="img-fluid" alt=""></a>
									<span class="floter">UP TO $600 OFF</span>
								</div>
								<div class="single-category--type-one__content d-flex align-items-center justify-content-between">
									<h2 class="title mb-0 dark_color">Shop mattress</h2>
									<a href="" class="warranty_label"> <img src="<?= base_url() ?>assets/images/dark-shield.png" alt=""> 10-Year Warranty </a>
								</div>
							</div>

							<!--=======  End of single-category  =======-->
						</div>
						<div class="col-md-6">
							<!--=======  single-category  =======-->

							<div class="single-category single-category--type-one text-center">
								<div class="single-category--type-one__image">
									<a href=""><img src="<?= base_url() ?>assets/images/pilow.jpg" class="img-fluid" alt=""></a>
									<span class="floter">UP TO $600 OFF</span>
								</div>
								<div class="single-category--type-one__content d-flex align-items-center justify-content-between">
									<h2 class="title mb-0 bold-fonts dark_color">Shop Pillows</h2>
									<a href="" class="warranty_label"> <img src="<?= base_url() ?>assets/images/dark-shield.png" alt=""> 10-Year Warranty </a>
								</div>
							</div>

							<!--=======  End of single-category  =======-->
						</div>
					</div>
				</div>

				<!--=======  End of ctaegory grid wrapper  =======-->
			</div>
		</div>
	</div>
</div>



<div class="page-content-wrapper">
	<!--=======  product carousel area  =======-->

	<div class="section-title-area text-center">
		<h2 class="section-title bold-font my_heading">Experience great sleep and holistic wellness</h2>
	</div>

	<div class="product-carousel-area section-space">
		<!--====================  product slider area ====================-->

		<div class="product-slider-area">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<!--=======  product slider wrapper  =======-->

						<div class="product-slider-wrapper theme-slick-slider" data-slick-setting='{
                        "slidesToShow": 4,
                        "slidesToScroll": 4,
                        "arrows": true,
                        "dots": true,
                        "autoplay": false,
                        "speed": 500,
                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
                    }' data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 4, "slidesToScroll": 4, "arrows": false} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 3, "slidesToScroll": 3, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 2,"slidesToScroll": 2, "arrows": true, "dots": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 2,"slidesToScroll": 2,  "arrows": true, "dots": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,"arrows": false, "dots": true} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": false} }
                    ]'>

							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="onsale dark_color bold-font">BEST SELLER</span>
										</div>
										<a href="" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/elegance.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Elegance</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Mattresses for supreme comfort and elegant sleep await</p>
									</div>
								</div>
								<!--=======  End of single short view product  =======-->
							</div>

							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">

									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="hot" style="font-weight: bolder;">Sale</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/glory.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Glory</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Glorious mattress designed for quality sleep and wellness</p>
									</div>
								</div>

								<!--=======  End of single short view product  =======-->
							</div>

							<div class="col">
								<!--=======  single short view product  =======-->

								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="onsale dark_color bold-font">BEST SELLER</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/ninfa.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Ninfa</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Lush mattresses that lull you to sleep</p>
									</div>
								</div>

								<!--=======  End of single short view product  =======-->
							</div>

							<div class="col">
								<!--=======  single short view product  =======-->

								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="hot" style="font-weight: bolder;">Sale</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/posedian.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Posedian</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Enter sleep heaven an almighty mattresses</p>
									</div>
								</div>

								<!--=======  End of single short view product  =======-->
							</div>
							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="onsale dark_color bold-font">BEST SELLER</span>
										</div>
										<a href="" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/elegance.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Elegance</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Mattresses for supreme comfort and elegant sleep await</p>
									</div>
								</div>
								<!--=======  End of single short view product  =======-->
							</div>

							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">

									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="hot" style="font-weight: bolder;">Sale</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/glory.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Glory</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Glorious mattress designed for quality sleep and wellness</p>
									</div>
								</div>

								<!--=======  End of single short view product  =======-->
							</div>

							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="onsale dark_color bold-font">BEST SELLER</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/ninfa.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Ninfa</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Lush mattresses that lull you to sleep</p>
									</div>
								</div>
								<!--=======  End of single short view product  =======-->
							</div>
							<div class="col">
								<!--=======  single short view product  =======-->
								<div class="single-grid-product">
									<div class="single-grid-product__image">
										<div class="product-badge-wrapper">
											<span class="hot" style="font-weight: bolder;">Sale</span>
										</div>
										<a href="#" class="image-wrap">
											<img src="<?= base_url() ?>assets/images/posedian.png" class="img-fluid" alt="">
										</a>
									</div>
									<div class="single-grid-product__content">
										<h3 class="title dark_color"><a href="" class="dark_color bold-font">Posedian</a></h3>
										<a href="#" class="favorite-icon dark_color bold-font">
											$1500
										</a>
										<p>Enter sleep heaven an almighty mattresses</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=======  End of product carousel area  =======-->
</div>
<!--====================  End of featured brand  ====================-->
<!--====================  call to action area ====================-->

<div class="cta-area cta-bg cta-bg--one">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-10">
				<!--=======  cta content wrapper  =======-->

				<div class="cta-content-wrapper">
					<div class="cta-content">
						<h3 class="title">Find out which mattress is best</br> for you!</h3>
						<p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
						<a href="" class="theme-button cta-btn bold-font">Compare Now</a>
					</div>
				</div>

				<!--=======  End of cta content wrapper  =======-->
			</div>
		</div>
	</div>
</div>

<!--====================  End of call to action area  ====================-->

<section class="buy_now">
	<div class="content">
		<h3 class="bold-font">Buy Now Pay Later</h3>
		<a href="">More Details</a>
	</div>
</section>

<!-- ============Testimonial============ -->

<div class="page-content-wrapper">
	<!--=======  testimonial area  =======-->

	<div class=" ">
		<div class="container">
			<div class="section-title-area text-center">
				<h2 class="section-title bold-font my_heading">Share the love</h2>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  testimonial content wrapper  =======-->

					<div class="testimonial-content-wrapper">

						<div class="row row-0 align-items-center">
							<div class="col-lg-6">
								<div class="testimonial-image">
									<img src="<?= base_url() ?>assets/images/testi_image.png" class="img-fluid" alt="">
									<span class="review bold-font dark_color">See all reviews</span>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="testimonial-content testi_bg">
									<!--=======  testimonial wrapper  =======-->

									<div class="testimonial-wrapper theme-slick-slider" data-slick-setting='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "arrows": false,
                                            "dots": true,
                                            "autoplay": false,
                                            "autoplaySpeed": 5000,
                                            "speed": 500,
                                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
                                        }' data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": false} },
                                            {"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": false} },
                                            {"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }
                                        ]'>
										<!--=======  single testimonial  =======-->

										<div class="single-testimonial">
											<div class="single-testimonial__image">
												<div class="rating">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
												</div>
											</div>
											<div class="single-testimonial__content">
												<p class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos corrupti molestias, soluta aliquam cumque et unde tempora labore natus, fugiat error numquam incidunt enim sequi delectus, neque suscipit molestiae quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ex quas aperiam sed quam?</p>

												<p class="testimonial-author">- Amelia Noah -</p>

											</div>
										</div>

										<!--=======  End of single testimonial  =======-->
										<!--=======  single testimonial  =======-->

										<div class="single-testimonial">
											<div class="single-testimonial__image">
												<div class="rating">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
												</div>
											</div>

											<div class="single-testimonial__content">
												<p class="testimonial-text">The entire look of the theme can be easily changed through a lot of cool options provided with the Theme Customizer which allows you to edit the theme and preview your changes in real time. You can change colors, fonts and a lot of options in the layout.</p>

												<p class="testimonial-author">- James Blunt -</p>
											</div>
										</div>

										<!--=======  End of single testimonial  =======-->
										<!--=======  single testimonial  =======-->

										<div class="single-testimonial">
											<div class="single-testimonial__image">
												<div class="rating">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
												</div>
											</div>

											<div class="single-testimonial__content">
												<p class="testimonial-text">I was impressed with what the theme could do. It has a great design and it boasts a lot of great features.</p>

												<p class="testimonial-author">- Alison Hilton -</p>


											</div>
										</div>

										<!--=======  End of single testimonial  =======-->
									</div>

									<!--=======  End of testimonial wrapper  =======-->
								</div>
							</div>
						</div>
					</div>

					<!--=======  End of testimonial content wrapper  =======-->
				</div>
			</div>
		</div>
	</div>

	<!--=======  End of testimonial area  =======-->
</div>

<div class="product-slider-text-area section-space bg_light_blue">
	<!--=======  product slider with text wrapper  =======-->

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="product-slider-text-wrapper">
					<div class="row">
						<div class="col-lg-5">
							<div class="product-slider-text-wrapper__text">
								<h2 class="title bold-font dark_color">Find the Right Mattress for you</h2>
								<p class="description">Choosing the right mattress is important for restful sleep. Althrough all of our mattresses are designed for yur ultimate comfort and wellness, selecting a specific one based on your lifestyle and nedds helps you get the wholesome relaxation you desire. Let us find the right italian Bed mattress for you.</p>
								<a href="" class="megamenu_btn">Visit our store</a>
							</div>
						</div>
						<div class="col-lg-7">
							<!--=======  product slider wrapper  =======-->

							<div class="product-slider-wrapper theme-slick-slider" data-slick-setting='{
                                        "slidesToShow": 2,
                                        "slidesToScroll": 1,
                                        "arrows": true,
                                        "dots": false,
                                        "autoplay": false,
                                        "speed": 500,
                           
                                    }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 2, "slidesToScroll": 2, "arrows": false} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 2, "slidesToScroll": 1, "arrows": false} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2,"slidesToScroll": 2, "arrows": true, "dots": false} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 2,"slidesToScroll": 2,  "arrows": true, "dots": false} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,"arrows": true, "dots": false} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": false, "dots": false} }
                                    ]'>

								<div class="col">
									<!--=======  single short view product  =======-->
									<div class="single-grid-product">
										<div class="single-grid-product__image">
											<a href="" class="image-wrap">
												<img src="<?= base_url() ?>assets/images/store-slide1.png" class="img-fluid" alt="">
											</a>
										</div>
									</div>
									<!--=======  End of single short view product  =======-->
								</div>
								<div class="col">
									<!--=======  single short view product  =======-->
									<div class="single-grid-product">
										<div class="single-grid-product__image">
											<a href="" class="image-wrap">
												<img src="<?= base_url() ?>assets/images/store-slide-2.png" class="img-fluid" alt="">
											</a>
										</div>
									</div>
									<!--=======  End of single short view product  =======-->
								</div>

							</div>
							<!--=======  End of product slider wrapper  =======-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=======  End of product slider with text wrapper  =======-->
</div>


<section class="clients">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="clients_head bold-font dark_color">100% Italian-made with traditional processing</h2>
			</div>
			<div class="col-lg-8">
				<div class="row text-center">
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-3.png" alt="">
					</div>
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-2.png" alt="">
					</div>
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="cta-area cta-bg cta-bg--two-sagar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-10">
				<!--=======  cta content wrapper  =======-->

				<div class="cta-content-wrapper">
					<div class="cta-content">
						<h3 class="title">The finest luxury italian beds crafted to enhance sleep culture now in Australia.</h3>
						<img src="<?= base_url() ?>assets/images/play.png" alt="">
					</div>
				</div>

				<!--=======  End of cta content wrapper  =======-->
			</div>
		</div>
	</div>
</div>


<section class="clients">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="clients_head bold-font dark_color">#DesignedForWellness</h2>
				<p class="para_text">Speak to our expert sleep consultants and ensure all your sleep needs are met. Get their timely assistance by video, call or in-store.</p>

				<ul>
					<li>3/455 Scarborough Beach, Road Osborne Park, WA 6017</li>
					<li>Monday - Friday: 9am - 6pm</li>
					<li>Saturday  Sunday: 10am - 7pm</li>
				</ul>
			</div>
			<div class="col-lg-8">
				<div class="row text-center ">
					<div class="col-sm-4 text-center">
						<img src="<?= base_url() ?>assets/images/contact-us.png" alt="">
						<p class="margin-t dark_color">Contact Us</p>
					</div>
					<div class="col-sm-4 text-center">
						<img src="<?= base_url() ?>assets/images/showroom.png" alt="">
						<p class="margin-t dark_color">Showroom</p>
					</div>
					<div class="col-sm-4 text-center">
						<img src="<?= base_url() ?>assets/images/matandpilow.png" alt="">
						<p class="margin-t dark_color">Mattresses & Pillows</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>