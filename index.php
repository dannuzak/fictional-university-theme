<?php 

get_header();

while (have_posts()) { // this function will check if there are any posts to show
    // the_post()  will keep track of the current post in the loop
    // the_title() will display the title of the post
    the_post(); ?> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
    <?php the_content(); ?> 
    <hr>
<?php
}

get_footer();

?>
