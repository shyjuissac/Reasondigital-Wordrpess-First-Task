 <?php get_header(); ?>


<!--main section--->



 <section class="single-cont">
       
             <div class="row">
                <div class="wrapper2">
                 
                <div class="left-cont">
                    <h2><?php the_title(); ?></h2>
                    
                    <p><?php the_content(); ?></p>
                </div>
                <div class="right-cont"><img src="<?php  echo get_the_post_thumbnail_url(); ?>">
                </div>
                 </div>

            </div>
        
    </section>





<?php get_footer(); ?>