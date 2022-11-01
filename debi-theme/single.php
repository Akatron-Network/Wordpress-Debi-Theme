<?php get_header(); ?>

<div class="container-fluid stage" style="padding: 30px 20px;">
  <div class="row justify-content-md-center">
    <div class="col-lg-5 col-md-12 academy-stage-text" style="text-align: left; padding: 60px; background-image: url('/img/akt-3d-bg.png'); background-repeat: no-repeat; background-size: contain; background-position: left;">
      <div  style="text-align: left;">
        <h1 style="font-size: 40px; font-family: 'Allerta Stencil', sans-serif;">AKATRON <span style="font-family: 'Montserrat', sans-serif; font-size: 30px;">AKADEMİ</span></h1>
        <br>
      </div>
      <div>
        <p>Akademi bloğu ile ekibimiz tarafından paylaşılan yazılara ulaşabilir, sorular sorabilir ve kaynaklara erişebilirsiniz!</p>
        <p>Genel yazılım konuları, Akatron platformları ve birçok konuyu kapsamaktadır.</p>
      </div>
    </div>
    <div class="col-lg-5 col-md-12 aca-stage-r">
      <img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/akt-academy.png" alt="akatron akademi blog">
    </div>
  </div>
</div>

<div class="divider" style="box-shadow: 1px -12px 12px -3px rgba(0,0,0,0.5) inset;"></div>

<div class="container-xxl" style="margin-top: 5px; margin-bottom: 50px">
  <div class="row">

    <div class="col-md-4 col-sm-12 menu-col">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-md-8 col-sm-12 content-col">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <div class="row">
        <div class="col">
          <h3 class="content-author"><?php the_author(); ?></h3>
        </div>
        <div class="col">
          <h4 class="content-time"><?php the_date(); ?></h4>
        </div>
      </div>

      <hr>
      <p><?php the_content(); ?></p>
    <?php endwhile; else: ?>
        <h2><?php _e('Bulunamadı'); ?></h2>
    <?php endif; ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>