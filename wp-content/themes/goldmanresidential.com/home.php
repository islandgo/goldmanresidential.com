<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
	<div class="region-slideshow-container">
		<h2 class="hidden">Slideshow</h2>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
		<?php endif ?>
		<div class="slideshow-content">
			<div class="slide-title">
				<h2>Top 5 RE/Max Small Teams</h2>
				<p>In the US in 2021</p>
			</div>
			<div class="slide-btn">
				<a href="[blogurl]" aria-label="View Exclusive Homes" class="site-btn">View Exclusive Homes</a>
			</div>
		</div>
	</div>
</section>
<!-- slideshow end -->
<!-- listings -->
<section class="hp-listings">
	<div class="listings-bg-left">
		<img class="img-responsive lazyload" alt="listings-bg-left"
			src="<?php echo get_stylesheet_directory_uri()?>/images/listings-bg-left.jpg">
	</div>
	<div class="listings-bg-right">
		<img class="img-responsive lazyload" alt="listings-bg-right"
			src="<?php echo get_stylesheet_directory_uri()?>/images/listings-bg-right.jpg">
	</div>
	<div class="region-listings-container">
		<div class="listings-title-holder">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>Featured</h3>
					<span class="title-line"></span>
				</div>
				<h2>Listings</h2>
			</div>
			<div class="listings-btn">
				<a href="[blogurl]" aria-label="View All Listings" class="site-btn">View All Listings</a>
			</div>
		</div>
		<div class="listings-slick">
			<div class="listings-list">
				<div class="listings-space">
					<canvas width="495" height="336"></canvas>
				</div>
				<a href="[blogurl]" aria-label="listings" class="listings-item">
					<div class="listings-img canvas-wrapper">
						<canvas width="495" height="336"></canvas>
						<img alt="listings" class="img-listings canvas-img img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/listings-3.jpg" />
					</div>
					<div class="listings-content">
						<div class="listings-content-top">
							<h3>$2,395,000</h3>
							<p>8420 SW 92ND ST<br> Miami</p>
						</div>
						<span class="site-btn">View Details</span>
					</div>
				</a>
			</div>
			<div class="listings-list">
				<a href="[blogurl]" aria-label="listings" class="listings-item">
					<div class="listings-img canvas-wrapper">
						<canvas width="495" height="336"></canvas>
						<img alt="listings" class="img-listings canvas-img img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/listings-1.jpg" />
					</div>
					<div class="listings-content">
						<div class="listings-content-top">
							<h3>$2,395,000</h3>
							<p>8420 SW 92ND ST<br> Miami</p>
						</div>
						<span class="site-btn">View Details</span>
					</div>
				</a>
				<a href="[blogurl]" aria-label="listings" class="listings-item">
					<div class="listings-img canvas-wrapper">
						<canvas width="495" height="336"></canvas>
						<img alt="listings" class="img-listings canvas-img img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/listings-4.jpg" />
					</div>
					<div class="listings-content">
						<div class="listings-content-top">
							<h3>$2,395,000</h3>
							<p>8420 SW 92ND ST<br> Miami</p>
						</div>
						<span class="site-btn">View Details</span>
					</div>
				</a>
			</div>
			<div class="listings-list">
				<a href="[blogurl]" aria-label="listings" class="listings-item">
					<div class="listings-img canvas-wrapper">
						<canvas width="495" height="336"></canvas>
						<img alt="listings" class="img-listings canvas-img img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/listings-2.jpg" />
					</div>
					<div class="listings-content">
						<div class="listings-content-top">
							<h3>$2,395,000</h3>
							<p>8420 SW 92ND ST<br> Miami</p>
						</div>
						<span class="site-btn">View Details</span>
					</div>
				</a>
				<a href="[blogurl]" aria-label="listings" class="listings-item">
					<div class="listings-img canvas-wrapper">
						<canvas width="495" height="336"></canvas>
						<img alt="listings" class="img-listings canvas-img img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/listings-5.jpg" />
					</div>
					<div class="listings-content">
						<div class="listings-content-top">
							<h3>$2,395,000</h3>
							<p>8420 SW 92ND ST<br> Miami</p>
						</div>
						<span class="site-btn">View Details</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- listings end -->
