<?php get_header();?>

<section class="container py-5">

  <h1 class="row text-barmeno text-primary"><?php single_cat_title();?></h1>

  <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <h3 class="text-barmeno text-primary"><?php the_title();?></h3>
    <?php the_excerpt();?>
    <a href="<?php the_permalink();?>" class="text-primary">Baca lebih lanjut</a>
  <?php endwhile; endif;?>

</section>

<?php get_footer();?>