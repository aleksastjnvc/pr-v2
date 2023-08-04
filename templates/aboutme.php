<?php get_header()
  /* Template Name: About Me */
?>

<title><?php the_title() ?></title>

<div class="section-about">
  <div class="container-about">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pavle-aboutme.webp" alt="Image 1">
  </div>
  <div class="container-about">
    <h2> <span class="red">WHO AM I?</span></h2>
    <p> <span class="red">H</span>ello, dear reader; I am Pavle Ristić<span class="none">(this guy on the left)</span>, and I am pleased to welcome you to my blog. I was born and raised in the beautiful City of Niš, located in Serbia, Europe. Currently, I am pursuing my degree as an international student at the Ottawa University of Arizona. Over the years, I have received numerous accolades and awards for my academic achievements and community involvement.</p>
  </div>
</div>

<div class="section-about second">

<div class="container-about">
    <h2><span class="red">WHAT I DO?</span></h2>
    <p> <span class="red">A</span>side from my academic pursuits, I have a keen interest in music, sports, and reading. However, my passion lies in writing and sharing my opinions with others. In this blog, I will provide my take on current events and topics that interest me, as well as share my experiences as an international student. </p>
  </div>

  <div class="container-about">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pavle-aboutme2.webp" alt="Image 2">
  </div>
</div>

<div class="section-about last">
  <div class="container-about">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pavle-aboutme3.webp" alt="Image 3">
  </div>
  <div class="container-about">
    <h2><span class="red">WHY DO I DO IT?</span></h2>

    <p> <span class="red">W</span>riting has always been my outlet for creativity; I believe everyone has a story to tell. It is essential to have a platform where one can express themselves freely and share their perspective with others. I am committed to providing a space where individuals from all walks of life can come together to learn, share and connect.</p>
  </div>
</div>


<?php get_footer() ?>