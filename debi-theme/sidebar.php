<div id="side_cat" class="sticky-top side-collapse">


  <h2 onclick="document.getElementById('side_cat').classList.toggle('side-collapse')">Kategoriler <span class="side-dots">...</span></h2>
  <hr>
  <ul class="list-group">
  <?php wp_list_cats([
    'orderby' => 'term_order'
  ]); ?>
  </ul>

  <br><br>

  <h2>Son Yazılar</h2>
  <hr>
  <ul class="list-group">
  <?php
    global $post;
    $myposts = get_posts('numberposts=10');
    foreach($myposts as $post) :
    setup_postdata($post);
  ?>
    <a href="<?php the_permalink(); ?>"><li class="list-group-item"><?php the_title(); ?></li></a>
  <?php endforeach; ?>
  </ul>

  <br><br>

  <h2>Çok Okunan Yazılar</h2>
  <hr>
  <ul class="list-group">
  <?php $bilgisayaci = new WP_Query("showposts=5&orderby=comment_count"); while($bilgisayaci->have_posts()) : $bilgisayaci->the_post();?>

    <a href="<?php the_permalink(); ?>"><li class="list-group-item"><?php the_title(); ?></li></a>
    <?php endwhile; ?>
  </ul>


</div>