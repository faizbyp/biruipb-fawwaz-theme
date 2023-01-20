<?php get_header();?>

<article class="container py-5">

  <h1 class="row text-barmeno text-primary fw-bold pb-3"><?php the_title();?></h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
    <?php endwhile; endif;?>

</article>

<?php get_footer();?>