<?php /* Template Name: Blog Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="container-fluid">
			    <div class="row">
			        <div class="col-sm-8 col-sm-offset-2">
			       <?php // WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();    ?>
<div class="col-sm-12 blogPost"><img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive">
			                <h2><?php the_title(); ?></h2>
			                <p><?php the_excerpt();?></p>
    			                <div class="btnContainer">
    			                    
    			                    <button  class="readButton btn btn-default"> <a href="<?php echo get_post_permalink();?>">Read More!</a></button>
    			                    
    			                </div>
    			             
    			                
			            </div>
			        
			    
			  
			         <?php	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
   

?>
</div>
			     </div> 



<?php get_footer(); ?>
