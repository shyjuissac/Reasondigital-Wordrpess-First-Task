<?php
/*

Template Name: Home

*/

?>

<?php get_header(); ?>


<!--main section--->



 <section class="tile-main">
        <div class="container">
            <div class="row">
<div class="wraper">
                <div class="title-row">
                    <div class="left-conts">
                        <h2>Portfolio</h2>
                        <p  >This is portfolio is set to the test task for the reason digital</p>



                    </div>
                    <div class="right-conts">
                        <ul class="sec-nav">
                            <li>all</li>
                            <li>Home</li>
                            <li>Home</li>
                            <li>Home</li>
                        </ul>
                    </div>
                </div>
    </div>
                <div class="wraper">
                <div class="tile-row">
                    
                    <?php query_posts(array('post_type' => 'post' )); ?>
                             <?php while (have_posts()) : the_post(); ?>
                        

                    
                    <div class="col">
                        <a href="<?php the_permalink() ?>"><img  src="<?php  echo get_the_post_thumbnail_url(); ?>"></a>
                        <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                       <p><?php echo word_count(get_the_excerpt(), '2'); ?></p> 
                    </div>
                     
<?php endwhile; ?>
                </div>
                </div>
            </div>
        </div>
    </section>





<?php get_footer(); ?>