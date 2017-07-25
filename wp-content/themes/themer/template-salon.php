<?php /* Template Name: Salon Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php 
    echo do_shortcode("[wp1s id='77']"); 
?>
<?php
// WP_Query arguments
$args = array(
	'post_type'              => array( 'welcome_post' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
		<div class="container-fluid stylist ">
                <div class="row">
                <h1><?php the_title();?></h1>
                <p><?php the_content();?></p>
                </div>
                </div>
<?php	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>
	<?php
	$size = wp_count_posts( 'stylist_cards' );
$counter = 0;
$args = array( 'post_type' => 'stylist_card');
$the_query = new WP_Query( $args );  if ( $the_query->have_posts() ) : ?> <div class="container-fluid cardContainer ">
    
<div class="row-fluid"> <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

    <div class="col-xs-6 col-sm-6 col-md-3 hidden-md hidden-lg hidden-xl">
                            <div class="containerHover"> <img src="<?php the_field('stylist_picture');?>" class="image aboutimg img-crop">
                                
                         
                        

    </div>
    <div class="col-xs-12"><?php the_field('stylist_name');?></div>
    <div class="col-xs-12">
                        <?php the_field('stylist_number');?></div>
    </div>
    
                                

<?php endwhile; wp_reset_postdata();?> </div>
	</div> <?php endif;	?>
<?php
$args = array( 'post_type' => 'stylist_card', 'posts_per_page' => 4 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="container-fluid cardContainer ">
    
            <div id="carousel-example-generic" class="carousel hidden-sm hidden-xs slide box effect2 postSlider" data-ride="carousel">
        		<ol class="carousel-indicators">
            			<?php 
            			if ($the_query->found_posts > 4) {?><li data-target="#carousel-example-generic" data-slide-to="0" class="active carousel-button"></li>
            			<li data-target="#carousel-example-generic" data-slide-to="1" class="carousel-button"></li>
            			<?php if ($the_query->found_posts > 8){ ?>
        			        <li data-target="#carousel-example-generic" data-slide-to="2" class="carousel-button"></li>
        			        <?php } } ?>
        		</ol>
        		<div class="carousel-inner">
        			<div class="item active">
	
<div class="row-fluid"><?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
        		
        				
        					<div class="col-xs-6 col-sm-3 hidden-sm  hidden-xs">
                        <div class="containerHover"> <img src="<?php the_field('stylist_picture');?>" class="image aboutimg img-crop">
                            <div class="overlay">
                                <div class="text container-fluid">
	                    <div class="col-sm-12"><?php the_field('stylist_description'); $counter++;?></div> 
	                    <div class="col-sm-12 secondFieldHover"><?php the_field('stylist_name');?></div>
	                    <div class="col-sm-12 secondFieldHover"><?php the_field('stylist_number');?></div>
			</div>
		</div>
	</div>
	</div>
	<?php    endwhile?>
	</div>

</div>
	
	<?php if ($the_query->found_posts > 4 && $counter >= 4) {  $args = array( 'post_type' => 'stylist_card', 'posts_per_page' => 4, 'offset' => 4);
$the_query = new WP_Query( $args ); 
	?>
        <div class="item">
	
<div class="row-fluid"><?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
        		
        				
        					<div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="containerHover"> <img src="<?php the_field('stylist_picture');?>" class="image aboutimg img-crop">
                            <div class="overlay">
                                <div class="text container-fluid">
	                    <div class="col-sm-12"><?php the_field('stylist_description'); $counter++;?></div> 
	                    <div class="col-sm-12 secondFieldHover"><?php the_field('stylist_name');?></div>
	                    <div class="col-sm-12 secondFieldHover"><?php the_field('stylist_number');?></div>
			</div>
		</div>
	</div>
	</div>
	<?php    endwhile;?>
	</div>

</div>

	

    

    
	<?php  ?>

<?php } ?></div> </div> 
	<?php wp_reset_postdata(); endif; ?>
        					
        


</div>
</div>


<div class="container-fluid contact newSec blackSec">
                <div class="row-fluid">
                    <h1>Don't know what you want? Just want to get in touch?</h1>
                    <p>Feel free to reach us or book an appointment here. Just leave your name, number, or any other way you want us to get back to you, and we'll be as fast as we can.</p>
                    <?php echo do_shortcode('[ninja_form id=3]'); ?>
                    <!-- will most likely implement a photo here, although the empty space oculd give the eyes a much needed break. WHen supplied with photos for main slider, page will seem to mellow out (no bright colors to be greeted with)-->
                </div>
            </div>
            <div class="mapContainer"><?php echo do_shortcode('[wpgmza id="1"]')?></div>
<div class="newSec"><?php echo do_shortcode('[instagram-feed]'); ?></div>
<div class="container">
                <div class="row">
                    <h1 class="text-center ">What our clients say about us?</h1>
                    <hr>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row testimonials">
                        	<?php
                        	// WP_Query arguments
$args = array(
	'post_type' => array( 'testimonial' ), 'posts_per_page' => 3
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?> <div class="col-sm-4">
                                <blockquote>
                                    <p class="clients-words"><?php the_field('client_testimonial');?></p> <span class="clients-name "><?php the_field('client_name'); ?></span> <img class="img-circle img-thumbnail" src="<?php the_field('client_picture');?>"> </blockquote>
                            </div> <?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>
                            
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/testimonials-->
        </div>





<?php get_footer(); ?>
