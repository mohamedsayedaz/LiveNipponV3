<?php get_header(); ?>
<div class="jumbotron" id="trips-section">
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-d">
			<h2 class="text-center trip-title">Japan Trips</h2>
		</div>
	</div>
	<div class="container">
	<?php 
            if(have_posts()){
              
                while(have_posts()){
                      the_post();
                    ?>
              <div class="row">
                <div class="col-sm-6 trip-post center-d">
                    <h3><a href="<?php the_permalink(); ?>" class="btn trip-post-title"><?php the_title(); ?></a></h3>
                    <?php the_post_thumbnail('',['class' => 'img-thumbnail trip-post-img' , 'title' => 'Post Image']); ?>
                    <?php echo the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-danger trip-btn">Show Offer Details</a>
                </div>
             </div>
                    <?php
                }
                echo '<div class="post-pagination">';
                echo add_numeric_pagination();
                echo '</div>';
              }else{
                ?>
                <div class="alert alert-danger text-center empty-alert">No trips available</div>
                <?php
            }
            
        ?>
    </div>
</div>
<?php get_footer(); ?>