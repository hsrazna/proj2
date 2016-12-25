<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content.
 *
 * @package Houzez
 * @since Houzez 1.0
 */
$copy_rights = houzez_option('copy_rights');
global $houzez_local;
?>

<?php if ( !is_page_template( 'template/template-splash.php' ) ) { ?>

    <?php if( !is_singular( 'property' ) ) { ?>
    </div> <!--Start in header-->
    <?php } ?>
</div> <!--Start in header end #section-body-->

<?php get_template_part('template-parts/scroll-to-top'); ?>

<!--start footer section-->
<footer id="footer-section">
    
    <?php get_template_part('template-parts/footer'); ?>

    <div class="footer-bottom">

    	<div class="container">
            <div class="row">
                <?php if( !empty($copy_rights) ) { ?>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p><?php echo ( $copy_rights ); ?></p>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
	                        <?php
							// Pages Menu
							if ( has_nav_menu( 'footer-menu' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'footer-menu',
									'container' => '',
									'container_class' => '',
									'menu_class' => '',
									'menu_id' => 'footer-menu',
									'depth' => 1
								));
							endif;
							?>
						</div>

                    </div>
                </div>
                <?php if( houzez_option('social-footer') != '0' && houzez_option('fs-facebook') != '' || houzez_option('fs-twitter') != '' || houzez_option('fs-linkedin') != '' || houzez_option('fs-googleplus') != '' || houzez_option('fs-instagram') != '' ): ?>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col foot-social">
                        <p>
                            <?php echo $houzez_local['follow_us']; ?>
                           
                            <?php if( houzez_option('fs-facebook') != '' ){ ?>
					        	<a target="_blank" href="<?php echo esc_url(houzez_option('fs-facebook')); ?>"><i class="fa fa-facebook-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-twitter') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-twitter')); ?>"><i class="fa fa-twitter-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-linkedin') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-linkedin')); ?>"><i class="fa fa-linkedin-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-googleplus') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-googleplus')); ?>"><i class="fa fa-google-plus-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-instagram') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-instagram')); ?>"><i class="fa fa-instagram"></i></a>
					        <?php } ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>

    </div><!-- End footer bottom -->

</footer>
<!--end footer section-->
<?php } // End splash template if ?>
<?php if ( qtrans_getLanguage() == 'en' ) {?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-daterangepicker/moment.min.ru.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-daterangepicker/daterangepicker.ru.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ls-common.js"></script>


<?php wp_footer(); ?>
<script type="text/javascript">
// jQuery(document).ready(function(){
//     alert(1);
// });
    // alert(1);
</script>
</body>
</html>