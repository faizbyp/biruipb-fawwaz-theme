<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="navbar bg-primary py-0">
  <div class="container px-0">
    <a class="navbar-brand col">
      <img src="wp-content/themes/bootstrap/assets/img/logo_ipb.png" alt="IPB">
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

<nav class="navbar container d-flex justify-content-evenly p-3 bg-white additional-nav text-primary" style="--bs-bg-opacity: .8;">
  <a href="#" class="text-decoration-none">Home</a>
  <a href="#" class="text-decoration-none">About</a>
  <a href="#" class="text-decoration-none">Academic</a>
  <a href="#" class="text-decoration-none">Student</a>
  <a href="#" class="text-decoration-none">Research</a>
  <a href="#" class="text-decoration-none">Alumni</a>
</nav>