<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <meta name="description" content="RAD Clips Media offers a comprehensive suite of creative services including videography, video editing, photography, sound design, graphic design, and songwriting. Whether you're seeking stunning visuals, immersive soundscapes, or captivating designs, our talented team brings expertise and passion to every project. Elevate your brand with RAD Clips Media – where creativity meets craftsmanship.">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('welcome_assets/fonts/font-awesome.min.css')}}">    
    <link rel="stylesheet" href="{{asset('welcome_assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Highlight-Blue.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/untitled.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Article-List.min.css')}}">

    <script src="{{asset('welcome_assets/js/app.js')}}"></script>
    <script src="{{asset('welcome_assets/js/agency.js')}}"></script>
    <script src="{{asset('welcome_assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('welcome_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('welcome_assets/js/bs-init.js')}}"></script>

    

</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand text-center d-flex justify-content-center align-items-center" href="#page-top" style="font-family: Audiowide, serif;min-height: 50px;max-height: 60px;min-width: 50px;max-width: 60px;border-radius: 50px;border-style: none;margin-bottom: 5px;margin-top: 5px;padding: 5px;padding-top: 8px;padding-bottom: 8px;margin-right: 5px;"><img src="welcome_assets/img/RADBLACK.svg" style="min-height: 30px;max-height: 40px;"></a>
                <a class="navbar-brand text-center d-flex justify-content-center align-items-center" href="#page-top" style="font-family: Audiowide, serif;border-radius: 0;border-style: none;margin-bottom: 5px;margin-top: 5px;min-width: 60px;">RAD</a>
            </div>
            <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background: url(&quot;welcome_assets/img/9024f529-6c42-4783-8c7b-9a23c4b6bca3_upscaled.png&quot;) no-repeat;background-size: cover;">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>We Digitalize Your Memories</span></div>
                <div class="intro-heading text-uppercase"><span>RAD CLIPS MEDIA</span></div><a class="btn btn-primary btn-xl text-uppercase" role="button" href="#services">Tell me more</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Services</h2>
                    <h3 class="text-muted section-subheading">What we can offer to you.</h3>
                </div>
            </div>
            <div class="row text-center">
                @include('landing-page-partials.services', ['services' => $service])
            </div>
        </div>
    </section>
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Portfolio</h2>
                    <h3 class="text-muted section-subheading">Feel free to explore our projects</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/Video%20Editing.png">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Clips</h4>
                        <p class="text-muted">Video Edits</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal2" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/Videography.png">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Shoot</h4>
                        <p class="text-muted">Videography</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal3" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/3-thumbnail.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/graphics%20design.png">
                    </a>
                    <div class="portfolio-caption">
                        <h4><strong>Explore</strong><br></h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/serum-3d-665x499.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Blast</h4>
                        <p class="text-muted">Sound Design</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal6" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="welcome_assets/img/portfolio/Song%20Writing.png">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lyric</h4>
                        <p class="text-muted">Song Writing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">The story behind RAD Clips Media</h3>
                </div>
            </div>
            <div class="row">
            @include('landing-page-partials.history', ['histories' => $histories])
            </div>
        </div>
    </section>
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">RAD Team</h2>
                    <h3 class="text-muted section-subheading">Meet RAD Clips Media's members</h3>
                </div>
            </div>
            <div id="team-container" class="row">
                @include('landing-page-partials.team-members', ['team' => $team])
            </div>
        </div>
    </section>
    <section id="contact" style="background-image:url('welcome_assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="text-muted section-subheading">Message us for the services that you need.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" method="POST" action="{{ route('message.store') }}" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name *" required="">
                                    <small class="form-text text-danger flex-grow-1 help-block lead"></small>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email *" required="">
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="Your Phone *" required="">
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <textarea class="form-control" id="desc" name="desc" placeholder="Your Message *" required=""></textarea>
                                    <small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© RAD 2024</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=61561400998845"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Frad-clips%2F%3Ffbclid%3DIwZXh0bgNhZW0CMTAAAR2G0-JmHH29iIJD6A0pOy-2se4q36cf3xY1yS_ah5Yz-NHree6UuC8SvLg_aem_LzRB7G-CD7RrTYENADlBXw&amp;h=AT3N0fqYGrg18RIziCA5ESCTL7EpyGecHshunTk6_Idl0yacmD0aHYtw4_ngtDfGWk2Wi2Oc99CCUPkqKYqMfWnvBXimPHkM5a5jUBuh9fSGlhAh2zP4WDpvr5vrKAUbx7RL3Q"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/1-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/2-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/3-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/4-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/5-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="text-muted item-intro">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="welcome_assets/img/portfolio/6-full.jpg">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-unstyled">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="welcome_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="welcome_assets/js/bs-init.js"></script>
    <script src="welcome_assets/js/agency.js"></script>
</body>

</html>