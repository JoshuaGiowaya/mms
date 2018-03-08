<?php
/**
 * Template Name: about Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
?>
<section class="head__element home__head">
<?php
	if( have_rows('main_section') ): 
		while( have_rows('main_section') ): the_row(); 
?>
    <figure class="head__element--figure">
       <img src="<?php the_sub_field('background_section'); ?>" >
    </figure>
    <div class="head__element--block about-head">
        <div class="container">
             <figure class="head__element--block--figure ">
                 <img src="<?php the_sub_field('front_logo'); ?>">
            </figure>
            <?php the_sub_field('conent_box'); ?>
        </div>
    </div>
    <?php endwhile;    
	   endif;  
	 ?> 
</section>
<!--******Section end here******-->
<section class="about__bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about__content">
            <?php the_field('about_content'); ?>
            </div>
           
           
            <?php
                         if( have_rows('staff_member') ): 
                        while( have_rows('staff_member') ): the_row();
                     ?>
                      <div class="about__team row">
                    <div class="col-md-8">                                            
                            <div class="about__team--content">
                            <?php the_sub_field('staff_content'); ?>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <figure class="about__team--profile">
                            <img src="<?php echo the_sub_field('staff_image');  ?>">
                        </figure>
                    </div>
                    </div>
                    <?php endwhile;    
                            endif;  
                            ?> 
            
          
           
            <!--End profile div-->
            
            
            
        </div>
    </div>
</section>