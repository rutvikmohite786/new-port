@extends('layouts.user')
@section('content')
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">RutvikDev</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#experience" class="nav-item nav-link">Experience</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#price" class="nav-item nav-link">Price</a>
                <a href="#review" class="nav-item nav-link">Review</a>
                <a href="#team" class="nav-item nav-link">Team</a>
                <a href="#blog" class="nav-item nav-link">Blog</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
<!-- Hero Start -->
<div class="hero" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <p>I'm</p>
                        <h1>Rutvik</h1>
                        <h2></h2>
                        <div class="typed-text">Back End Developer, Front End Developer</div>
                    </div>
                    <div class="hero-btn">
                        <a class="btn" href="">Hire Me</a>
                        <a class="btn" href="">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="img/hero.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header text-left">
                        <p>Learn About Me</p>
                        <h2>{{$about->title}}</h2>
                    </div>
                    <div class="about-text">
                        <p>
                         {{$about->description}}
                        </p>
                    </div>
                    <div class="skills">
                        @foreach($tech as $key => $value)
                            
                        <div class="skill-name">
                            <p>{{$value->name}}</p>
                            <p>{{$value->percentage}}%</p>
                        </div>
                        @endforeach

                   
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service" id="service">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>What I do</p>
            <h2>Awesome Quality Services</h2>
        </div>
        <div class="row">
        @foreach($service as $key => $value)
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-laptop"></i>
                    </div>
                    <div class="service-text">
                        <h3>Web Design</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Experience Start -->
<div class="experience" id="experience">
    <div class="container">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Resume</p>
            <h2>Working Experience</h2>
        </header>
        <div class="timeline">
          @foreach($experience as $key => $value)
            
            <div class="timeline-item {{ $key%2==0 ? 'left' : 'right'}} wow {{$key%2==0 ? 'slideInLeft' : 'slideInRight'}}" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <div class="timeline-date">2021 - 2023</div>
                    <h2>{{$value->title}}({{$value->compony_name}})</h2>
                    <h4>{{$value->location}}</h4>
                    <p>
                      {{$value->description}}
                    </p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Job Experience End -->


<!-- Banner Start -->
<div class="banner wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Reasonable Price</p>
            <h2>Get A <span>Special</span> Price</h2>
        </div>
        <div class="container banner-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                quis sem. Curabitur non nisl nec nisi scelerisque maximus.
            </p>
            <a class="btn">Pricing Plan</a>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Portfolio</p>
            <h2>My Excellent Portfolio</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-filter">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-1">Web Design</li>
                    <li data-filter=".filter-2">Web Development</li>
                    <li data-filter=".filter-3">Portfolio</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img ">
                        <img src="img/portfolio-1.jpg" alt="Image">
                    </div>

                    <div class="portfolio-text bt-model">
                        <h3>eCommerce Website</h3>
                        <!-- <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a> -->
                        <a class="btn" data-toggle="modal" data-target="#exampleModal">+</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="img/portfolio-2.jpg" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>Product Landing Page</h3>
                        <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="img/portfolio-3.jpg" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>JavaScript quiz game</h3>
                        <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="img/portfolio-4.jpg" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>JavaScript drawing</h3>
                        <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="img/portfolio-5.jpg" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>Social Mobile Apps</h3>
                        <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <img src="img/portfolio-6.jpg" alt="Image">
                    </div>
                    <div class="portfolio-text">
                        <h3>Company Website</h3>
                        <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Banner Start -->
<div class="banner wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Awesome Discount</p>
            <h2>Get <span>30%</span> Discount</h2>
        </div>
        <div class="container banner-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                quis sem. Curabitur non nisl nec nisi scelerisque maximus.
            </p>
            <a class="btn">Order Now</a>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Testimonial Start -->
<div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
    <div class="container">
        <div class="testimonial-icon">
            <i class="fa fa-quote-left"></i>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                        suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                        suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-3.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                        suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="team" id="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Team</p>
            <h2>Expert Team Members</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Mollie Ross</h2>
                        <h4>Web Designer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Dylan Adams</h2>
                        <h4>Web Developer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Jennifer Page</h2>
                        <h4>Apps Designer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <h4>Apps Developer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" action="store.php" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Blog Start -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>From Blog</p>
            <h2>Latest Articles</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Web Design</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin
                            viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus,
                            ornare mattis nisl massa et eros vitae pulvin
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Apps Design</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>10</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin
                            viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus,
                            ornare mattis nisl massa et eros vitae pulvin
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
        <div class="container">
            <div class="footer-info">
                <h2>Rutvik</h2>
                <h3>Vastrapur, Ahmedabad, INDIA</h3>
                <div class="footer-menu">
                    <p>+012 345 67890</p>
                    <p>info@example.com</p>
                </div>
                <div class="footer-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved | Designed By <a href="https://htmlcodex.com">Rutvik</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to top button -->
<a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

@endsection
