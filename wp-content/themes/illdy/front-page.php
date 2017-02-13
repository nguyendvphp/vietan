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
        <div class="danhhieu"><div class="container">
        <div class="htmlContent  owl-carousel owl-theme owl-loaded" id="arousel_3">
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2120px, 0px, 0px); transition: all 0.25s ease 0s; width: 14840px;"><div class="owl-item cloned" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                        Doanh nghiệp nhiều đóng góp cho xã hội
                        </h3>
                        <h4><p style="text-align: justify;">Năm 2014</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/7-1.png"></div></div></div><div class="owl-item cloned" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                          Sản phẩm vàng vì sức khỏe cộng đồng
                        </h3>
                        <h4><p style="text-align: justify;">Hiệp hội thực phẩm chức năng Việt Nam trao tặng</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/4-1.png"></div></div></div><div class="owl-item active" ><div class="row item active"><div class="col-lg-6 text-left"><h3>
                            Danh hiệu &amp; Giải Thưởng
                        </h3>
                        <p style="text-align: justify;">Với quá trình lao động và sáng tạo một cách nghiêm túc dựa trên quyền lợi của khách hàng và người tiêu dùng, sau gần 5 năm hoạt động và phát triển, Hoa Thiên Phú đã chứng tỏ được vị thế của mình trên thị trường dược phẩm Việt Nam bằng những danh hiệu và giải thưởng là hàng Việt Nam chất lượng cao.</p></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/04/chungnhan.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                         Thương hiệu xuất sắc 2013
                        </h3>
                        <h4><p style="text-align: justify;">Siro ăn ngon Hoa Thiên</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/5-2.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                          Hàng Việt Nam chất lượng cao 2013
                        </h3>
                        <h4><p style="text-align: justify;">Do người tiêu dùng bình chọn</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/9-2.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                         Hàng Việt tốt 2014
                        </h3>
                        <h4><p style="text-align: justify;">Do người tiêu dùng bình chọn</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/8-2.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                        Top 100 sản phẩm-dịch vụ tốt nhất 2014
                        </h3>
                        <h4><p style="text-align: justify;">Chức năng gan Bảo Nguyên và Sắc Ngọc Khang</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/1-1.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                        Hàng Việt Nam chất lượng cao 2015
                        </h3>
                        <h4><p style="text-align: justify;">Do người tiêu dùng bình chọn</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/6-1.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                        Top 20 sản phẩm, dịch vụ tin cậy vì người tiêu dùng
                        </h3>
                        <h4><p style="text-align: justify;">Sản phẩm Sắc Ngọc Khang và Siro ăn ngon Hoa Thiên</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/3-1.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                         Sản phẩm vì sức khỏe cộng đồng
                        </h3>
                        <h4><p style="text-align: justify;">Sắc Ngọc Khang và Siro ăn ngon Hoa Thiên</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/2-3.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                        Doanh nghiệp nhiều đóng góp cho xã hội
                        </h3>
                        <h4><p style="text-align: justify;">Năm 2014</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/7-1.png"></div></div></div><div class="owl-item" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                          Sản phẩm vàng vì sức khỏe cộng đồng
                        </h3>
                        <h4><p style="text-align: justify;">Hiệp hội thực phẩm chức năng Việt Nam trao tặng</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/4-1.png"></div></div></div><div class="owl-item cloned" ><div class="row item"><div class="col-lg-6 text-left"><h3>
                            Danh hiệu &amp; Giải Thưởng
                        </h3>
                        <p style="text-align: justify;">Với quá trình lao động và sáng tạo một cách nghiêm túc dựa trên quyền lợi của khách hàng và người tiêu dùng, sau gần 5 năm hoạt động và phát triển, Hoa Thiên Phú đã chứng tỏ được vị thế của mình trên thị trường dược phẩm Việt Nam bằng những danh hiệu và giải thưởng là hàng Việt Nam chất lượng cao.</p></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/04/chungnhan.png"></div></div></div><div class="owl-item cloned" ><div class="row item "><div class="col-lg-6 text-left"><h3>
                         Thương hiệu xuất sắc 2013
                        </h3>
                        <h4><p style="text-align: justify;">Siro ăn ngon Hoa Thiên</p></h4></div><div class="col-lg-6"><img alt="" src="http://hoathienphu.com.vn/wp-content/uploads/2016/05/5-2.png"></div></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><span class="icon_pre"></span></div><div class="owl-next" style=""><span class="icon_next"></span></div></div><div style="display: none;" class="owl-dots"></div></div></div></div></div>
    <?php
endif;

get_footer(); ?>