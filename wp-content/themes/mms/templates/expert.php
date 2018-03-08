<?php
/**
 * Template Name: expert Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
?>
<!--******Section end here******-->

<!--******Section end here******-->

<!--******Section end here******-->
<!--******Section end here******-->


<!--******Section end here******-->
<?php
	if( have_rows('expert_section') ): 
	while( have_rows('expert_section') ): the_row(); 
?>
    
<?php the_sub_field('content_box'); ?>

<?php endwhile;    
	endif;  
?> 

<!--******Section end here******-->


 <section class="hero__element expert__slider-box">
        <div id="bxslider" class="bxslider ">
	<?php
			if( have_rows('expert_slider') ): 
			while( have_rows('expert_slider') ): the_row(); 
	?>
	<div>
		<img src="<?php the_sub_field('slide_image'); ?>" >
		   <div class="container">
			<div class="expert__slider--block">
				<h3 class="expert__slider--block--heading"><?php the_sub_field('content_heading'); ?></h3>
				<?php the_sub_field('content_slider'); ?>
			</div>
	</div>
	</div>
	<?php endwhile;    
	endif;  
?> 
		</div>
</section>
