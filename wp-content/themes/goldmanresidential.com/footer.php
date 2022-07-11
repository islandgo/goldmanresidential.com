<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<div class="footer-bg">
		<img class="img-responsive lazyload" alt="footer-bg"
			src="<?php echo get_stylesheet_directory_uri()?>/images/footer-bg.jpg">
	</div>
	<div class="container">
		<div class="footer-top">
			<div class="footer-list">
				<div class="footer-logo-holder">
					<div class="footer-logo-1">
						<a href="[blogurl]" aria-label="logo">
							<div class="footer-img">
								<img alt="Goldman" class="img-footer" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo-1.png" />
							</div>
						</a>
					</div>
					<div class="footer-logo-2">
						<a href="[blogurl]" aria-label="logo">
							<div class="footer-img">
								<img alt="Remax" class="img-footer" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo-2.png" />
							</div>
						</a>
					</div>
					<div class="footer-location">
						<span class="ai-font-location-c"></span>
						<p>10501 SW 71 Avenue Pinecrest, FL 33156</p>
					</div>
				</div>
			</div>
			<div class="footer-list">
				<div class="footer-info-holder">
					<div class="footer-info">
						<h2>Hazel Goldman</h2>
						<p>Founder</p>
						<p>RE/MAX Advance Realty</p>
						<p>Goldman Residential Group</p>
					</div>
					<div class="footer-phone">
						<span class="ai-font-phone"></span>
						<?php echo do_shortcode('[ai_phone href="+1.305.665.7383"]305.665.7383[/ai_phone]')?>
					</div>
					<div class="footer-email">
						<span class="ai-font-envelope-f"></span>
						<?php echo do_shortcode('[mail_to email="hazel@goldmanresidential.com"]hazel@goldmanresidential.com[/mail_to]')?>
					</div>
					<div class="footer-smi">
						<a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
							<span class="ai-font-facebook"></span>
						</a>
						<a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
							<span class="ai-font-twitter"></span>
						</a>
						<a href="[ai_client_zillow]" target="_blank" aria-label="zillow">
							<span class="ai-font-zillow"></span>
						</a>
						<a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
							<span class="ai-font-instagram"></span>
						</a>
						<a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
							<span class="ai-font-youtube"></span>
						</a>
						<a href="[ai_client_linkedin]" target="_blank" aria-label="linkedin">
							<span class="ai-font-linkedin"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="footer-list">
			<div class="footer-info-holder">
					<div class="footer-info">
						<h2>Evan Goldman</h2>
						<p>President</p>
						<p>RE/MAX Advance Realty</p>
						<p>Goldman Residential Group</p>
					</div>
					<div class="footer-phone">
						<span class="ai-font-phone"></span>
						<?php echo do_shortcode('[ai_phone href="+1.305.607.8880"]305.607.8880[/ai_phone]')?>
					</div>
					<div class="footer-email">
						<span class="ai-font-envelope-f"></span>
						<?php echo do_shortcode('[mail_to email="evan@goldmanresidential.com"]evan@goldmanresidential.com[/mail_to]')?>
					</div>
					<div class="footer-smi">
						<a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
							<span class="ai-font-facebook"></span>
						</a>
						<a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
							<span class="ai-font-twitter"></span>
						</a>
						<a href="[ai_client_zillow]" target="_blank" aria-label="zillow">
							<span class="ai-font-zillow"></span>
						</a>
						<a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
							<span class="ai-font-instagram"></span>
						</a>
						<a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
							<span class="ai-font-youtube"></span>
						</a>
						<a href="[ai_client_linkedin]" target="_blank" aria-label="linkedin">
							<span class="ai-font-linkedin"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
		<div class="footer-text">
			<p>Goldman Residential Group is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at <?php echo do_shortcode('[ai_phone href="+1.305.665.7383"]305.665.7383[/ai_phone]')?> or <?php echo do_shortcode('[ai_phone href="+1.305.607.8880"]305.607.8880[/ai_phone]')?> to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
		</div>
		<div class="footer-copyright">
			<p class="copyright">Copyright © <?php echo do_shortcode('[currentYear]')?> <span class="sitename"> Goldman Residential Group. </span>All rights reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a> | <?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?></p>
			<div class="footer-bottom-holder">
				<div class="footer-bottom-logo">
					<img class="img-responsive lazyload" alt="footer-logos" src="<?php echo get_stylesheet_directory_uri()?>/images/footer-logo-3.png">
				</div>
				<div class="mls">
					<em class="ai-font-eho" title="MLS"></em>
					<em class="ai-font-realtor-mls" title="MLS"></em>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>