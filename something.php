<?php 
/*
* Template Name: Front-page
*/
?>

<?php get_header(); ?>

      <div id="main" class="site-main">

<!--Banner Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="banner-section pt-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/background/home-bg.jpg')">

    <div class="banner-content">
        <!--Banner Text-->
        <h1 class="mb-20">ZOYNUL<span> ABEDIN</span></h1>

        <!--Animated Text-->
        <p class="cd-headline clip is-full-width">
        <span>I am a </span>
        <span class="cd-words-wrapper">
            <b class="is-visible">Graphics Designer</b>
            <b>Freelancer</b>
            <b>Web Developer</b>
            <b>UI/UX Designer</b>
        </span>
        </p>

    </div>

</section>
<!--Banner Section End-->


<!--About Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="about-section pt-page">
    <div class="section-container">
        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-user"></i></span>
            <h2>About Me.</h2>
        </div>

        <!-- About Info Row Start-->
        <div class="row about mb-70">

            <div class="col-lg-8">
                <!--Personal Intro-->
                <h3 class="mb-20">UI/UX Designer & Developer</h3>
                <p>Dolor reprehenderit aut repudiandae maiores recusandae. Consequatur dolor nisi labore commodi ipsa? Excepturi velit laboriosam at voluptatibus cupiditate est vel. Dolorem praesentium itaque fugiat placeat quas consequatur? Obcaecati natus rerum</p>
                <p>Consectetur consectetur nesciunt nesciunt blanditiis amet? Quod quis unde aliquid excepturi laudantium? Illo architecto aliquam velit illo magnam neque perferendis sint Incidunt eius ipsa inventore labore eos velit. Minus hic magni reiciendis necessitatibus ex Quidem officia deleniti accusamus obcaecati dolores. Porro culpa quibusdam impedit porro praesentium excepturi. Alias ab consequatur?</p>

                <!--Signature Image-->
                <div class="signature mt-20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signature-white.png" alt="">
                </div>
            </div>

            <!--Personal Info-->
            <div class="col-lg-4">
                <div class="about-info">
                    <h3 class="mb-20">Personal Information</h3>
                    <ul>
                        <li><span class="title">Name</span><span class="value">Philip Watson</span></li>
                        <li><span class="title">Age</span><span class="value">26 Years</span></li>
                        <li><span class="title">Residence</span><span class="value">New York, USA</span></li>
                        <li><span class="title">Address</span><span class="value">123 Lorem Ipsum</span></li>
                        <li><span class="title">Email</span><span class="value">example@example.com</span></li>
                        <li><span class="title">Phone</span><span class="value">(+1) 123 456 7890</span></li>
                        <li><span class="title">Freelance</span><span class="value">Available</span></li>
                    </ul>
                    <div class="resume-button mt-30">
                        <a class="btn-main" href="#">Download Resume</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Info Row End-->

        <!--Services Row Start-->
        <div class="row services mb-30">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Services</h3>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-laptop"></i></div>
                    <h4>Web Development</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-eye"></i></div>
                    <h4>Web Design</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
                    <h4>Responsive Design</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>

            <!--Service Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="icon"><i class="lnr lnr-camera"></i></div>
                    <h4>Photography</h4>
                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                </div>
            </div>
        </div>
        <!--Services Row End-->

        <!--Clients Row Start-->
        <div class="row clients mb-70">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Clients</h3>
                </div>
            </div>

            <div class="owl-carousel owl-theme">

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-01.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-02.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-03.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-04.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-05.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-06.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-07.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-08.png" alt="">
                    </a>
                </div>

                <!--Client Logo-->
                <div class="client-logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-09.png" alt="">
                    </a>
                </div>

            </div>
        </div>
        <!--Clients Row End-->

        <!--Testimonials Row Start-->
        <div class="row testimonials mb-50">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>Testimonials</h3>
                </div>
                <div class="owl-carousel owl-theme">

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/author-1.jpg" alt="">
                            <div class="meta-info">
                                <h4>Kate Fox</h4>
                                <p>Digital Marketing Executive</p>
                            </div>
                        </div>
                    </div>

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/author-2.jpg" alt="">
                            <div class="meta-info">
                                <h4>Emma Jones</h4>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>

                    <!--Testimonail Item-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/author-3.jpg" alt="">
                            <div class="meta-info">
                                <h4>Jack Smith</h4>
                                <p>Marketing Director</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--Testimonials Row End-->

        </div>
    </div>
