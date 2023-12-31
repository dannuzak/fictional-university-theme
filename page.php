<?php 

get_header();

while (have_posts()) { // this function will check if there are any posts to show
    // the_post()  will keep track of the current post in the loop
    // the_title() will display the title of the post
    the_post(); ?> 
   
   <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Don't forget to replace me later.</p>
        </div>
      </div>
    </div>

<!-- breadcrumb box -->


<div class="container container--narrow page-section">

<?php

$theParent = wp_get_post_parent_id(get_the_ID()); // get the parent page id of the current page
// create a variable to store the parent page id
// create a conditional statement to check if the page has a parent and if it does then the parent page's id is greater than 0, therefore it will display the breadcrumb box
// if the page does not have a parent page then the parent page id will be 0 and the breadcrumb box will not be displayed
// get_permalink() will display the url of the page
// get_the_title() will display the title of the page
if ($theParent) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p> 
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent)?></a> <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
    <?php }
?>
      

    <!--   <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>
 -->
      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
    
    <div class="page-section page-section--beige">
      <div class="container container--narrow generic-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>
    </div>

<?php
}

get_footer();

