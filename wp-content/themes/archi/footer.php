<?php
/**
 * The template for displaying the footer
 */
 global $archi_option;
?>
<?php
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/footers/footer-sidenav');
    }else{
?>
	<!-- footer begin -->
	<footer <?php if ( !is_active_sidebar( 'footer-area-1' ) && !is_active_sidebar( 'footer-area-2' ) && !is_active_sidebar( 'footer-area-3' ) && !is_active_sidebar( 'footer-area-4' ) ){ ?>class="no-padding"<?php } ?> >

		<?php if ( is_active_sidebar( 'footer-area-1' ) || is_active_sidebar( 'footer-area-2' ) || is_active_sidebar( 'footer-area-3' ) || is_active_sidebar( 'footer-area-4' ) ){ ?>
			<div class="main-footer">
	            <div class="container">
	                <div class="row">
	                    <?php get_sidebar('footer');?>
	                </div>
	            </div>
	        </div>
		<?php } ?>

		<div class="subfooter <?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){echo 'padtop80 padbottom80 footer-2';} ?>">
			<div class="container">
				<div class="row">
					<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=="footer2" ){ ?>
						<div class="col-md-3">
	                        <img src="<?php echo esc_url($archi_option['logo_footer']['url']); ?>" class="logo-small" alt=""><br>
	                    </div>
					<?php } ?>
					<div class="col-md-6">
						<?php echo htmlspecialchars_decode( do_shortcode( $archi_option['footer_text'] ) ); ?>
					</div>

					<?php if($archi_option['switch_footer_social']!=false){ ?>
						<div class="<?php if(isset($archi_option['footer_layout']) and $archi_option['footer_layout']=='footer2' ){echo 'col-md-3';}else{echo 'col-md-12';} ?> text-center">
							<div class="social-icons">
								<ul>
                  <ul>
										<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										<li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li><a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
										<li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
										<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>

	                            </ul>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<a id="back-to-top" href="#" class="show"></a>
	</footer>

</div><!-- #wrapper -->

<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