</section>
<!--About Section Start-->


<!--Resume Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="resume-section pt-page">
    <div class="section-container">
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-license"></i></span>
            <h2>My Resume.</h2>
        </div>

        <!--Education & Experience Row Start-->
        <div class="row mb-20">

            <!--Experience Column Start-->
            <div class="col-lg-6">
                <div class="subheading">
                    <h3>Experience</h3>
                </div>
                <ul class="experience">

                    <!--Experience Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>Lead UI Designer</h4>
                            <h5>Big Design Company, NY, USA</h5>
                            <p class="info">
                                Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2018</span>
                            <span class="from">2016</span>
                        </span>
                    </li>

                    <!--Experience Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>Web Designer</h4>
                            <h5>Design Company, London, UK</h5>
                            <p class="info">
                                Dolor id atque accusantium ut impedit odit provident soluta voluptatem Veritatis ipsam neque mollitia vero suscipit a laborum doloremque. Ipsa!
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2016</span>
                            <span class="from">2015</span>
                        </span>
                    </li>

                    <!--Experience Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>Web Developer</h4>
                            <h5>Exis Development, London, UK</h5>
                            <p class="info">
                                Consectetur pariatur fugiat ipsam aperiam maiores. Nisi in dignissimos debitis expedita asperiores delectus vitae corporis.
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2015</span>
                            <span class="from">2014</span>
                        </span>
                    </li>

                </ul>
            </div>
            <!--Experience Column End-->

            <!--Education Column Start-->
            <div class="col-lg-6">
                <div class="subheading">
                    <h3>Education</h3>
                </div>

                <ul class="education">

                    <!--Education Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>MA Graphics</h4>
                            <h5>Royal College of Art, London, UK</h5>
                            <p class="info">
                                Consectetur mollitia amet inventore nisi sed. Provident veritatis exercitationem eum doloremque itaque expedita? Ex voluptatem nostrum numquam illum.
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2014</span>
                            <span class="from">2013</span>
                        </span>
                    </li>

                    <!--Education Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>BA(HONS) Graphics</h4>
                            <h5>Central Saint Martins, London, UK</h5>
                            <p class="info">
                                Elit voluptatibus quas necessitatibus ullam tenetur provident voluptatibus. Ratione delectus lorem minus ipsa architecto. Saepe officiis sint adipisci.
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2013</span>
                            <span class="from">2012</span>
                        </span>
                    </li>

                    <!--Education Item-->
                    <li>
                        <span class="line-left"></span>
                        <div class="content">
                            <h4>Web & Graphics Diploma</h4>
                            <h5>Tech Arts Institute, CA, USA</h5>
                            <p class="info">
                            Ipsum ex exercitationem est aliquid eos saepe. Dolorum aperiam cupiditate labore vero deleniti Aut unde deserunt neque voluptas.
                            </p>
                        </div>
                        <span class="year">
                            <span class="to">2012</span>
                            <span class="from">2011</span>
                        </span>
                    </li>

                </ul>
            </div>
            <!--Education Column End-->

        </div>
        <!--Education & Experience Row End-->


        <!--Skills Row Start-->
        <div class="row">

            <!--Design Skills Column Start-->
            <div class="col-lg-6 skills">
                <div class="subheading">
                    <h3>Design Skills</h3>
                </div>

                <!--Design Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">Coral Draw</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="91">
                            <div class="progress-value">91%</div>
                        </div>
                    </div>
                </div>

                <!--Design Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">Photoshop</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="82">
                            <div class="progress-value">82%</div>
                        </div>
                    </div>
                </div>

                <!--Design Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">Illustrator</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="94">
                            <div class="progress-value">94%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Design Skills Column End-->

            <!--Coding Skills Column Start-->
            <div class="col-lg-6 skills">
                <div class="subheading">
                    <h3>Coding Skills</h3>
                </div>

                <!--Coding Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">HTML5</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="83">
                            <div class="progress-value">83%</div>
                        </div>
                    </div>
                </div>

                <!--Coding Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">CSS3</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="75">
                            <div class="progress-value">75%</div>
                        </div>
                    </div>
                </div>

                <!--Coding Skill Item-->
                <div class="skill-item">
                    <h4 class="progress-title">Javascript</h4>
                    <div class="progress">
                        <div class="progress-bar" data-progress-value="92">
                            <div class="progress-value">92%</div>
                        </div>
                    </div>
                </div>

            </div>
            <!--Coding Skills Column End-->

        </div>
        <!--Skills Row End-->
    </div>
