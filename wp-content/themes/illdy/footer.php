<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
	$img_footer_logo   = get_theme_mod( 'illdy_img_footer_logo', esc_url( get_template_directory_uri() . '/layout/images/footer-logo.png' ) );
} else {
	$footer_copyright  = get_theme_mod( 'illdy_footer_copyright' );
	$img_footer_logo   = get_theme_mod( 'illdy_img_footer_logo' );
}
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			);
			?>
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ):
					dynamic_sidebar( 'footer-sidebar-1' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Products', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Our work', 'illdy' ) . '">' . __( 'Our work', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Club', 'illdy' ) . '">' . __( 'Club', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'News', 'illdy' ) . '">' . __( 'News', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Announcement', 'illdy' ) . '">' . __( 'Announcement', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-2' ) ):
					dynamic_sidebar( 'footer-sidebar-2' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Information', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Pricing', 'illdy' ) . '">' . __( 'Pricing', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Terms', 'illdy' ) . '">' . __( 'Terms', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Affiliates', 'illdy' ) . '">' . __( 'Affiliates', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Blog', 'illdy' ) . '">' . __( 'Blog', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-3' ) ):
					dynamic_sidebar( 'footer-sidebar-3' );
				elseif ( current_user_can( 'edit_theme_options' ) ):
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Support', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Documentation', 'illdy' ) . '">' . __( 'Documentation', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'FAQs', 'illdy' ) . '">' . __( 'FAQs', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Forums', 'illdy' ) . '">' . __( 'Forums', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Contact', 'illdy' ) . '">' . __( 'Contact', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<?php if ( $img_footer_logo ): ?>
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="footer-logo"><img src="<?php echo esc_url( $img_footer_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
				<?php endif; ?>
				<p class="copyright">
					<span data-customizer="copyright-credit"><?php printf( '%s <a href="%s" title="%s" target="_blank">%s</a>.', __( 'Theme:', 'illdy' ), esc_url( 'http://colorlib.com/wp/themes/illdy' ), __( 'Illdy', 'illdy' ), __( 'Illdy', 'illdy' ) ); ?></span>
				</p>
				<span><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
			</div><!--/.col-sm-3-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer><!--/#footer-->


<?php wp_footer(); ?>

                    
        
                        <script type="text/javascript">
                            $(document).ready(function(){
                            	$("#video_9").click(function(){
                            		$("#video_9").find(".embed-responsive-16by9").css({background: '#000'});
                            		$("#video_9").find(".embed-responsive").html('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4EDqMpFkx0c?showinfo=0&iv_load_policy=3&modestbranding=1&nologo=1&autoplay=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>');
                            	});
                            })
                        </script>
                                        
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#arousel_1").owlCarousel({
                                    loop:true,
                                    margin:0,
                                    dots:true,
                                    nav: false,
                                    animateOut: 'fadeOut',
                                    autoplay: true,
                                    video:true,
                                    autoHeight : true,
                                    center:true,
                                    autoplayHoverPause: true,
                                    responsive:{
                                        0:{
                                            items:1
                                        },
                                        1200:{
                                            items:1
                                        }
                                    }
                                })
                            })
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                            	$("#arousel_2").owlCarousel({
                            		loop:true,
                            		margin:0,
                            		dots:false,
                            		nav: true,
                            		loop: true,
                            		autoplay: false,
                            		autoplayHoverPause: true,
                            		navText: ["<span class='icon_pre'></span>","<span class='icon_next'></span>"],
                            		responsive:{
                            			0:{
                            				items:1
                            			},
                            			600:{
                            				items:5
                            			},
                            			1200:{
                            				items:5
                            			}
                            		}
                            	})
                            })
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                            	$("#arousel_3").owlCarousel({
                            		loop:true,
                            		margin:0,
                            		dots:false,
                            		nav: true,
                            		video:true,
                            		loop: true,
                            		autoplay: false,
                            		autoplayHoverPause: true,
                            		navText: ["<span class='icon_pre'></span>","<span class='icon_next'></span>"],
                            		responsive:{
                            			0:{
                            				items:1
                            			},
                            			1200:{
                            				items:1
                            			}
                            		}
                            	})
                            })
                        </script>
                    
</body>
</html>