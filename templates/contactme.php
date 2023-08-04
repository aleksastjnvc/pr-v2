<?php /* Template Name: Contact Template */ 

get_header(); ?>

    <title><?php the_title() ?></title>


 
<section id="hero">
        <h2 class="heading hero"><span class="yellow">L</span>et's <span class="yellow">T</span>alk 👋</h2> 
        <div class="content">
                <p>Don't hesitate to reach out with the contact information below or send a message using the form.</p>
                    <a href="#form"><button id="hero-btn">Fill up the form!</button></a>
        </div>
</section>

<div class="contact-bottom">
    <div class="main">
            <div class="content second">
            <p>pavleristicblog@gmail.com
                <img id="emailpng" src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="">
            </p>
            <p> (602)5096648 
                <img id="phonepng" src="<?php echo get_template_directory_uri(); ?>/assets/img/telephone.png" alt="">
            </p>
            </div>
        </div>    
    </div>    
</div>

<hr><hr><hr><hr>


<section id="form">
<div>
  <h2 class="form-heading" >Get in touch</h2>
    <h3 class="form-heading small">Do not hesitate to reach out with the contact information below or send a message using the form.</h3>
</div>

<div class="form-parent">
  <form action="index.php" id="contact-form">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter your name..." required><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email..." required><br>

    <label for="website">Website:</label><br>
    <input type="text" name="website" id="website" placeholder="Enter your website(optional)..."><br>

    <label for="message">Enter your message:</label><br>
    <textarea id="message" name="message" placeholder="Your Message..." required></textarea><br>

    <input class="submit-form-btn" type="submit" value="Submit">

  </form>
</section>
</div>

<?php get_footer() ?>