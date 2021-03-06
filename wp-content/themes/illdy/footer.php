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
    <div class="footer">
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
    				<?php
    				if ( is_active_sidebar( 'footer-sidebar-4' ) ):
    					dynamic_sidebar( 'footer-sidebar-4' );
    				elseif ( current_user_can( 'edit_theme_options' ) ):
    					the_widget( 'WP_Widget_Text', 'title=' . __( 'Support1', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Documentation1', 'illdy' ) . '">' . __( 'Documentation1', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'FAQs1', 'illdy' ) . '">' . __( 'FAQs1', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Forums', 'illdy' ) . '">' . __( 'Forums1', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Contact1', 'illdy' ) . '">' . __( 'Contact1', 'illdy' ) . '</a></li></ul>', $the_widget_args );
    				endif;
    				?>
    			</div><!--/.col-sm-3-->
    		</div><!--/.row-->
    	</div><!--/.container-->
    </div>
</footer><!--/#footer-->
<div class="bottom-footer">
    <div class="wrap container">
        <div class="menu-footer-container">
            <ul id="menu-footer" class="menu">
                <li><a href="http://vietanpharma.com" title="Trang chủ?">Trang chủ</a></li>
                <li id="menu-item-475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-475"><a href="http://vietanpharma.com/thong-tin-lien-he">Thông tin liên hệ</a></li>
            </ul>
        </div>
        <div class="menu-social-container">
            <ul id="menu-social-1" class="menu">
                <li id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98"><a href="https://www.facebook.com/hoathienphu"><i class="fa fa-facebook-official"></i></a></li>
                <li id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99"><a href="https://www.youtube.com/channel/UChBqMZ2sn714EDc3LD4X5yw"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>			
        <div class="textwidget"> <p>Bản quyền thuộc về Việt An.</p></div>
		
    </div>
</div>

<?php wp_footer(); ?>
<script type='text/javascript' src='http://localhost/va/wp-content/themes/illdy/layout/js/scripts.js?ver=1.0.16'></script>
                    
        
                        <script type="text/javascript">
                            jQuery(document).ready(function(){
                            	jQuery("#video_9").click(function(){
                            		jQuery("#video_9").find(".embed-responsive-16by9").css({background: '#000'});
                            		jQuery("#video_9").find(".embed-responsive").html('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4EDqMpFkx0c?showinfo=0&iv_load_policy=3&modestbranding=1&nologo=1&autoplay=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>');
                            	});
                            })
                        </script>
                                        
                        <script type="text/javascript">
                            jQuery(document).ready(function(){
                                jQuery("#arousel_1").owlCarousel({
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
                            jQuery(document).ready(function(){
                            	jQuery("#arousel_2").owlCarousel({
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
                            jQuery(document).ready(function(){
                            	jQuery("#arousel_3").owlCarousel({
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
                        <script type="text/javascript">
                            var stickyOffset = jQuery('.top-header').offset().top;
                        	var menuOffset = jQuery('.navbar-related-top').offset().top;
                        
                        
                            jQuery(window).scroll(function(){
                                var sticky = jQuery('.top-header'),
                        			menusticky = jQuery('.navbar-related-top'),
                                    scroll = jQuery(window).scrollTop();
                        
                                if (scroll >= stickyOffset){
                                    sticky.addClass('fixed');
                                }
                                else{
                                    sticky.removeClass('fixed');
                                }
                        
                                /*
                        		if (scroll >= 125){
                        			menusticky.addClass('fixed');
                        		}
                        		else{
                        			menusticky.removeClass('fixed');
                        		}
                                */
                        
                            });
                        </script>
                        <script>
                        /**
                         *	jQuery Document Ready
                         */
                        jQuery( document ).ready( function($) {
                        	var windowWidth = $( window ).width();
                        	var windowHeight = $( window ).height();
                        	var documentWidth = $( document ).width();
                        	var documentHeight = $( document ).height();
                        
                        	// Open Responsive Menu
                        	function openResponsiveMenu() {
                        		$( '.open-responsive-menu' ).click( function() {
                        			$( '.responsive-menu' ).toggle( 'slow', function() {
                        				$( this ).toggleClass( 'active' );
                        			});
                        		});
                        	}
                        
                        	// Sub Menu
                        	function subMenu() {
                        		$( '#header .top-header .header-navigation ul li.menu-item-has-children' ).hover( function() {
                        			$( this ).children( 'ul' ).css( 'visibility', 'visible' ).fadeIn();
                        		}, function() {
                        			$( this ).children( 'ul' ).css( 'visibility', 'hidden' ).fadeOut();
                        		});
                        	}
                        
                        	// Align Sub Sub Menu
                        	function alignSubSubMenu() {
                        		if( $( '#header .top-header .header-navigation ul li.menu-item-has-children' ).length ) {
                        			var subSubMenu = $( '#header .top-header .header-navigation ul li.menu-item-has-children ul' );
                        
                        			$( subSubMenu ).each( function() {
                        				if( ( windowWidth - $( this ).offset()['left'] ) < 250 ) {
                        					$( this ).css( 'left', '-250px' );
                        				}
                        			});
                        		}
                        	}
                        
                        	// WooCommerce Tabs
                        	function woocommerceTabs() {
                        		var descriptionTab = $( 'li.description_tab' );
                        		var descriptionTabLink = $( 'li.description_tab a' );
                        		var reviewsTab = $( 'li.reviews_tab' );
                        		var reviewsTabLink = $( 'li.reviews_tab a' );
                        		var panelDescription = $( '.panel#tab-description' );
                        		var panelReviews = $( '.panel#tab-reviews' );
                        
                        		$( descriptionTabLink ).click( function() {
                        			$( this ).parent().addClass( 'active' );
                        			$( reviewsTab ).removeClass( 'active' );
                        			$( panelDescription ).show();
                        			$( panelReviews ).hide();
                        		});
                        
                        		$( reviewsTabLink ).click( function() {
                        			$( this ).parent().addClass( 'active' );
                        			$( descriptionTab ).removeClass( 'active' );
                        			$( panelReviews ).show();
                        			$( panelDescription ).hide();
                        		});
                        	}
                        
                        	// Called Functions
                        	$( function() {
                        		
                        		openResponsiveMenu();
                        		subMenu();
                        		alignSubSubMenu();
                        		woocommerceTabs();
                        	});
                        });
                        </script>
                    
</body>
</html>