</section>
<!--Resume Section End-->


<!--Porfolio Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="portfolio-section pt-page">
    <div class="section-container">

        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-briefcase"></i></span>
            <h2>Portfolio.</h2>
        </div>

        <div class="row">
            <!--Portfolio Filter-->
            <div class="col-md-12 portfolio-filter text-center">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".brand">Brand</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".graphic">Graphic</li>
                </ul>
            </div>
        </div>

        <!--Portfolio Items-->
        <div class="row portfolio-items mb-50">

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 brand graphic">
                <a class="image-link" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-1.jpg">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-1.jpg" alt="">
                        <figcaption>
                            <h4>Book Design</h4>
                            <p>Graphic</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 design">
                <a class="ajax-link" href="single-work.html">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-2.jpg" alt="">
                        <figcaption>
                            <h4>Notepad Design</h4>
                            <p>Design</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 design graphic">
                <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-3.jpg" alt="">
                        <figcaption>
                            <h4>Creative Cup</h4>
                            <p>Graphic</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 design">
                <a class="image-link" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-4.jpg">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-4.jpg" alt="">
                        <figcaption>
                            <h4>Business Card</h4>
                            <p>Design</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 brand">
                <a class="ajax-link" href="single-work.html">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-5.jpg" alt="">
                        <figcaption>
                            <h4>Back Pack</h4>
                            <p>Brand</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 design">
                <a class="ajax-link" href="single-work.html">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-6.jpg" alt="">
                        <figcaption>
                            <h4>Door Hangar</h4>
                            <p>Design</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 graphic">
                <a class="image-link" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-7.jpg">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-7.jpg" alt="">
                        <figcaption>
                            <h4>Notepad Design</h4>
                            <p>graphic</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 brand">
                <a class="image-link" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-8.jpg">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-8.jpg" alt="">
                        <figcaption>
                            <h4>Creative Flyer</h4>
                            <p>Brand</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 brand">
                <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-9.jpg" alt="">
                        <figcaption>
                            <h4>Mobile App</h4>
                            <p>Brand</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 graphic">
                <a class="image-link" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-10.jpg">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-10.jpg" alt="">
                        <figcaption>
                            <h4>Cup Design</h4>
                            <p>Graphic</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <!--Portfolio Item-->
            <div class="item col-lg-4 col-sm-6 brand graphic">
                <a class="ajax-link" href="single-work.html">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/img-11.jpg" alt="">
                        <figcaption>
                            <h4>Creative Box</h4>
                            <p>brand</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

        </div>
    </div>
</section>
<!--Porfolio Section End-->


