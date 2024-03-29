<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage twentyten
 * @since twentyten 1.0
 */
?>
<footer>
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-4 col-xs-12">
<?php dynamic_sidebar('first-footer-widget-area'); ?>	
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<?php dynamic_sidebar('second-footer-widget-area'); ?>	
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<?php dynamic_sidebar('third-footer-widget-area'); ?>	

</div>
<div class="col-md-6 col-sm-12 col-xs-12">
<div class="stay_touch">
<h2>Stay in touch</h2>
<p>Subscribe to our newsletter and get a <strong>$10 voucher</strong> for your next purchase* </p>
<form>
<input type="email" placeholder="Enter Your email address...">
<button>SUBMIT</button>
</form>

<?php dynamic_sidebar('fifth-footer-widget-area'); ?>	

</div>
</div>
</div>
<div class="top_brands">
<h2>Our Top Brands</h2>
<ul>
<?php
$terms = get_terms( array(
    'taxonomy' => 'product_brand',
    'hide_empty' => false,
) );

foreach ( $terms as $term ) {
     echo "<li><a href='".site_url()."/brand/".$term->slug."'>" . $term->name . "</a></li>";
}
?>
<span class="clearfix"></span>
</ul>
</div>
</div>
</footer>
<div class="copyright text-center">
<div class="container">
BUBznMUMZ © 2020 All RIGHTS ARE RESERVED.
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.equalheights.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>

<?php //if(is_product_category()){ ?>
<script>
jQuery( document ).ajaxComplete(function() {
  if(jQuery( "ul.products").find('div').hasClass("bapf_no_products")){
   jQuery(".bapf_no_products").css('width','100%');
   jQuery(".products_outer_box").css('margin-top','0px');
   jQuery(".sort_bar").hide();
   jQuery(".product_info2").hide();
  }else{
   jQuery(".products_outer_box").css('margin-top','200px');
   jQuery(".sort_bar").show();
   jQuery(".product_info2").show();  
  }
 });	
 jQuery(document).ready(function(){
  jQuery('.xoo-el-tabs').css('display','none');
  jQuery(".xoo-el-header").append(" <span ='xoo-form-heading'>Log in to your account</span><br><span class='continue-with'>Continue with</span><div class='social-login-sectioin'><div class='facebooklogin'><img src='https://woocommerce-427082-1340050.cloudwaysapps.com/wp-content/uploads/2020/08/Facebook-Button.png'></div><div class='googlelogin'><img src='https://woocommerce-427082-1340050.cloudwaysapps.com/wp-content/uploads/2020/08/Gogole-Button.png'></div></div><div class='seprete-section'>OR</div>");
  jQuery(".xoo-el-login-btn").html('Log in');
  jQuery('.xoo-el-form-label').css('display','none');
  jQuery(".xoo-el-action-form").append("<div class='section-signup'><span class='txt-gray'>Don't have an account?</span><a href='javascript:void(0);' class='signupform'>Sign Up</a></div>");
  jQuery(".xoo-el-action-form").append("<span class='back-button' style='display:none'><a href='javascript:void(0);' class='loginform'>Back</a></span>");
    jQuery(".signupform").click(function(){
        jQuery(".xoo-el-register-ph").trigger('click');
        jQuery(".section-signup").css('display','none');
        jQuery(".back-button").css('display','block');
    });
    jQuery(".loginform").click(function(){
        jQuery(".xoo-el-login-ph").trigger('click');
        jQuery(".section-signup").css('display','block');
        jQuery(".back-button").css('display','none');
  });
  jQuery(".form-onchkout .woocommerce-form-login__submit").html('Continue');
  jQuery(".form-onchkout .woocommerce-form-row input[type=text]:first").attr("placeholder", "Email Address..");
  jQuery(".form-onchkout .woocommerce-form-row input[type=password]:first").attr("placeholder", "Password");
  jQuery('.woocommerce-form-login-toggle').css('display','none');
  
  
  
  

  // jQuery(".xoo-el-login-btn").after(jQuery(".xoo-el-login-btm-field"));
  // jQuery(".xoo-el-login-btn").before(jQuery(".xoo-el-login-btm-fields"));
 });
 
</script>	
<?php // } ?>
<?php wp_footer(); ?>
</body>
</html>
