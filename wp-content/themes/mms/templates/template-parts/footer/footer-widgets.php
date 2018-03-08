<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>

 <div class="row">
      <div class="col-md-4">
          <div class="footer_content--address">
          <h3>NORTH DAKOTA</h3>
<p><a href="#">Contact@mmsus.com</a></p>
<h3><a href="#">(952) 525-2004</a></h3>
<p>8125 Lewis Road  
<span>Fargo, ND 55427</span>
DIRECTIONS</p>

          </div>
    </div>
    <div class="col-md-4">
          <div class="footer_content--address">
          <h2><span>HEADQUARTERS</span>
          MINNESOTA</h2>
<p><a href="#">Contact@mmsus.com</a></p>
<h3><a href="#">(952) 525-2004</a></h3>
<p>8125 Lewis Road  
<span>Minneapolis, ND 55427</span>
DIRECTIONS</p>

          </div>
    </div>
    <div class="col-md-4">
          <div class="footer_content--address">
          <h3>WISCONSIN</h3>
<p><a href="#">Contact@mmsus.com</a></p>
<h3><a href="#">(952) 525-2004</a></h3>
<p>8125 Lewis Road  
<span>Fargo, ND 55427</span>
DIRECTIONS</p>

          </div>
    </div>  
  </div>
