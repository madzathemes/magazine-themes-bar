<?php
/*
Plugin Name: Magazine Themes Bar
Plugin URI: https://themeforest.net
Description: Magazine Theme Bar settings
Author: Madars Bitenieks
Version: 1.0
Author URI: https://themeforest.net
*/

function magazine_themes_bar() { if(!is_user_logged_in()) { ?>
  <div class="mtc-d hide-mobile mt-d-on">
    <div class="mtc-d-close">Close</div>
    <div class="mtc-d-open">Demos</div>
    <div class="mtc-d-in">
    <div class="mtc-d-text">
      <div class="mtc-d-o">SETTINGS</div>
      <a href="https://themeforest.net/item/magazine-a/17016507?ref=magazine-themes" target="_blank" title="Buy Now">Buy BoomNews Now</a>
      <h4>GET AN AWESOME START!</h4>
      <p>
        With easy <strong>ONE CLICK INSTALL</strong> and fully customizable options, our demos are the best start you'll ever get!!
      </p>
    </div>
    <a class="mtc-demo-1" href="http://boomnews.magazinethemes.staging.wpengine.com/"><div><img src="http://boomnews-magazine-themes-net.magazinethemes.staging.wpengine.com/wp-content/uploads/sites/2/2016/12/bd-1-1.jpg"/></div></a>
    <a class="mtc-demo-2" href="http://boomnewscraft.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_craft2.jpg"/></div></a>
    <a class="mtc-demo-3" href="http://boomnewstech.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_tech.jpg"/></div></a>
    <a class="mtc-demo-4" href="http://boomnewsfood.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_food.jpg"/></div></a>
    <a class="mtc-demo-5" href="http://boomnewssport.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_sport.jpg"/></div></a>
    <a class="mtc-demo-6" href="http://boomnewstravel.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_travel.jpg"/></div></a>
    <a class="mtc-demo-8" href="http://boomnewswedding.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_wedding.jpg"/></div></a>
    <div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/moredemos.jpg"/></div>
    <!--<a class="mtc-demo-7" href="http://boomnewsanimal.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_animal.jpg"/></div></a> -->
    <!--<a class="mtc-demo-9" href="http://boomnewslearn.magazinethemes.staging.wpengine.com/"><div><img src="http://magazinethemes.staging.wpengine.com/wp-content/uploads/2017/01/d_school.jpg"/></div></a> -->
    </div>
  </div>
  <div class="mtc-fix hide-mobile"></div>
  <div class="hide-mobile mtc-wrap">


    <ul class="mtc">
    	<li class="mtc-logo">
    		<img src="<?php echo get_template_directory_uri(); ?>/inc/img/mtc-logo.gif" alt="Magazine Themes" />
    	</li>
    	<li class="mtc-select-theme">
    	</li>
    	<li class="mtc-select-animation">
    		<span class="hide-max-1300">Image</span><span> Zoom:</span>
    		<span data-animation="zoom-on" class="mtc-on active mtc-bt">On</span> <span>/</span>
    		<span data-animation="zoom-off" class="mtc-off mtc-bt">Off</span>
    	</li>
    	<li class="mtc-select-border">
    		<span class="hide-max-1200">Border:</span>
    		<span data-border="mt-radius-0" class="mct-box mtc-border-0"></span>
    		<span data-border="mt-radius-25" class="mct-box mtc-border-25"></span>
    		<span data-border="mt-radius-5" class="mct-box mtc-border-5 active"></span>
    	</li>
    	<li class="mtc-select-sheme">
    		<span class="hide-max-1200">Sheme:</span>
    		<span data-sheme="mt-color-1"  class="mct-box fix mtc-sheme-1 active"></span>
    		<span data-sheme="mt-color-2"  class="mct-box fix mtc-sheme-2"></span>
    	</li>
      <!--
    	<li class="mtc-color">
    		<span class="hide-max-1300">Color:</span>
    		<span class="mtc-border-5 mtc-color-picker"></span>
    	</li>-->
    	<li class="mtc-select-layout">
    		<span class="hide-max-1300">Layout:</span>
    		<span data-layout="boxed-layout-off" class="mtc-full active mtc-bt">Full</span>
    		<span>/</span>
    		<span data-layout="boxed-layout-on" class="mtc-boxed mtc-bt">Boxed</span>
    	</li>

    	<li class="mtc-close pull-right">
    		<span class="mtc-bt hide-max-1300">Remove Frame</span>
    	</li>
    	<li class="mtc-open mtc-bt">
    	</li>
    	<li class="mtc-buy pull-right">
    		<a href="https://themeforest.net/item/magazine-a/17016507?ref=magazine-themes" target="_blank" title="Buy Now">Buy Now</a>
    	</li>
    </ul>
  </div>

<?php } }


function mt_hide_script() {
		wp_enqueue_script('mt-bar', get_template_directory_uri() . '/inc/js/bar.js', array('jquery'), '1.0', true);
		if(!is_user_logged_in()){ wp_add_inline_script( 'mt-bar', 'if ( top !== self ) top.location.replace( self.location.href );', 'after' ); }
	}
add_action('wp_enqueue_scripts', 'mt_hide_script');

?>
