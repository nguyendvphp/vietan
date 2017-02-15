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
                <?php
                $args = array(
            		'post_type'      => 'logocarousel', 
            		'posts_per_page' => -1 
            	);
                $lcsImageCrop = lcs_get_option( 'lcs_ic', 'lcs_general_settings', 'yes' );
            	$lcsImageCropWidth = lcs_get_option( 'lcs_iwfc', 'lcs_general_settings', '185' );
            	$lcsImageCropHeight = lcs_get_option( 'lcs_ihfc', 'lcs_general_settings', '119' );
            	$lcsLogoItems = lcs_get_option( 'lcs_lig', 'lcs_general_settings', '5' );
            	$loop = new WP_Query( $args );
                if ( $loop->have_posts() ):
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $post_id = get_the_ID();
            	        $lcs_logo_link = get_post_meta( $post_id, 'lcs_logo_link', true );
            
            			$lcs_logo_id = get_post_thumbnail_id();
            			$lcs_logo_url = wp_get_attachment_image_src($lcs_logo_id,'full',true);
            			$lcs_logo_mata = get_post_meta($lcs_logo_id,'_wp_attachment_image_alt',true);
            			$lcs_logo = aq_resize( $lcs_logo_url[0], $lcsImageCropWidth, $lcsImageCropHeight, true );
                ?>
                <div class="item"><a href="<?php echo $lcs_logo_link; ?>" class="lcs_logo_link" target="_blank">
	            	<?php 
	            	if ( $lcsImageCrop == "yes" ) {
	            		echo '<img src="'.$lcs_logo.'" alt="'. $lcs_logo_mata . '" />'; 
					} else {
						echo '<img src="'.$lcs_logo_url[0].'" alt="'. $lcs_logo_mata . '" />';
					}
	            	?>
	            </a></div>
                <?php endwhile; wp_reset_postdata(); ?>
        	    <?php else: 
        		_e('No logos found', 'logo-carousel-slider');
        	    endif; ?>
                
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
    //echo do_shortcode("[logo_carousel_slider]"); 
    ?>
    <div class="grey_bg">
        <div id="news" class="container">
            <div class="row">
                <?php
				if ( is_active_sidebar( 'block-post-by-cate-1' ) ):
					dynamic_sidebar( 'block-post-by-cate-1' );
				endif;
				?>
                <!--<div class="col-lg-4 feature" id="style1_box">
                    <h3 class="title feature"><div>Tư vấn chuyên gia</div></h3>
                    <div class="thumbnail-box">
                        <a href="http://hoathienphu.com.vn/doi-ngu-chuyen-gia-co-van-chuyen-mon.html">
                            <img width="360" height="180" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/987/duocsy-e1471499105144-360x180-c.png" class="img-round" alt="duocsy"/>
                        </a>
                    </div>
                    <ul class="blue-bg">
                        <li class="top-item">
                            <h4>
                                <a href="http://hoathienphu.com.vn/doi-ngu-chuyen-gia-co-van-chuyen-mon.html">Đội ngũ chuyên gia cố vấn chuyên môn</a>
                            </h4>
                            <p class="except">Hoa Thiên Phú hiện nay đang là một hệ thống phát triển mạnh mẽ, nhanh chóng và là một trong…</p>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/chuyen-gia-tu-van-da-lieu-huynh-huy-hoang-cho-rang-nam-da-phai-tri-tu-goc.html">
                                    <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/532/IMG_9141-520x347-50x50-c.jpg" class="product-thumb" alt="IMG_9141-520x347">                        </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/chuyen-gia-tu-van-da-lieu-huynh-huy-hoang-cho-rang-nam-da-phai-tri-tu-goc.html">Chuyên gia tư vấn da liễu Huỳnh Huy Hoàng cho rằng: nám da phải trị từ gốc</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/nao-la-mot-nguoi-dan-ong-phong.html">
                                    <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/774/chuyen-gia-bomdin-50x50-c.png" class="product-thumb" alt="chuyen-gia-bomdin">                        </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/nao-la-mot-nguoi-dan-ong-phong.html">Chuyên gia sinh lý nam nói về chuẩn phong độ</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/chuyen-gia-tu-van-sinh-ly-cho-rang-hieu-dung-ve-noi-tiet-nu-de-phu-nu-khoe-dep-hon.html">
                                    <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/534/2-1-50x50-c.jpg" class="product-thumb" alt="2">                        </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/chuyen-gia-tu-van-sinh-ly-cho-rang-hieu-dung-ve-noi-tiet-nu-de-phu-nu-khoe-dep-hon.html">Chuyên gia tư vấn sinh lý nữ nói: Hiểu đúng về nội tiết tố để khỏe đẹp hơn</a></div>
                        </li>
                    </ul>
                </div>-->
                <div class="col-lg-4 feature" id="style1_box">
                    <h3 class="title feature"><div>Hoạt động xã hội</div></h3>           
                    <div class="thumbnail-box">
                        <a href="http://hoathienphu.com.vn/hoa-hau-linh-la-dai-su-thuong-hieu-cua-sac-ngoc-khang.html">
                            <img width="360" height="180" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1300/DSC_0014-360x180-c.jpg" class="img-round" alt="dsc_0014"/>
                        </a>
                    </div>
                    <ul class="blue-bg">
                        <li class="top-item">
                            <h4>
                                <a href="http://hoathienphu.com.vn/hoa-hau-linh-la-dai-su-thuong-hieu-cua-sac-ngoc-khang.html">HOA HẬU ĐỖ MỸ LINH LÀ ĐẠI SỨ THƯƠNG HIỆU CỦA SẮC NGỌC KHANG</a>
                            </h4>
                            <p class="except">Cùng với việc đảm nhận sứ mệnh của Hoa hậu Việt Nam 2016, tân Hoa hậu Đỗ Mỹ Linh cũng…</p>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/voi-sac-ngoc-khang-moi-khach-hang-deu-la-hoa-hau.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1303/DSC_0303-50x50-c.jpg" class="product-thumb" alt="dsc_0303" />
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/voi-sac-ngoc-khang-moi-khach-hang-deu-la-hoa-hau.html">VỚI SẮC NGỌC KHANG, MỖI KHÁCH HÀNG ĐỀU LÀ HOA HẬU</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/nguoi-dep-hoa-hau-viet-nam-bi-nha-may-hien-dai-hoac.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1186/DSC2900-50x50-c.jpg" class="product-thumb" alt="_DSC2900"/>
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/nguoi-dep-hoa-hau-viet-nam-bi-nha-may-hien-dai-hoac.html">NGƯỜI ĐẸP HOA HẬU VIỆT NAM BỊ NHÀ MÁY HIỆN ĐẠI “MÊ HOẶC”</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/bua-trua-doc-nhat-vo-nhi-cua-nguoi-dep-hoa-hau-viet-nam-2016.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1217/DSC2958-50x50-c.jpg" class="product-thumb" alt="_DSC2958"/>
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/bua-trua-doc-nhat-vo-nhi-cua-nguoi-dep-hoa-hau-viet-nam-2016.html">BỮA TRƯA “ĐỘC NHẤT VÔ NHỊ” CỦA NGƯỜI ĐẸP HOA HẬU VIỆT NAM 2016</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 feature" id="style1_box">
                    <h3 class="title feature"><div>Bản tin Việt An</div></h3>            
                    <div class="thumbnail-box">
                        <a href="http://hoathienphu.com.vn/nha-may-hoa-thien-phu-binh-duong-tu-hao-dat-chuan-cgmp-asean.html">
                            <img width="360" height="180" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1329/1-360x180-c.png" class="img-round" alt="1"/>
                        </a>
                    </div>
                    <ul class="blue-bg">
                        <li class="top-item">
                            <h4>
                                <a href="http://hoathienphu.com.vn/nha-may-hoa-thien-phu-binh-duong-tu-hao-dat-chuan-cgmp-asean.html">NHÀ MÁY HOA THIÊN PHÚ BÌNH DƯƠNG TỰ HÀO ĐẠT CHUẨN  CGMP – ASEAN</a>
                            </h4>
                            <p class="except">Cuối tháng 9 vừa qua, Nhà máy Hoa Thiên Phú Bình Dương, trực thuộc Công ty CP Dược phẩm Hoa…</p>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/giai-bong-da-giao-huu-giua-hoa-thien-phu-phong-tham-muu-cong-tp-hcm.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1286/13996250_1196852833669441_5771021381014448192_o-50x50-c.jpg" class="product-thumb" alt="13996250_1196852833669441_5771021381014448192_o"/>
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/giai-bong-da-giao-huu-giua-hoa-thien-phu-phong-tham-muu-cong-tp-hcm.html">GIẢI BÓNG ĐÁ GIAO HỮU GIỮA HTP &amp; PHÒNG THAM MƯU C.A TP.HCM</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/het-nam-sang-da-rinh-qua-sanh-dieu-cung-sac-ngoc-khang.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/1273/1-50x50-c.jpg" class="product-thumb" alt="1"/>
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/het-nam-sang-da-rinh-qua-sanh-dieu-cung-sac-ngoc-khang.html">“HẾT NÁM SÁNG DA, RINH QUÀ SÀNH ĐIỆU” CÙNG SẮC NGỌC KHANG</a></div>
                        </li>
                        <li class="icon-item">
                            <div class="hit_des thumbbox">
                                <a href="http://hoathienphu.com.vn/thi-sinh-hoa-hau-viet-nam-2016-tu-tay-dong-goi-sac-ngoc-khang-tai-nha-may-hoa-thien-phu.html">
                                        <img width="50" height="50" src="http://hoathienphu.com.vn/wp-content/uploads/fly-images/990/DSC2607-50x50-c.jpg" class="product-thumb" alt="_DSC2607"/>
                                    </a>
                            </div>
                            <div class="hit_des"><a href="http://hoathienphu.com.vn/thi-sinh-hoa-hau-viet-nam-2016-tu-tay-dong-goi-sac-ngoc-khang-tai-nha-may-hoa-thien-phu.html">Thí sinh Hoa hậu Việt Nam 2016 tự tay đóng gói Sắc Ngọc Khang tại nhà máy Hoa Thiên Phú</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
                    <?php
                    $args_prj = array(
                		'post_type'      => 'wpprojects_portfolio', 
                		'posts_per_page' => -1 
                	);
                    //$lcsImageCrop = lcs_get_option( 'lcs_ic', 'lcs_general_settings', 'yes' );
                	//$lcsImageCropWidth = lcs_get_option( 'lcs_iwfc', 'lcs_general_settings', '185' );
                	//$lcsImageCropHeight = lcs_get_option( 'lcs_ihfc', 'lcs_general_settings', '119' );
                	//$lcsLogoItems = lcs_get_option( 'lcs_lig', 'lcs_general_settings', '5' );
                	$loop_prj = new WP_Query( $args_prj );
                    if ( $loop_prj->have_posts() ):
                        while ( $loop_prj->have_posts() ) : $loop_prj->the_post();
                            $post_id = get_the_ID();
                	        $imageurl = get_post_meta( $post_id, '_imageurl', true );
                            $post_name = get_the_title();
                            $post_content = get_the_content();
                			//$lcs_logo_id = get_post_thumbnail_id();
                			//$lcs_logo_url = wp_get_attachment_image_src($lcs_logo_id,'full',true);
                			//$lcs_logo_mata = get_post_meta($lcs_logo_id,'_wp_attachment_image_alt',true);
                			//$lcs_logo = aq_resize( $lcs_logo_url[0], $lcsImageCropWidth, $lcsImageCropHeight, true );
                    ?>
                    <div class="row item ">
                        <div class="col-lg-6 text-left">
                            <h3>
                                    <?php echo $post_name;?>
                            </h3>
                            <h4><p style="text-align: justify;"><?php echo $post_content;?></p></h4>
                        </div>
                        <div class="col-lg-6"><img alt="" src="<?php echo $imageurl;?>"></div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
            	    <?php else: 
            		_e('No logos found', 'logo-carousel-slider');
            	    endif; ?>
                </div>
            </div>
        </div>
    <?php
endif;

get_footer(); ?>