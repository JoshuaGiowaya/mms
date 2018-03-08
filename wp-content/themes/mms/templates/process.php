<?php
/**
 * Template Name: process Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
?>
<section class="head__element home__head home_top-banner">
<div class="head__element--block equal process__element">
    <div id="bxslider" class="bxslider1">
    
    <?php
	if( have_rows('top_slider') ): 
	while( have_rows('top_slider') ): the_row(); 
?>
	<div class="container">
       <figure class="head__element--block--figure ">
                 <img src="http://gutoplis.com/2018/dev/mms/wp-content/uploads/2018/02/mms.png">
            </figure><?php the_sub_field('content_box'); ?>
	</div>
<?php endwhile;    
	endif;  
?> 
    </div>
</div>
</section>
<!--******Section end here******-->
<section class="system__element">
    <div class="container">
       
    <?php
    $counter = 1;
        	if( have_rows('content_toggle') ): 
    while( have_rows('content_toggle') ): the_row(); 
    
?>
     <div class="Process__step" >
	    <ul class="Process__step--block">
             <?php the_sub_field('content_box'); ?>
         </ul>

             <div class="collapse"  id="collapselist-<?php echo $counter; ?>" >               
             <?php the_sub_field('description_box'); ?>
            </div>
                <figure class="Process__step--block--plus">
                    <a  onClick="toggleParent(<?php echo $counter; ?>);" class="" data-toggle="collapse"  href="#collapselist<?php echo $counter; ?> "  aria-expanded="false" aria-controls="collapselist<?php echo $counter; ?>">
						<img src="<?php the_sub_field('toggle_image'); ?>" class="button-plus"  >
					</a>
				</figure>
        </div>
<?php 
    $counter++;
endwhile;    
	endif;  
?> 
 	</div>
   
</section>


