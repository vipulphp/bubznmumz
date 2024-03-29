<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
-<header class="woocommerce-products-header">
	<?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php //woocommerce_page_title(); ?></h1>
	<?php //endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	//do_action( 'woocommerce_archive_description' );
	?>
	<?php 
	do_action('woocommerce_cstom_banner');
	?>
</header> 


<div class="wrap-loop">
	<div class="container">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 sticky-sidebar">
<div class="product_filters">
<h2>FILTER BY : <i class="fa fa-angle-down visible-xs" aria-hidden="true"></i></h2>			
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>
</div>
</div>

<?php
if ( woocommerce_product_loop() ) {
?>        
		<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
			<div class="product_list_content">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="sort_bar">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <div class="product_heading">
                    <?php echo get_the_title(); ?>
                  </div>
                </div>	
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					<div class="right_filter pull-right">
    <?php      
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );
?>
            <div class="row-column-switcher">
              <select name="column-switcher" class="column-switcher">
					<option value="menu_order" selected="selected">Columns Per Row</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
			</select>
          </div>
</div>
</div>
</div>
</div>
</div>

<?php
	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();
?>        
 
<div class="col-md-12 col-xs-12">
            <div class="row">
                <div class="margin_130">
                  <div class="sort_bar">
                    <div class="col-md-12 col-xs-12">
                      <div class="right_filter pull-right">         
  <?php        
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
?>
  <div id="top_link" class="pull-left">
                            Back TO TOP
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
          </div>

</div>
</div>

</div>
	<div class="row">
	<?php	
		do_action( 'shop_page_description' );
	?>
	</div>
</div>	
<?php	
} else {
?>
		<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">

<?php	
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
 ?>
            </div>
<?php    
}
?>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php
get_footer( 'shop' );
