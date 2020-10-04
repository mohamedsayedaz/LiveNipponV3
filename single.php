<?php get_header() ?>
<div class="jumbotron min-wid" id="trip-section">
    <div class="row">
        <div class="col-sm-10 single-trip-post center-d" id="single-post">
    <?php 
            if(have_posts()){
              
                while(have_posts()){
                      the_post();
                    ?>
                    <h3 class="single-post-title"><?php the_title(); ?></h3>
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-8 center-d">
                        <?php the_post_thumbnail('',['class' => 'img-thumbnail single-post-img single-post-img' , 'title' => 'Post Image']); ?>
                    </div>
                    <div class="single-post-content">
                    <?php echo the_content(); ?>
                    </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
    <?php comments_template(); ?>
    
</div>
<?php get_footer(); ?>