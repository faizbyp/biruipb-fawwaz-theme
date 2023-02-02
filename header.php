<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="navbar bg-primary py-0">
    <div class="container px-0">
      <a class="navbar-brand col">
        <img src="<?= getImageFromTemplate('logo_ipb.png') ?>" alt="IPB">
      </a>
      <div class="col-3 d-none d-lg-block">
        <div class="text-end mb-2">
          <a href="#" class="text-white text-decoration-none mx-1">Media</a>
          <a href="#" class="text-white text-decoration-none mx-1">Unduhan</a>
          <a href="#" class="text-white text-decoration-none mx-1">Bantuan</a>
          <a href="#" class="text-white text-decoration-none mx-1">Kontak</a>
        </div>
        <form class="d-flex bg-white rounded" role="search">
          <div class="input-group">
            <input type="text" class="form-control shadow-none">
            <div class="input-group-append">
              <button class="btn" type="button">🔍</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-md container-md justify-content-center p-3 bg-white additional-nav" style="--bs-bg-opacity: .8;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-evenly" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'top-menu',
            'container' => false,
            'items_wrap' => '%3$s',
            'walker' => new Walker_Top_Menu()
          ));
          ?>
      </ul>
      </div>
    </div>
  </nav>