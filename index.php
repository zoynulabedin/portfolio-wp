<?php get_header(); ?>
            <!--Header End-->

  <div id="main" class="site-main">
            <!--Main Start-->
            <section id="blog" class="blog-section pt-page">
    <div class="section-container">

        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-book"></i></span>
            <h2>My Blogs.</h2>
        </div>

        <div class="row blogs-masonry">

            <div class="col-lg-6 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-1.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Web Design</span>
                        <h4 class="blog-title">Best Way to Design</h4>
                        <div class="blog-date">August 15, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-2.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Personal</span>
                        <h4 class="blog-title">Things I Need to Get Started</h4>
                        <div class="blog-date">August 10, 2018</div>
                    </div>
                </a>
            </div>

    

        

            


        </div>
    </div>
</section>

        <!--Ajax Portfolio Container Start-->
 <?php get_footer(); ?>