<!-- quick-search -->
<section class="hp-quick-search">
	<div class="region-quick-search-container">
		<div class="quick-search-form">
			<div class="primary-qs-item site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>Quick</h3>
					<span class="title-line"></span>
				</div>
				<h2>Search</h2>
			</div>
			<div class="secondary-qs-item">
				<select aria-label="qs-fields">
					<option value="SFR,CND">Property Type</option>
					<option value="SFR">House Only</option>
					<option value="CND">Condo Only</option>
					<option value="RI">Multi-Family</option>
					<option value="COM">Commercial</option>
					<option value="LL">Lots / Land</option>
					<option value="RI">Multi-Unit Residential</option>
					<option value="MH">Mobile Home</option>
					<option value="RNT">Rental</option>
					<option value="FRM">Farms</option>
				</select>
			</div>
			<div class="tertiary-qs-item">
				<select aria-label="qs-fields">
					<option value="SFR,CND">City or Zip</option>
					<option value="SFR">House Only</option>
					<option value="CND">Condo Only</option>
					<option value="RI">Multi-Family</option>
					<option value="COM">Commercial</option>
					<option value="LL">Lots / Land</option>
					<option value="RI">Multi-Unit Residential</option>
					<option value="MH">Mobile Home</option>
					<option value="RNT">Rental</option>
					<option value="FRM">Farms</option>
				</select>
			</div>
			<div class="fourth-qs-item">
				<select aria-label="qs-fields">
					<option value="">Beds</option>
					<option value="1">1+</option>
					<option value="2">2+</option>
					<option value="3">3+</option>
					<option value="4">4+</option>
					<option value="5">5+</option>
				</select>
			</div>
			<div class="fifth-qs-item">
				<select aria-label="qs-fields">
					<option value="">Baths</option>
					<option value="1">1+</option>
					<option value="2">2+</option>
					<option value="3">3+</option>
					<option value="4">4+</option>
					<option value="5">5+</option>
				</select>
			</div>
			<div class="sixth-qs-item">
				<input type="text" placeholder="Min. $" aria-label="qs-fields" />
			</div>
			<div class="seventh-qs-item">
				<input type="text" placeholder="Max. $" aria-label="qs-fields" />
			</div>
			<div class="eighth-qs-item">
				<div class="qs-search"> <input type="submit" value="Search" aria-label="qs-submit" /> </div>
			</div>
			<div class="ninth-qs-item">
				<div class="qs-idx">
					<p>Real Estate IDX Powered by iHomefinder</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- quick-search end -->
<!-- properties -->
<section class="hp-properties">
	<div class="properties-bg-left">
		<img class="img-responsive lazyload" alt="properties-bg-left"
			src="<?php echo get_stylesheet_directory_uri()?>/images/properties-bg-left.jpg">
	</div>
	<div class="properties-bg-right">
		<img class="img-responsive lazyload" alt="properties-bg-right"
			src="<?php echo get_stylesheet_directory_uri()?>/images/properties-bg-right.jpg">
	</div>
	<div class="region-properties-container">
		<div class="properties-slick">
			<a href="[blogurl]" aria-label="properties" class="properties-item">
				<div class="properties-img canvas-wrapper">
					<canvas width="926" height="577"></canvas>
					<img alt="properties" class="img-properties canvas-img img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg" />
				</div>
			</a>
			<a href="[blogurl]" aria-label="properties" class="properties-item">
				<div class="properties-img canvas-wrapper">
					<canvas width="926" height="577"></canvas>
					<img alt="properties" class="img-properties canvas-img img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg" />
				</div>
			</a>
		</div>
		<div class="properties-right">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo-white.png" />
					<h3>Recently</h3>
				</div>
				<h2>Sold</h2>
			</div>
			<div class="properties-slick-body">
				<div>
					<div class="property-info-holder">
						<div class="properties-info">
							<div class="property-price">
								$2,998,000
							</div>
							<div class="property-location">
								1560 Agua Ave <br> Coral Gables
							</div>
						</div>
						<div class="bed-baths">
							<span>5 Bedrooms</span>
							<span>4 Bathrooms</span>
							<span>0 Half Bath</span>
							<span>3,649 Sqft</span>
						</div>
					</div>
				</div>
				<div>
					<div class="property-info-holder">
						<div class="properties-info">
							<div class="property-price">
								$2,998,000
							</div>
							<div class="property-location">
								1560 Agua Ave <br> Coral Gables
							</div>
						</div>
						<div class="bed-baths">
							<span>5 Bedrooms</span>
							<span>4 Bathrooms</span>
							<span>0 Half Bath</span>
							<span>3,649 Sqft</span>
						</div>
					</div>
				</div>
			</div>
			<div class="property-btn">
				<a href="[blogurl]" aria-label="View Details" class="site-btn property-btn-1">View Details</a>
				<a href="[blogurl]" aria-label="View All Recently Sold" class="site-btn property-btn-2">View All
					Recently
					Sold</a>
			</div>
		</div>
	</div>
