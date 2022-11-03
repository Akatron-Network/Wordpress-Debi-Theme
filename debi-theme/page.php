<?php get_header(); ?>


<?php while(have_posts()) : the_post(); ?>
<!-- -- STAGE -- -->
<div class="stage-outer stage-page">

<!--* STAGE BOTTOM HEADINGS -->
<div class="stage-page-title">
    <h1><?php the_title(); ?></h1>
</div>

</div>

<!-- -- PAGE CONTENT -->
<div class="content-outer">
  <div class="container">
    <?php
    $current_page = get_queried_object();
    $content      = apply_filters( 'the_content', $current_page->post_content );
    echo $content;
 //the_excerpt(); ?>
  </div>
</div>

<?php endwhile; ?> 


<?php get_footer(); ?>