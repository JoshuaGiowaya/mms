<?php
/**
 * Template Name: product Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
?>
<section class="head__element home__head home_top-banner">
   
    <div class="head__element--block product__block">
        <div class="container">
		
<?php
	if( have_rows('product_header') ): 
	while( have_rows('product_header') ): the_row(); 
?>
         <figure class="head__element--block--figure ">
           <img src="<?php the_sub_field('top_image'); ?>">
         </figure>
			<?php the_sub_field('content_box'); ?>
			
            
<?php endwhile;    
	endif;  
?> 
        </div>
    </div>
</section>
<section>
    <div class="container">
	<div class="row product__brand">
	<?php
	if( have_rows('client_box') ): 
	while( have_rows('client_box') ): the_row(); 
?>
        
            <div class="col-md-4 text-center">

                <figure class="product__brand--logo">
                    <img src="<?php the_sub_field('client_logo'); ?>">
                </figure>
		<?php
		if( have_rows('content_box') ): 
		while( have_rows('content_box') ): the_row(); 
		?>
				<h5 class="product__brand--sub--heading"><?php the_sub_field('content_heading'); ?></h5>
				<p class="product__brand--sub--content"><?php the_sub_field('sub_heading'); ?></p>
		<?php endwhile;    
		endif;  
	?> 
			</div> 	

            
   <?php endwhile;    
	endif;  
?>   </div>       
      </div>     
</section>