</section>
<!-- properties end -->
<!-- neighborhoods -->
<section class="hp-neighborhoods">
	<div class="region-neighborhoods-container">
		<div class="neighborhoods-gallery-image-container">
			<div class="neighborhoods-title">
				<div class="site-title">
					<div class="site-title-top">
						<img alt="title-icon" class="img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
						<h3>Featured</h3>
						<span class="title-line"></span>
					</div>
					<h2>Neighborhoods</h2>
				</div>
			</div>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="535" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-1.jpg">
					<h3>Pinecrest</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="533" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-2.jpg">
					<h3>Palmetto Bay</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="533" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-3.jpg">
					<h3>Coral Gables</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="535" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-4.jpg">
					<h3>Coconut Grove</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="533" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-5.jpg">
					<h3>South Miami</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="533" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-6.jpg">
					<h3>Key Biscayne</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="535" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-7.jpg">
					<h3>Miami Beach</h3>
				</div>
			</a>
			<a href="[blogurl]" aria-label="neighborhoods-image" class="neighborhoods-image">
				<div class="neighborhoods-item canvas-wrapper"> <canvas width="535" height="363"></canvas> <img
						alt="neighborhoods-image" class="canvas-img img-responsive"
						src=" <?php echo get_stylesheet_directory_uri() ?>/images/neighborhoods-8.jpg">
					<h3>Brickell / <br> Downtown Miami</h3>
				</div>
			</a>
		</div>
	</div>
</section>
<!-- neighborhoods end -->
<!-- welcome -->
<section class="hp-welcome">
	<div class="region-welcome-container">
		<div class="welcome-secondary-section">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>About</h3>
					<span class="title-line"></span>
				</div>
				<h2>Goldman</h2>
				<p>Residential Group</p>
			</div>
			<div class="welcome-text">
				<p>With more than four decades of luxury real estate experience in the South Florida
					market, Goldman Residential Group provides exceptional guidance, impeccable service
					and the best marketing tools to buyers and sellers of residential real estate.</p>
				<p>Goldman Residential Group is led by Hazel Goldman and Evan Goldman. The two have
					gained the trust of countless individuals and families looking to make a residential real
					estate move in South Florida. After meeting with Hazel and Evan, you will quickly under-
					stand why they have earned the reputation of best realtors in Pinecrest and have ranked
					as the number one RE/MAX agents in Florida. They specialize in Pinecrest, Palmetto
					Bay, South Miami, Coral Gables and Coconut Grove.</p>
				<p>They are currently the number 2 RE/MAX small team in Florida, one of the top 5
					RE/MAX small teams in the US, and the number 17 RE/MAX small team worldwide
					with $72,000,000 in sales in 2021 alone.</p>
			</div>
			<a href="[blogurl]" aria-label="READ MORE" class="site-btn">READ MORE</a>
		</div>
		<div class="welcome-primary-section">
			<img alt="agent" class="img-responsive"
				src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-agent.jpg" />
		</div>
	</div>
