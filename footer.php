<footer class="footer">
    <div class="footer-container">
        <div class="row">
            <div class="footer-col">
                <h4>Categories</h4>
                <ul class="footer-ul">
                            <li><a href="<?php echo get_category_link(3) ?>">Business</a></li>
                            <li><a href="<?php echo get_category_link(7) ?>">Technology</a></li>
                            <li><a href="<?php echo get_category_link(6) ?>">Sport</a></li>
                            <li><a href="<?php echo get_category_link(4) ?>">International student in USA</a></li>
                            <li><a href="<?php echo get_category_link(8) ?>">Travel</a></li>
                            <li><a href="<?php echo get_category_link(9) ?>">Art</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Pages</h4>
                <ul class="footer-ul">
                    <li><a href="<?php echo site_url('home') ?>">Home</a></li>
                    <li><a href="<?php echo site_url('about') ?>">About Me</a></li>
                    <li><a href="<?php echo site_url('blog') ?>">Blogs</a></li>
                    <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Tags</h4>
                <ul class="footer-ul">
                    <li><a href="<?php echo get_tag_link(10) ?>">AI</a></li>
                    <li><a href="<?php echo get_tag_link(19) ?>">International student</a></li>
                    <li><a href="<?php echo get_tag_link(20) ?>">Istanbul</a></li>
                    <li><a href="<?php echo get_tag_link(28) ?>">Tenis</a></li>
                    <li><a href="<?php echo get_tag_link(22) ?>">New Year</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>social media</h4>
                <div class="social-links">
                <ul class="footer-ul">
                    <a id="facebook" href="https://www.facebook.com/pavle.ristic.50"><i id="fb" class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/mr.risticpavle/"><i id="ig" class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/pavleristic/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://twitter.com/nishko_dete"><i id="tw" class="fa-brands fa-twitter"></i></a>
                </ul>
                </div>


                <table class="elements-container">
                    <tr>
                        <td>
                                <!-- <input class="search" type="search" name="" id="" placeholder="Search..." value=""> -->
                                <div class="search-form-wrap">
                                <?php get_search_form() ?>
                                </div>
                        </td>

                        <td>
                                <!-- <a href="#"><i style="padding-left:20px" class="fa-solid fa-magnifying-glass"></i></a> -->
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</footer>

    <div class="copyright">
        <p>Copyright © 2023 Pavle Ristić. All Rights Reserved.</p>
    </div>

    <hr><hr>

    <div class="by">
        <p>developed by 
            <a href="https://github.com/aleksastjnvc"><i id="gi" class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/aleksa-stojanovic-673ba3191/"><i id="li" class="fa-brands fa-linkedin"></i></a>
        </p>
    </div>
    
<?php wp_footer() ?>

    </body>
</html>