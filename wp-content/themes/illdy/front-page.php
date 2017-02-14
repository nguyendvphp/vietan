<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */


get_header();


if( get_option( 'show_on_front' ) == 'posts' ): ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<section id="blog">
					<?php do_action( 'illdy_above_content_after_header' ); ?>
					<?php
					if( have_posts() ):
						while( have_posts() ):
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					<?php do_action( 'illdy_after_content_above_footer' ); ?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->
			<?php get_sidebar(); ?>
		</div><!--/.row-->
	</div><!--/.container-->

<?php
else:

	$sections_order_first_section = get_theme_mod( 'illdy_general_sections_order_first_section', 1 );
	$sections_order_second_section = get_theme_mod( 'illdy_general_sections_order_second_section', 2 );
	$sections_order_third_section = get_theme_mod( 'illdy_general_sections_order_third_section', 3 );
	$sections_order_fourth_section = get_theme_mod( 'illdy_general_sections_order_fourth_section', 4 );
	$sections_order_fifth_section = get_theme_mod( 'illdy_general_sections_order_fifth_section', 5 );
	$sections_order_sixth_section = get_theme_mod( 'illdy_general_sections_order_sixth_section', 6 );
	$sections_order_seventh_section = get_theme_mod( 'illdy_general_sections_order_seventh_section', 7 );
	$sections_order_eighth_section = get_theme_mod( 'illdy_general_sections_order_eighth_section', 8 );
	
	if( have_posts() ):
		while( have_posts() ): the_post();
			$static_page_content = get_the_content();
			if ( $static_page_content != '' ) : ?>
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h3><?php the_title(); ?></h3>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<?php echo $static_page_content; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif;
		endwhile;
	endif;
?>
<div id="arousel_1" class="owl-carousel one_col owl-theme owl-center owl-loaded">
    <div class="item "><a href="http://hoathienphu.com.vn/nha-may-hoa-thien-phu-binh-duong-tu-hao-dat-chuan-cgmp-asean.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/10/banner_1920x760-3a.jpg" alt=""></a></div>
    <div class="item "><a href="http://hoathienphu.com.vn/du-phat-trien-vung-duoc-lieu-ben-vung-tai-nam-dinh.html" title=""><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/06/VungDuocLieu_1.jpg" alt=""></a></div>
    <div class="item "><a href="http://hoathien.vn/kem-got-hong-hoa-thien" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/11/Banner_GotHong_1920x760-1.jpg" alt=""></a></div>
</div>
<div class="container">
        <div class="slideContent">
            <div id="arousel_2" class="owl-carousel owl-theme owl-loaded">
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/phu-nu/sac-ngoc-khang.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/07/logo_snk.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/phu-nu/kem-finomas.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/07/logo_fnm.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/phu-nu/an-nu-dan.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/07/logo_annudan.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/phu-nu/hoang-to-nu.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/07/logo_htn.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/trung-nien-va-nguoi-cao-tuoi/ngu-ngon-bach-linh.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/08/logo_bl-.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href="http://hoathienphu.com.vn/san-pham/cac-san-pham-khac/happy-xoang.html" title="" target="_blank"><img src="http://hoathienphu.com.vn/wp-content/uploads/2016/07/logo_hpxoang.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
<?php
	if( $sections_order_first_section ):
		illdy_sections_order( $sections_order_first_section );
	endif;

	if( $sections_order_second_section ):
		illdy_sections_order( $sections_order_second_section );
	endif;

	if( $sections_order_third_section ):
		illdy_sections_order( $sections_order_third_section );
	endif;

	if( $sections_order_fourth_section ):
		illdy_sections_order( $sections_order_fourth_section );
	endif;

	if( $sections_order_fifth_section ):
		illdy_sections_order( $sections_order_fifth_section );
	endif;

	if( $sections_order_sixth_section ):
		illdy_sections_order( $sections_order_sixth_section );
	endif;
	
	if( $sections_order_seventh_section ):
		illdy_sections_order( $sections_order_seventh_section );
	endif;

	if( $sections_order_eighth_section ):
		illdy_sections_order( $sections_order_eighth_section );
	endif;
    
    ?>
    
    <div style="background-image: url(http://hoathienphu.com.vn/wp-content/uploads/2016/05/vung-trong-duoc-lieu.jpg);  background-position: 30% 47%;   background-repeat: no-repeat;" id="box_9">
        <div class="container">
            <div class="video_box">
                <div class="vung-nguyen-lieu"><h3 class="gt-title">Vùng dược liệu theo tiêu chuẩn GACP-WHO tại Nam Định</h3>
                    <div>
                        <div class="hethong">
                        <div class="row">
                        <div class="col-lg-6">
                        </div></div></div>
                    </div>
                </div>
                <div class="">
                    <div id="video_9" class="video-holder">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="embed-responsive-item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        
        
        </div>
        <div class="danhhieu">
            <div class="container">
                <div class="htmlContent owl-carousel owl-theme owl-loaded" id="arousel_3">
                    <div class="row item ">
                        <div class="col-lg-6 text-left">
                            <h3>
                                    Doanh nghiệp nhiều đóng góp cho xã hội
                            </h3>
                            <h4><p style="text-align: justify;">Năm 2014</p></h4>
                        </div>
                        <div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/7-1.png"></div>
                    </div>
                    <div class="row item ">
                        <div class="col-lg-6 text-left">
                            <h3>
                                  Sản phẩm vàng vì sức khỏe cộng đồng
                            </h3>
                            <h4><p style="text-align: justify;">Hiệp hội thực phẩm chức năng Việt Nam trao tặng</p></h4>
                        </div>
                        <div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/4-1.png"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
endif;

get_footer(); ?>