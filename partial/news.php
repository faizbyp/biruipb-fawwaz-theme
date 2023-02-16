<article class="container py-5 my-5">
  <div class="row text-center d-flex justify-content-center">
    <p class="text-muted">NEWS</p>
    <h2 class="fw-bold">Latest News for You</h2>
    <hr style="border: 2px solid #263C92; opacity: 1; width: 100px;">
  </div>

  <?php
  $posts = biruIpbFawwazget_lastestPost();
  $indexPosts = 0;
  ?>

  <div class="grid-container my-4">
    <?php foreach ($posts as $post) { ?>
        <a href="<?= get_permalink($post) ?>" class="grid-news-<?=++$indexPosts?>">
          <div class="news-cont">
            <img src="<?php
                      if (get_the_post_thumbnail_url($post)) {
                        echo get_the_post_thumbnail_url($post);
                      } else {
                        echo getImageFromTemplate('logo_ipb_solid.png');
                      }
                      ?>" alt="<?= $post->post_title ?>" class="img-fluid">
          </div>
          <div class="text-white bottom-left">
            <p><?= get_the_date('d M Y', $post); ?></p>
            <h3><?= $post->post_title ?></h3>
          </div>
        </a>
    <?php } ?>
  </div>
</article>