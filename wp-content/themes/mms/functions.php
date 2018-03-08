<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

class b4st_walker_nav_menu extends Walker_Nav_menu {
	function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
		$indent = str_repeat("\t",$depth); // indents the outputted HTML
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    $li_attributes = '';
		$class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'nav_menu--list';
		$classes[] = 'nav_menu-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-menu dropdown-menu-right';
		}
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';
		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		$attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav_menu--list--link"';
		$item_output = $args->before;
		$item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saga_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Address 1', 'sage' ),
		'id'            => 'address-1',
		'description'   => __( 'Here you can change the Address 1', 'sage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Address 2', 'sage' ),
		'id'            => 'address-2',
		'description'   => __( 'Here you can change the Address 2', 'sage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Address 3', 'sage' ),
		'id'            => 'address-3',
		'description'   => __( 'Here you can change the Address 3', 'sage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

/*
	Shortcode for footer widgets
*/
add_shortcode('footer_widget', 'footer_widget_shortcode_function');

 function footer_widget_shortcode_function() {
   ob_start();
   
   ?>
   
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
   
   <?php
   
   return ob_get_clean();
}

add_action( 'widgets_init', 'saga_widgets_init' );

/*
	Work starts here for footer widgets
*/

			// Enable shortcodes in text widgets
			add_filter('widget_text','do_shortcode');

			// Register and load the widget
			function wpb_load_widget() {
				register_widget( 'wpb_widget' );
			}
			add_action( 'widgets_init', 'wpb_load_widget' );
			 
			// Creating the widget 
			class wpb_widget extends WP_Widget {
			 
			function __construct() {
			parent::__construct(
			 
			// Base ID of your widget
			'wpb_widget', 
			 
			// Widget name will appear in UI
			__('Custom Widget', 'wpb_widget_domain'), 
			 
			// Widget description
			array( 'description' => __( 'Custom widget for footer', 'wpb_widget_domain' ), ) 
			);
			}
			 
			// Creating widget front-end
			 
			public function widget( $args, $instance ) {
			$title = apply_filters( 'widget_title', $instance['title'] );
			$email = apply_filters( 'widget_email', $instance['email'] );
			$phone = apply_filters( 'widget_phone', $instance['phone'] );
			$address = apply_filters( 'widget_address', $instance['address'] );
			
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo  $args['before_title'] . $title . $args['after_title'] ;
			
			if ( ! empty( $email ) )			
			echo  '<p><a href="#">' .$args['before_email'] . $email . $args['after_email'] .'</a></p>';
			
			if ( ! empty( $phone ) )
			
			echo  '<h3><a href="#">' .$args['before_phone'] . $phone . $args['after_phone'] .'</a></h3>';
			if ( ! empty( $address ) )
			
			echo  $args['before_address'] . $address . $args['after_address'] ;
			// This is where you run the code and display the output
			 
			echo __( $the_content, 'wpb_widget_domain' );
			echo $args['after_widget'];
			}
					 
			// Widget Backend 
			public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
			}
			else {
			$title = __( 'New title', 'wpb_widget_domain' );
			}
			
			if ( isset( $instance[ 'email' ] ) ) {
			$email = $instance[ 'email' ];
			}
			else {
			$email = __( 'Email', 'wpb_widget_domain' );
			}
			
			if ( isset( $instance[ 'phone' ] ) ) {
			$phone = $instance[ 'phone' ];
			}
			else {
			$phone = __( 'Phone', 'wpb_widget_domain' );
			}
			
			if ( isset( $instance[ 'address' ] ) ) {
			$address = $instance[ 'address' ];
			}
			else {
			$address = __( 'Address', 'wpb_widget_domain' );
			}
			// Widget admin form
			?>
			<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Name:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			
			<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
			
			<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
			
			<label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
			</p>
			<?php 
			
			
			
			}
				 
			// Updating widget replacing old instances with new
			public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
			$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
			$instance['address'] = ( ! empty( $new_instance['address'] ) ) ?  $new_instance['address'] : '';
			return $instance;
			}
			} // Class wpb_widget ends here

/*
	Work ends here for footer widgets
*/

/*
Register Navbar
*/
register_nav_menu('primary_navigation', __('Navbar', 'b4st'));

/*
 Common Setting module
*/


if( function_exists('acf_add_options_page') ) {
 
 acf_add_options_page(array(
  'page_title'  => 'Theme Setting',
  'menu_title' => 'Theme Settings',
  'menu_slug'  => 'theme-general-settings',
  'capability' => 'edit_posts',
  'redirect'  => false
 ));
}

