<article class="container pb-5 mb-5">
  <div class="row text-center d-flex justify-content-center">
    <p class="text-muted">ACHIEVEMENT</p>
    <h2 class="fw-bold">Our Latest Achievement</h2>
    <hr style="border: 2px solid #263C92; opacity: 1; width: 100px;">
  </div>

  <?php $achievement =  biruIpbFawwazget_achievementPost(); ?>

  <div class="row gap-1 justify-content-between p-0">
    <?php foreach ($achievement as $post) { ?>
      <a href="<?= get_permalink($post) ?>" class="p-0 col-lg-4-ach pos-rel">
        <div class="ach-cont">
          <img src="<?php
                    if (get_the_post_thumbnail_url($post)) {
                      echo get_the_post_thumbnail_url($post);
                    } else {
                      echo getImageFromTemplate('638d2271ac53e 1.png');
                    }
                    ?>" height="400" alt="<?= $post->post_title ?>" class="w-100">
        </div>
        <div class="text-white bottom-left">
          <p><?= get_the_date('d M Y', $post); ?></p>
          <h3><?= $post->post_title ?></h3>
        </div>
      </a>
    <?php } ?>
  </div>
</article>