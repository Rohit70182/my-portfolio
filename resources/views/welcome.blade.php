<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>

    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">


    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">My Portfolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
              <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="{{ asset('public/images/illustrations/hello3.svg') }}" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Hello!</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m Rohit Kumar</h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Web Developer & Web Designer</p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/profile.php?id=100008031795647&mibextid=LQQJ4d  " title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/rohit_85882?igsh=eTdmZzNkaDVha2l6&utm_source=qr" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/rohit-kumar-6541a1222/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                </ul>
              </nav>
            </div>
            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-bg"></div>
</header>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2">Hello! I’m Rohit Kumar.</h2>
        <p>I am passionate about Wed Development and Web Design. I am a skilled front-end developer and master of Web Development (php). I am a quick learner and a team worker that gets the job done. I can easily capitalize on low hanging fruits and quickly maximize timely deliverables for real-time schemas.</p>
        <div class="row mt-3">
          <div class="col-sm-2">
            <div class="pb-1">Age:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">25</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10">
            <a href="mailto:kumarrohit8488@gmail.com" class="pb-1 fw-bolder">kumarrohit8488@gmail.com</a>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Phone:</div>
          </div>
          <div class="col-sm-10">
          <a href="tel:+91 70182-85882" class="pb-1 fw-bolder">+91 70182-85882</a>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Address:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">Una, Himachal Pradesh, India</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Status:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">Available</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="public/images/DSC03909.JPG" width="400" height="400" alt="Rohit Kumar"/></div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="services">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Services</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
    </div>
    <div class="row py-3">
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="public/images/services/web-design.svg" width="96" height="96" alt="web design"/>
        <div class="h5">Web Design</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2" src="public/images/services/graphic-design.svg" width="96" height="96" alt="graphic design"/>
        <div class="h5">Graphic Design</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2" src="public/images/services/ui-ux.svg" width="96" height="96" alt="ui-ux"/>
        <div class="h5">UI/UX</div>
      </div>
      <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="public/images/services/app-development.svg" width="96" height="96" alt="app development"/>
        <div class="h5">App Development</div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">My Skills</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web  Development and Web Design</p>
    </div>
    <div class="bg-light p-3">
      <div class="row">
        <div class="col-md-5">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">HTML5</span><span>90%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">CSS3</span><span>90%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">JavaScript</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">PHP</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">WordPress</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">MySQL</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-2 px-lg-4 pt-5" id="portfolio">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Portfolio </h2>
    </div>
    <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
      <div class="grid-sizer"></div>
      <div class="grid-item"><a href="#">
          <figure class="portfolio-item"><img src="public/images/portfolio/1-small.png" data-bp="public/images/portfolio/1.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">Web Design</h4>
              <div>Dribbble.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://github.com">
          <figure class="portfolio-item"><img src="public/images/portfolio/2-small.png" data-bp="public/images/portfolio/2.jpg" data-caption="Example of an optional caption." alt="portfolio">
            <figcaption> 
              <h4 class="h5 mb-0">Web Development</h4>
              <div>GitHub.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://soundcloud.com/">
          <figure class="portfolio-item"><img src="public/images/portfolio/3-small.png" data-bp="public/images/portfolio/3.jpg" data-caption="Example of an optional caption." alt="portfolio">
            <figcaption> 
              <h4 class="h5 mb-0">Audio Mixing</h4>
              <div>Soundcloud.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="public/images/portfolio/4-small.png" data-bp="public/images/portfolio/4.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">Video Editing</h4>
              <div>Adobe After Effects</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="public/images/portfolio/5-small.png" data-bp="images/portfolio/5.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">Photography</h4>
              <div>Adobe Photoshop</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.android.com/">
          <figure class="portfolio-item"><img src="public/images/portfolio/6-small.png" data-bp="images/portfolio/6.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Android</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="public/images/portfolio/7-small.png" data-bp="images/portfolio/7.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">App Design</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="public/images/portfolio/8-small.png" data-bp="images/portfolio/8.jpg" alt="portfolio">
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Experience</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Web Design</h3>
                <div class="text-muted text-small">Webbie LLC. <small>(2018-2024)</small></div>
              </div><img src="public/images/services/web-design.svg" width="48" height="48" alt="web design"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
            <p>Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-left" data-aos-delay="400">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Full Stack Development</h3>
                <div class="text-muted text-small">Coder Inc. <small>(2020-2024)</small></div>
              </div><img src="public/images/services/full-stack.svg" width="48" height="48" alt="full stack"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
            <p>Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="testimonials">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Client Testimonials</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="200">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Rohit is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Ariya</div>
            <div class="text-small">Web Developer</div>
          </div><img class="me-md-3 rounded" src="public/images/testimonials/client3.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
      <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="400">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Rohit is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Braiden</div>
            <div class="text-small">Web Designer</div>
          </div><img class="me-md-3 rounded" src="public/images/testimonials/client4.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Contact Me</h2>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="bg-light my-2 p-3 pt-2"><form action="https://formspree.io/your@email.com"
    method="POST">
    <div class="form-group my-2">
      <label for="name" class="form-label fw-bolder">Name</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Email</label>
      <input class="form-control" type="email" id="email" name="_replyto" required>
    </div>
  <div class="form-group my-2">
    <label for="message" class="form-label fw-bolder">Message</label>
    <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
  </div>
  <button class="btn btn-primary mt-2" type="submit">Send</button>
</form>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5">Let’s talk how I can help you!</div>
          <p>If you like my work and want to avail my services then drop me a message using the contact form. </p>
          <p>Or get in touch using my email, whatsapp or my contact number.</p>
          <p>See you!</p>
        </div>
        <div class="mt-53 px-1">
          <div class="row"> 
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
                <a href="mailto:kumarrohit8488@gmail.com" class="pb-1 fw-bolder">kumarrohit8488@gmail.com</a>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Whats App:</div>
            </div>
            <div class="col-sm-10">
                <a href="https://wa.me/917018285882" class="pb-1 fw-bolder">+91 70182-85882</a>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
                <a href="tel:+917018285882" class="pb-1 fw-bolder">+91 70182-85882</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4">Rohit Kumar</div>
      <p>Web Developer & Web Designer</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/profile.php?id=100008031795647&mibextid=LQQJ4d" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/rohit_85882?igsh=eTdmZzNkaDVha2l6&utm_source=qr" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/rohit-kumar-6541a1222/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; Rohit Kumar. All rights reserved.</div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    
    <script src="{{ asset('public/js/aos.min.js')}}"></script>
    <!-- <script src="{{ asset('js/app.js')}}"></script> -->
    <script src="{{ asset('public/js/BigPicture.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js.map"></script>
    
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script> -->
    <!-- <script src="{{ asset('js/bootstrap.js')}}"></script> -->
    <script src="{{ asset('public/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('public/js/main.js')}}"></script>
    <script src="{{ asset('public/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('public/js/purecounter.min.js')}}"></script>
  </body>
</html>