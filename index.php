<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Resume | Aldi Faisal Muhammad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="img/main_photo.jpg" alt="Aldi Faisal Muhammad">
              </div>
              <div class="header-titles">
                <h3>Aldi Faisal Muhammad</h3>
                <h4>Backend Developer</h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <!-- <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li> -->
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="https://www.linkedin.com/in/aldifaisalm/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.facebook.com/ajoyyyyyyy/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/AldiFaisalM" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
            </div>

            <div class="copyrights">© <?= date('Y'); ?> All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>Aldi Faisal Muhammad</h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">Backend Developer</div>
                            </div>

                            <div class="item">
                              <div class="sp-subtitle">Data Analyst</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="section-content">
                  <div class="page-title">
                    <h2>About <span>Me</span></h2>
                  </div>

                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7 text-just">
                      <p>Highly Analytical and detail-oriented backend stack developer with 3 year of hands-on experience in developing websites, administering database and information systems. Possesses In-depth knowledge of website and mobile application development, database development and data analysist.</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <?php
                            $birthDate = "04/01/1996";
                            $birthDate = explode("/", $birthDate);
                            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                              ? ((date("Y") - $birthDate[2]) - 1)
                              : (date("Y") - $birthDate[2]));
                            ?>
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <span class="title">Age</span>
                              </div>

                              <div class="col-xs-12 col-sm-8">
                                <span class="value"><?= $age; ?></span>
                              </div>
                            </div>
                          </li>

                          <li>
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <span class="title">Residence</span>
                              </div>

                              <div class="col-xs-12 col-sm-8">
                                <span class="value">Indonesia</span>
                              </div>
                            </div>
                          </li>

                          <li>
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <span class="title">Address</span>
                              </div>

                              <div class="col-xs-12 col-sm-8">
                                <span class="value">Kararangge Street 87, Bandung, West Java</span>
                              </div>
                            </div>
                          </li>

                          <li>
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <span class="title">E-mail</span>
                              </div>

                              <div class="col-xs-12 col-sm-8">
                                <span class="value">aldifaisalm@gmail.com</span>
                              </div>
                            </div>
                          </li>

                          <li>
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <span class="title">Phone</span>
                              </div>

                              <div class="col-xs-12 col-sm-8">
                                <span class="value">(+628)51-5639-7301</span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-10"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-code"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Programming</h4>
                              <p>Creating programs with php, html and golang based systems, writing neat and detailed coding.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div><div class="ci-text">
                              <h4>Web Design</h4>
                              <p>Create designs for websites with an elegant appearance based on html and css.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-chart-bars"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Data Analyst</h4>
                              <p>Data analysis for big data or cleaning data to be used as a dashboard.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-briefcase"></i>
                            </div><div class="ci-text">
                              <h4>Freelance</h4>
                              <p>Open opportunities for freelancers who can work whenever needed.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Services -->

                  <div class="white-space-30"></div>

                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="testimonials owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="img/testimonials/dzikri.jpg" alt="Dzikri Hikmat Fauzi">
                          </div>
                          <div class="text">
                            <p>"Pokoknya mah AL mantap!"</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Dzikri Hikmat Fauzi</h4>
                            <h5 class="company">Telkom Regional 3 Operational Center</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="img/testimonials/iqbal.jpg" alt="Iqbal Zainul Akhlaq">
                          </div>
                          <div class="text">
                            <p>"Bisa belajar cepat, anaknya detail."</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Iqbal Zainul Akhlaq</h4>
                            <h5 class="company">Telkom Regional 3 Operational Center</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="img/testimonials/fajar.jpg" alt="Muhammad Fajar Siddiq">
                          </div>
                          <div class="text">
                            <p>Problem solvingnya keren!.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Muhammad Fajar Siddiq</h4>
                            <h5 class="company">Telkom Regional 3 Operational Center</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div>
                  <!-- End of Testimonials -->

                  <div class="white-space-50"></div>

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Clients</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="clients owl-carousel">
                        
                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/IOCR3.jpg" alt="Logo">
                          </a>
                        </div>

                        <!-- <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-2.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-3.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-4.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-5.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-6.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-7.png" alt="Logo">
                          </a>
                        </div> -->
  
                      </div>
                    </div>
                  </div>
                  <!-- End of Clients -->

                  <div class="white-space-30"></div>

                  <!-- Pricing -->
                  <!-- <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="fw-pricing clearfix row">
                        
                        <div class="fw-package-wrap col-md-6 ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Silver</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>
                            
                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                            </div>

                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                          </div>
                        </div>
     
                        <div class="fw-package-wrap col-md-6 highlight-col ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Gold</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>

                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            
                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                            <div class="fw-default-row">Donec non diam</div>
                            <div class="fw-default-row"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> -->
                  <!-- End of Pricing -->

                  <!-- <div class="white-space-50"></div> -->

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fun <span>Facts</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Happy Clients</h4>
                        <span class="fun-fact-block-value">4</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Working Hours</h4>
                        <span class="fun-fact-block-value">2,372</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Awards Won</h4>
                        <span class="fun-fact-block-value">1</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>
                  </div>
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="section-content">
                  <div class="page-title">
                    <h2>Resume</h2>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>
                      
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2021</h5>
                            <span class="item-company">Widyatama University</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Bachelor of Computer Science</h4>
                            <p>Graduated with GPA 3.24 of 4.00</p>
                            <p>Minor : Databases</p>
                            <p>Research Paper : Monitoring System for Chicken Egg Incubator Using Raspberry Pi</p>
                          </div>
                        </div>

                        <!-- <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2007</h5>
                            <span class="item-company">University of Studies</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Graphic Design</h4>
                            <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                          </div>
                        </div> -->
                      </div>

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2022 - Current</h5>
                            <span class="item-company">Telkom Regional 3 Operation Center</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Backend Developer</h4>
                            <p>• Developed attendance website system using CodeIgniter Framework.</p>
                            <p>• Create API connection for Mobile Application system.</p>
                            <p>• Fixed bugs from existing websites and implemented enhancements
  that significantly improved web functionality and speed.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2020 - 2022</h5>
                            <span class="item-company">VoxaCode</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Full-Stack Developer</h4>
                            <p>• Developed website system using CodeIgniter and Wordpress Framework.</p>
                            <p>• Create API connection for both domains.</p>
                            <p>• Create websites system for customer.</p>
                          </div>
                        </div>
                        
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2019 - 2020</h5>
                            <span class="item-company">SoegeeFX</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Backend Developer</h4>
                            <p>• Developed website system using Laravel.</p>
                            <p>• Use API connection from central company to site.</p>
                            <p>• Create CRM website systems.</p>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Coding <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 1 -->
                        <div class="skill clearfix">
                          <h4>JavaScript</h4>
                          <div class="skill-value">65%</div>
                        </div>
                        <div class="skill-container skill-3">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 1 -->
                        
                        <!-- Skill 2 -->
                        <div class="skill clearfix">
                          <h4>PHP</h4>
                          <div class="skill-value">80%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 2 -->
                        
                        <!-- Skill 3 -->
                        <div class="skill clearfix">
                          <h4>HTML/CSS</h4>
                          <div class="skill-value">80%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 3 -->
                        
                        <!-- Skill 4 -->
                        <div class="skill clearfix">
                          <h4>C/C#</h4>
                          <div class="skill-value">70%</div>
                        </div>
                        <div class="skill-container skill-4">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 4 -->

                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>Laravel</h4>
                          <div class="skill-value">60%</div>
                        </div>
                        <div class="skill-container skill-2">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>CodeIgniter</h4>
                          <div class="skill-value">80%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 6 -->

                        <!-- Skill 7 -->
                        <div class="skill clearfix">
                          <h4>Golang</h4>
                          <div class="skill-value">60%</div>
                        </div>
                        <div class="skill-container skill-2">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 7 -->

                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>MySQL</h4>
                          <div class="skill-value">75%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>API</h4>
                          <div class="skill-value">70%</div>
                        </div>
                        <div class="skill-container skill-4">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->

                      </div>
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Knowledges</h3>
                      </div>

                      <ul class="knowledges">
                        <li>Web Design</li>
                        <li>Marketing</li>
                        <li>Leadership</li>
                        <li>Time Management</li>
                        <li>Communication</li>
                        <li>Problem-Solving</li>
                        <li>Social Networking</li>
                        <li>Flexibility</li>
                        <li>Detail Oriented</li>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="img/certificates/udemy1.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Go-Lang Programming: Beginner to Advanced</h4>
                          </div>
                          <div class="certi-id">
                            <span>UDEMY</span>
                          </div>
                          <div class="certi-date">
                            <span>December 2022</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 1 -->

                    <!-- Certificate 2 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="img/certificates/telkom.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Overview Data Analytics for BCP</h4>
                          </div>
                          <div class="certi-id">
                            <span>Telkom Corporate University</span>
                          </div>
                          <div class="certi-date">
                            <span>July 2022</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 2 -->

                    <!-- Certificate 3 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="img/certificates/coursera.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Command Line in Linux</h4>
                          </div>
                          <div class="certi-id">
                            <span>COURSERA</span>
                          </div>
                          <div class="certi-date">
                            <span>July 2022</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 3 -->

                    <!-- Certificate 4 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="img/certificates/google-analytics.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Google Analytics for Beginners</h4>
                          </div>
                          <div class="certi-id">
                            <span>Google Analytics Academy</span>
                          </div>
                          <div class="certi-date">
                            <span>February 2022</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 4 -->

                    <!-- Certificate 5 -->
                    <div class="col-xs-12 col-sm-12">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="img/certificates/babastudio.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Implement Object-oriented Structured Programming and Write Code According to The Principles of E-Commerce Websites to Become a Website Developer</h4>
                          </div>
                          <div class="certi-id">
                            <span>BABA Studio</span>
                          </div>
                          <div class="certi-date">
                            <span>September 2021</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 5 -->

                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="section-content">
                  <div class="page-title">
                    <h2>Portfolio</h2>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_website">Website</a>
                          </li>
                          <!-- <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li> -->
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">
                          
                          <!-- <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/1.jpg" alt="SoundCloud Audio" title="" />
                              <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">SoundCloud Audio</h4>
                            <span class="category">SoundCloud</span>
                          </figure> -->

                          <figure class="item standard" data-groups='["category_all", "category_website"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/roc/Login.png" alt="Media Project 2" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">SiManis Project</h4>
                            <span class="category">Website</span>
                          </figure>

                          <!-- <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/3.jpg" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure> -->

                          <!-- <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/4.jpg" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 1</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/5.jpg" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="img/portfolio/full/5.jpg"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/6.jpg" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure> -->
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="section-content">
                  <div class="page-title">
                    <h2>Contact</h2>
                  </div>

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Indonesia</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>(+628)21-1451-4105</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>aldifaisalm@gmail.com</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <!-- <div id="map" class="map"></div> -->
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
