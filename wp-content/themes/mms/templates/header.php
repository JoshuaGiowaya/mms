<header class="banner header-box clearfix">
  <div class="container">
    <!--a class="brand" href="<//?= esc_url(home_url('/')); ?>"></?php //bloginfo('name'); ?></a-->
    <!--nav class="nav-primary">
      <//?php
      if (has_nav_menu('primary_navigation')) {
       wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      }
     ?>
    </nav-->
      <!--a href="#" class="head-logo"><img src="<//?php bloginfo('template_url'); ?>/assets/images/logo.png"></a>
      <nav class="nav_wrap">
        <ul class="nav_menu">
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">MMS</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">MMS-U</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">EXPERTS</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">PROCESS</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">SYSTEMS</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">PRODUCTS</a></li>
          <li class="nav_menu--list"><a href="#" class="nav_menu--list--link">CONTACT</a></li>
        </ul>
      </nav-->

	   
	<nav class="navbar-toggleable-md navbar-light bg-light nav_wrap">
	<div class="logo-header"><a class="head-logo" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_field('header_logo','option'); ?>"></a>
	<button class="navbar-toggler float-right responsive-btn" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	</div>
  <div class="container-responsive">   
    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'primary_navigation',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class=" nav_menu mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>

      
    </div>

  </div>
</nav>
  </div>
</header>
