
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Constra - Construction Html5 Template</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href={{ asset('plugins/bootstrap/bootstrap.min.css') }}>
  <link rel="stylesheet" href={{ asset('plugins/fontawesome/css/all.min.css') }}>
  <link rel="stylesheet" href={{ asset('plugins/animate-css/animate.css') }}>
  <link rel="stylesheet" href={{ asset('plugins/slick/slick.css') }}>
  <link rel="stylesheet" href={{ asset('plugins/slick/slick-theme.css') }}>
  <link rel="stylesheet" href={{ asset('plugins/colorbox/colorbox.css') }}>
  <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>
                </ul>
            </div>
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
    </div>
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href={{ route('index') }}>
                  <img loading="lazy" src="images/logo.png" alt="Constra">
                </a>
            </div>
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle">(+9) 847-291-4353</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">office@Constra.com</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href={{ route('contact') }}>Get A Quote</a>
                  </li>
                </ul>
            </div>
          </div>

      </div>
    </div>
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                          <a href={{ route('index') }} class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="active"><a href={{ route('index') }}>Home One</a></li>
                            <li><a href={{ route('index_1') }}>Home Two</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href={{ route('about') }}>About Us</a></li>
                            <li><a href={{ route('team') }}>Our People</a></li>
                            <li><a href={{ route('testimonials') }}>Testimonials</a></li>
                            <li><a href={{ route('faq') }}>Faq</a></li>
                            <li><a href={{ route('pricing') }}>Pricing</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href={{ route('projects') }}>Projects All</a></li>
                            <li><a href={{ route('projects_single') }}>Projects Single</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href={{ route('services') }}>Services All</a></li>
                            <li><a href={{ route('service_single') }}>Services Single</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href={{ route('typography') }}>Typography</a></li>
                            <li><a href={{ route('A404') }}>404</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                <ul class="dropdown-menu">
                                  <li><a href="#!">Child Menu 1</a></li>
                                  <li><a href="#!">Child Menu 2</a></li>
                                  <li><a href="#!">Child Menu 3</a></li>
                                </ul>
                            </li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href={{ route('news_left_sidebar') }}>News Left Sidebar</a></li>
                            <li><a href={{ route('news_right_sidebar') }}>News Right Sidebar</a></li>
                            <li><a href={{ route('news_single') }}>News Single</a></li>
                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href={{ route('contact') }}>Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
        </div>

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div>

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div>
    </div>
</div>
</header>
@yield('amany')

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href={{ route('service_single') }}>Pre-Construction</a></li>
              <li><a href={{ route('service_single') }}>General Contracting</a></li>
              <li><a href={{ route('service_single') }}>Construction Management</a></li>
              <li><a href={{ route('service_single') }}>Design and Build</a></li>
              <li><a href={{ route('service_single') }}>Self-Perform Construction</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href={{ route('about') }}>About</a></li>
                <li><a href={{ route('team') }}>Our people</a></li>
                <li><a href={{ route('faq') }}>Faq</a></li>
                <li><a href={{ route('news_left_sidebar') }}>Blog</a></li>
                <li><a href={{ route('pricing') }}>Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div>
    </div>
  </footer>
  <script src={{ asset('plugins/jQuery/jquery.min.js') }}></script>
  <script src={{ asset('plugins/bootstrap/bootstrap.min.js') }} defer></script>
  <script src={{ asset('plugins/slick/slick.min.js') }}></script>
  <script src={{ asset('plugins/slick/slick-animation.min.js') }}></script>
  <script src={{ asset('plugins/colorbox/jquery.colorbox.js') }}></script>
  <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>
  <script src={{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU') }} defer></script>
  <script src={{ asset('plugins/google-map/map.js') }} defer></script>
  <script src={{ asset('js/script.js') }}></script>

  </div>
  </body>

  </html>
