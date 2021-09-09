<?php get_header(); ?>
 
<! –– Add Content Here ––>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        the_content();
	} // end while
} // end if
?>




<! –– Add Content Here ––>


<?php get_footer(); ?>