<!--Blog Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="blog-section pt-page">
    <div class="section-container">

        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-book"></i></span>
            <h2>My Blogs.</h2>
        </div>

        <div class="row blogs-masonry">

            <div class="col-lg-4 col-sm-6">
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

            <div class="col-lg-4 col-sm-6">
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

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-3.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Design</span>
                        <h4 class="blog-title">My Current Workspace</h4>
                        <div class="blog-date">August 4, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-4.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Traveling</span>
                        <h4 class="blog-title">Best Place to Travel this Summer</h4>
                        <div class="blog-date">July 28, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-5.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Web Design</span>
                        <h4 class="blog-title">Latest UI Trends to Inspired From</h4>
                        <div class="blog-date">July 25, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-6.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Technology</span>
                        <h4 class="blog-title">Latest Tech 2018</h4>
                        <div class="blog-date">July 19, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-7.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">LifeStyle</span>
                        <h4 class="blog-title">Best & Easy To cook</h4>
                        <div class="blog-date">July 10, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-8.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Technology</span>
                        <h4 class="blog-title">Best Sound Editing Software</h4>
                        <div class="blog-date">July 1, 2018</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="blog-dark.html" class="blog-item">
                    <div class="blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img-9.jpg" alt="#">
                    </div>
                    <div class="blog-content">
                        <span class="cat">Traveling</span>
                        <h4 class="blog-title">Top Beaches in the world</h4>
                        <div class="blog-date">June 24, 2018</div>
                    </div>
                </a>
            </div>


        </div>
    </div>
</section>
<!--Blog Section End-->


<!--Contact Section Start-->
<section id="<?php  do_shortcode(get_field('section_id'));?>" class="contact-section pt-page">
    <div class="section-container">

        <!--Page Heading-->
        <div class="page-heading">
            <span class="icon"><i class="lnr lnr-envelope"></i></span>
            <h2>Contact Me.</h2>
        </div>

        <!--Form Row-->
        <div class="row mb-70">
            <div class="col-lg-8  offset-lg-2">
                <div class="subheading">
                    <h3>Let's Talk</h3>
                </div>

                <!--Form Start-->
                <form id="contact-form" method="post" action="https://watson-vcard.netlify.com/mail.php">
                    <div class="row">


                        <!--Name Field-->
                        <div class="col-md-6 mb-50">
                            <span class="input">
                                <input class="input__field cf-validate" type="text" id="cf-name" name="name" />
                                <label class="input__label" for="cf-name">Name</label>
                            </span>
                        </div>

                        <!--Email Field-->
                        <div class="col-md-6 mb-50">
                            <span class="input">
                                <input class="input__field cf-validate" type="text" id="cf-email" name="email" />
                                <label class="input__label" for="cf-email">Email</label>
                            </span>
                        </div>

                        <!--Message Box-->
                        <div class="col-md-12 mb-30">
                            <span class="input">
                                <textarea  class="input__field cf-validate" id="cf-message" name="message" rows="5" ></textarea>
                                <label class="input__label" for="cf-message">How can we help you?</label>
                            </span>
                        </div>

                        <div class="alert-container col-md-12"></div>

                        <!--Submit Button-->
                        <div class="col-md-12 text-center">
                            <button id="cf-submit" class="btn-main">Send Message</button>
                        </div>


                    </div>
                </form>
                <!--Form End-->

            </div>
        </div>

        <!--Contact Info Row Start-->
        <div class="row contact-info mb-70">

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                <h5><a href="mailto:example@example.com">example@example.com</a></h5>
            </div>

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                <h5>123 Lorem Ipsum, USA</h5>
            </div>

            <!--Contact Info Item-->
            <div class="col-md-4 info-item">
                <span class="icon"><i class="fas fa-phone"></i></span>
                <h5>(+1) 123 456 7890</h5>
            </div>

        </div>
        <!--Contact Info Row End-->

    </div>
    <!--Google Map Start-->
    <div class="google-map">
            <div id="map" data-latitude="-37.817214" data-longitude="144.955925" data-zoom="15"></div>
    </div>
    <!--Google Map End-->
</section>
<!--Contact Section End-->


</div>
<!--Main End-->

</div>

<?php get_footer(); ?>