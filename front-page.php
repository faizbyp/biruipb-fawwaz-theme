<?php get_header();?>

<section class="hero container-fluid d-flex py-2">
    <div class="row align-items-end w-100 flex-grow-1">
      <div class="col">
        <h1 class="text-barmeno text-primary text-center display-4">Inspiring Innovation with Integrity</h1>
        <h2 class="text-barmeno text-black text-center display-6">in Agriculture, Ocean and Biosciences for a Sustainable World</h2>
      </div>
    </div>
</section>

<hr style="border: 10px solid #263C92; opacity: 1;">

<article class="container">
  <div class="row py-5 my-5 align-items-center">
    <div class="col-12 col-lg-6 pb-4">
      <img src="<?=getImageFromTemplate('rektorat-ipb 1.png')?>" alt="rektorat" class="img-fluid">
    </div>
    <div class="col-12 col-lg-6 pb-4">
      <h2 class="fw-bold">Welcome to the IPB University</h2>
      <hr style="border: 2px solid #263C92; opacity: 1; width: 100px;">
      <p>IPB University is a higher education institution that produces innovations with a nationally and internationally acknowledged quality. For ten years straight (2008-2018), IPB has the most innovation compared to other universities in Indonesia base on appraisement from Business Innovation Center - Ministry of Research, Technology, and Higher Education of Indonesia in Indonesia's Most Prospective Innovation (39,71%)...</p>
      <a href="#">More about us</a>
    </div>
  </div>
</article>

<section class="container-fluid">
  <div class="row">
    <img src="<?=getImageFromTemplate('image 6.png')?>" alt="" class="col-3 p-0">
    <img src="<?=getImageFromTemplate('image 7.png')?>" alt="" class="col-3 p-0">
    <img src="<?=getImageFromTemplate('image 8.png')?>" alt="" class="col-3 p-0">
    <img src="<?=getImageFromTemplate('image 9.png')?>" alt="" class="col-3 p-0">
  </div>
</section>

<?php 
require 'partial/news.php';
require 'partial/achievement.php';
?>



<?php get_footer();?>