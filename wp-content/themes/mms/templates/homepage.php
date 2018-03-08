<?php
/**
 * Template Name: Front Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
?>
<?php
	if( have_rows('main_section') ): 
	while( have_rows('main_section') ): the_row(); 
?>
    
<?php the_sub_field('content_box'); ?>

<?php endwhile;    
	endif;  
?> 

<!--******Section end here******-->


<!--******Section end here******-->


<!--******Section end here******-->


<!--******Section end here******-->



<!--******Section end here******-->
