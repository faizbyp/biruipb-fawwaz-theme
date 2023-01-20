<?php get_header();?>

<article class="container py-5">

  <h1 class="row text-barmeno text-primary"><?php the_title();?></h1>

  <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid" alt="">
  <?php endif;?>

</article>

<?php get_footer();?>