</section>
<!-- welcome end -->
<!-- work -->
<section class="hp-work">
	<div class="work-bg">
		<img class="img-responsive lazyload" alt="work-bg"
			src="<?php echo get_stylesheet_directory_uri()?>/images/work-bg.jpg">
	</div>
	<div class="region-work-container">
		<div class="site-title-holder">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>Why</h3>
					<span class="title-line"></span>
				</div>
				<h2>Work With Us</h2>
			</div>
		</div>
		<div class="work-content">
			<div class="work-item">
				<h3>$<i class="count">72</i>M</h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>Total Sales</p>
				<p>In 2021</p>
			</div>
			<div class="work-item">
				<h3><i class="count">773</i></h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>Transactions In</p>
				<p>Pinecrest to Date</p>
			</div>
			<div class="work-item">
				<h3>$<i class="count">18</i>B</h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>In Sales to Date</p>
			</div>
			<div class="work-item">
				<h3>#<i class="count">2</i></h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>RE/MAX Small Team</p>
				<p>In Florida in 2021</p>
			</div>
			<div class="work-item">
				<h3>Top<i class="count">5</i></h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>RE/MAX Small Team</p>
				<p>In the US in 2021</p>
			</div>
			<div class="work-item">
				<h3>#<i class="count">17</i></h3>
				<div class="work-logo">
					<span class="work-line"></span>
					<img alt="work" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<span class="work-line"></span>
				</div>
				<p>RE/MAX Small Team</p>
				<p>In the World in 2021</p>
			</div>
		</div>
	</div>
</section>
<!-- work end -->
<!-- testimonials -->
<section class="hp-testimonials">
	<div class="testimonial-bg">
		<img class="img-responsive lazyload" alt="testimonial-bg"
			src="<?php echo get_stylesheet_directory_uri()?>/images/testimonial-bg.jpg">
	</div>
	<div class="region-testimonials-container">
		<div class="site-title-holder">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo-white.png" />
					<h3>What Our</h3>
					<span class="title-line"></span>
				</div>
				<h2>Clients are Saying</h2>
			</div>
		</div>
		<div class="testimonials-slick-holder">
			<div class="testimonials-slick">
				<div class="testimonials-content">
					<div class="testi-qoute">
						<img alt="qoute" class="img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-qoute.png" />
					</div>
					<p>"We can't thank Hazel enough for helping us find our dream home in South Florida. It's exactly
						what we
						dreamed it would be - and we didn't go over our budget! Hazel's local market knowledge,
						expertise, and
						amazing
						dedication made the whole buying process truly enjoyable. Thank you so much, Hazel!"</p>
					<h3>-Jane Doe</h3>
				</div>
				<div class="testimonials-content">
					<div class="testi-qoute">
						<img alt="qoute" class="img-responsive"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-qoute.png" />
					</div>
					<p>"We can't thank Hazel enough for helping us find our dream home in South Florida. It's exactly
						what we
						dreamed it would be - and we didn't go over our budget! Hazel's local market knowledge,
						expertise, and
						amazing
						dedication made the whole buying process truly enjoyable. Thank you so much, Hazel!"</p>
					<h3>-Jane Doe</h3>
				</div>
			</div>
			<div class="testi-btn">
				<a href="[blogurl]" aria-label="READ MORE" class="site-btn">READ MORE</a>
				<div class="testi-arrow">
					<span class="ai-font-play-button-a prev"></span>
					<span class="ai-font-play-button-a next"></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonials end -->
<!-- contact -->
<section class="hp-contact">
	<div class="contact-bg">
		<img class="img-responsive lazyload" alt="contact-bg"
			src="<?php echo get_stylesheet_directory_uri()?>/images/contact-bg.jpg">
	</div>
	<div class="region-contact-container">
		<div class="site-title-holder">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>Join</h3>
					<span class="title-line"></span>
				</div>
				<h2>Our Network</h2>
			</div>
		</div>
		<div class="contact-text">
			<p>When you join our network, you'll be the first to know about new listings and market updates.</p>
		</div>
		<div class="contact-form ">
			<?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
		</div>
	</div>
