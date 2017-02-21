<?php
/*
Plugin Name: Agency Info Search
Plugin Author: Nguyendv
Description: Plugin agency info search oncash
Version: 1.0
*/
add_action( 'wp_ajax_get_post_city', 'ajax_get_post_city' );
add_action( 'wp_ajax_nopriv_get_post_city', 'ajax_get_post_city' );
function ajax_get_post_city() 
{
    if(!empty($_POST['country_id']))
    {
        $country_id = $_REQUEST['country_id'] ? $_REQUEST['country_id']: '';
        $citys = $wpdb->get_results( 'SELECT * FROM va_city WHERE country_id = "'.$country_id.'"', ARRAY_A );
        //echo '<pre>'; var_dump($citys); die;

        echo json_encode( $citys );
    }	

    die();
}
function get_post_city() {
    global $wpdb;
    $country_id = $_REQUEST['country_id'] ? $_REQUEST['country_id']: '';
    $citys = $wpdb->get_results( 'SELECT * FROM va_city WHERE country_id = "'.$country_id.'"', ARRAY_A );
    echo '<pre>'; var_dump($citys); die;
    $strHTML = '';
    if (count($citys) >0) {
        foreach ($citys as $ct) {
            $strHTML .= '<option value="'.$ct[id].'">"'.$ct[name].'"</option>';
        }
    }
    echo $strHTML; die;
}
add_action('wp_ajax_example_ajax_request', 'get_post_city');
// adds a City dropdown and district dropdown to the search form
function my_search_agency_info( $form ) {
	ob_start(); ?>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
				<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
			</label>
			<?php
            global $wpdb;
            $results = $wpdb->get_results( 'SELECT * FROM va_country WHERE status = 1', ARRAY_A );//var_dump($results); die;
			?>
            <select id="country" name="country" onchange="filterCity();">
                <option value="">Chọn đất nước</option>
                <?php
                foreach ($results as $c) {
                ?>
                <option value="<?php echo $c[country_id];?>"><?php echo $c[name];?></option>
                <?php
                }
                ?>
            </select>
            <select id="city" name="city">
                <option value="">Chọn Tinh/Thanh pho</option>
            </select>
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
		</form>
	<?php return ob_get_clean();
}
add_shortcode( 'get_search_form', 'my_search_agency_info' );

?>