</section>
<!-- contact end -->
<!-- social -->
<section class="hp-social">
	<div class="region-social-container">
		<div class="site-title-holder">
			<div class="site-title">
				<div class="site-title-top">
					<img alt="title-icon" class="img-responsive"
						src="<?php echo get_stylesheet_directory_uri() ?>/images/title-logo.png" />
					<h3>Follow Us On</h3>
					<span class="title-line"></span>
				</div>
				<h2>Instagram</h2>
			</div>
		</div>
		<div class="social-item-container">
			<div class="social-primary-section">
				<a href="[blogurl]" aria-label="social-image" class="social-image">
					<div class="social-item canvas-wrapper"> <canvas width="745" height="595"></canvas> <img
							alt="social-image" class="canvas-img img-responsive"
							src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-1.jpg">
						<div class="social-content">
							<div class="social-img-hover">
								<div class="canvas-wrapper">
									<canvas width="263" height="307"></canvas>
									<img class="img-responsive canvas-img lazyload" alt="social-agent"
										src="<?php echo get_stylesheet_directory_uri()?>/images/social-img-hover.jpg">
								</div>
							</div>
							<div class="social-hover">
								<div class="social-instagram">
									<span class="ai-font-instagram"></span>
									<p>Instagram</p>
								</div>
								<p>@Goldmanresidentialgroup</p>
								<span class="site-btn">Follow us on Instagram</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="social-secondary-section">
				<div class="social-gallery-image-container">
					<a href="[blogurl]" aria-label="social-image" class="social-image">
						<div class="social-item canvas-wrapper"> <canvas width="370" height="296"></canvas> <img
								alt="social-image" class="canvas-img img-responsive"
								src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-2.jpg">
							<span class="ai-font-instagram"></span>
						</div>
					</a>
					<a href="[blogurl]" aria-label="social-image" class="social-image">
						<div class="social-item canvas-wrapper"> <canvas width="371" height="296"></canvas> <img
								alt="social-image" class="canvas-img img-responsive"
								src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-3.jpg">
							<span class="ai-font-instagram"></span>
						</div>
					</a>
					<a href="[blogurl]" aria-label="social-image" class="social-image">
						<div class="social-item canvas-wrapper"> <canvas width="370" height="296"></canvas> <img
								alt="social-image" class="canvas-img img-responsive"
								src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-4.jpg">
							<span class="ai-font-instagram"></span>
						</div>
					</a>
					<a href="[blogurl]" aria-label="social-image" class="social-image">
						<div class="social-item canvas-wrapper"> <canvas width="371" height="296"></canvas> <img
								alt="social-image" class="canvas-img img-responsive"
								src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-5.jpg">
							<span class="ai-font-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- social end -->
<div class="hp-sidebar">
	<div id="scroll-down">
		<ul class="aios-section-nav"></ul>
		<ul class="comp-social-sidebar">
			<li class="side-smi">
				<div class="phone">
					<?php echo do_shortcode('[ai_phone href="+1.407.415.9484"]
                            <span class="ai-font-phone">
                                <span class="font-zero">phone</span>
                            </span>
                            [/ai_phone]')?>
				</div>
			</li>
			<li class="side-smi">
				<a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
					<div class="side-btn">
						<span class="ai-font-facebook"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-facebook"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
			<li class="side-smi">
				<a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
					<div class="side-btn">
						<span class="ai-font-twitter"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-twitter"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
			<li class="side-smi">
				<a href="[ai_client_zillow]" target="_blank" aria-label="zillow">
					<div class="side-btn">
						<span class="ai-font-zillow"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-zillow"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
			<li class="side-smi">
				<a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
					<div class="side-btn">
						<span class="ai-font-youtube"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-youtube"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
			<li class="side-smi">
				<a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
					<div class="side-btn">
						<span class="ai-font-instagram"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-instagram"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
			<li class="side-smi">
				<a href="[ai_client_linkedin]" target="_blank" aria-label="linkedin">
					<div class="side-btn">
						<span class="ai-font-linkedin"></span>
						<p>Hazel Goldman</p>
					</div>
					<div class="side-btn">
						<span class="ai-font-linkedin"></span>
						<p>Hazel Goldman</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>
<?php get_footer(); ?>