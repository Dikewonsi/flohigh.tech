<?php
      $msg = '';
      $mgsClass = '';

      //check for submit
      if(isset($_POST['submit']))
      {
        $name = htmlspecialchars($_POST['fullname']);    
        $mobile = htmlspecialchars($_POST['mobile_number']);
        $email = htmlspecialchars($_POST['email']);
        $interested_in = htmlspecialchars($_POST['interested_in']);
        $whatsapp_no = htmlspecialchars($_POST['whatsapp_no']);
        $your_location = htmlspecialchars($_POST['your_location']);
        $description = htmlspecialchars($_POST['description']);
      
        //Check Required Fields
        if(!empty($email) && !empty($name)){
          //Passed
          //Recipient Email
          $toEmail = 'info@flohigh.tech';
          $subject = 'Contact Request From '.$name;
          $body = '<h2>Contact Request</h2>
          <h4>Full Name</h4><p>'.$name.'</p>    
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Phone Number</h4><p>'.$mobile.'</p>
          <h4>Whatsapp Number</h4><p>'.$whatsapp_no.'</p>
          <h4>Interested In</h4><p>'.$interested_in.'</p>   
          <h4>Sender Location</h4><p>'.$your_location.'</p>
          <h4>Project Description</h4><p>'.$description.'</p>';

          //Email Headers 
          $headers = "MIME-Version:1.0" ."\r\n";
          $headers .= "Content-Type:text/html; charset=UTF-8" ."\r\n";

          //Additional Headers
          $headers .= "From :" .$name. "<" .$email.">" ."\r\n";


          if(mail($toEmail, $description, $body, $headers)){
            //Email Sent
            $msg = "Your Email has been sent - We will be in touch with you very shortly";
            $msgClass = "alert-success";
          } else{
            //Email not Sent
            $msg = "Your Email was not sent";
            $msgClass = "alert-danger";
          }
          
        } 
      }

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <title>Flohigh Technology - Web Design &amp; Digital Marketing Agency</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
  </head>
  <body>
    <!--Start Header -->
      <header class="header-pr nav-bg-w main-header navfix fixed-top menu-white">
          <div class="container-fluid m-pad">
            <div class="menu-header">
              <div class="dsk-logo">
                <a class="nav-brand" href="./">
                  <img src="images/flohigh-logo.png" style="margin-left:-30px;" alt="Logos" class="mega-white-logo"/>
                  <img src="images/dark-logo.png" style="margin-left:-30px;" alt="Logo" class="mega-darks-logo"/>
                </a>
              </div>
              <div class="custom-nav" role="navigation">
                  <ul class="nav-list">
                    <li>
                      <a href="index.php" class="menu-links">Home</a>                        
                    </li>
                    <li >
                      <a href="about-us.php" class="menu-links">About Us</a>                        
                    </li>
                    <li >
                      <a href="our-services.php" class="menu-links">Our Services</a>                       
                    </li>
                    <li>
                      <a href="our-portfolio.php" class="menu-links">Portfolio</a>                        
                    </li>
                    <li>
                      <a href="contact-us.php" class="menu-links">Contact Us</a>                        
                    </li> 
                  </ul>
                  <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                  <ul class="nav-list right-end-btn">                                        
                    <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>              
                    <li class="hidedesktop darkmodeswitch"><div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax"/>  <span class="slider round"></span> </label> </div> </li> 
                    <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>            
                    <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                  </ul>
              </div>
            </div>

            <!--Mobile Menu-->
            <nav id="main-nav">
              <ul class="first-nav">                
                <li>
                    <a href="index.php">Home</a>                     
                </li>
                <li>
                    <a href="about-us.php">About Us</a>                     
                </li>
                <li>
                    <a href="our-services.php">Our Services</a>                     
                </li>
                <li>
                    <a href="our-portfolio.php">Portfolio</a>                     
                </li>
                <li>
                    <a href="contact-us.php">Contact Us</a>                     
                </li>                 
              </ul>
              <ul class="bottom-nav">
                <li class="prb">
                    <a href="tel:+2349169768106">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                          <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                            c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                            c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                            C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                            />
                      </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="mailto:info@flohigh.tech">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                          <path d="M0 0h24v24H0z" fill="none"/>
                      </svg>
                    </a>
                </li>                 
              </ul>
            </nav>
        </div>
      </header>
    <!--End Header -->

    <!--Start sidebar -->    
      <?php include('sidebar.php'); ?>
    <!--end sidebar -->


    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-6">
      <div class="text-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 v-center">
              <div class="bread-inner">
                <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                  <h2>Contact</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--Start Location-->
    <div class="contact-info pad-tb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <?php if ( $msg != '' ) : ?>
              <div class="alert <?php echo $msgClass; ?>">
                  <?php echo $msg; ?>
              </div>
              <?php endif; ?>
          </div>
          <div class="col-lg-8">
            <h2><span class="typer" id="main" data-words="Hello, Hola, Bonjour, Guten tag, Salve, Nǐn hǎo, Olá, Salaam Alaikum, Konnichiwa" data-delay="100" data-deleteDelay="1000"></span> <span class="cursorx" data-owner="first-typer">|</span></h2>
            <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-8">
            <h5 class="mt30 mb30">Visit Our offices</h5>
            <div class="getintouchblock">
              <div class="locations ">
                <div class="ouroffice">
                  <h4>Lagos</h4>
                  <p>33, Sarvodaya Trust Bldg, - 302013</p>
                  <a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a>
                </div>                
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h5 class="mt30 mb30">Dial a Call or Drop an Email</h5>
            <div class="media mt15">
              <div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
              <div class="media-body getintouchinfo">
                <a href="tel:+2349169768106">+234 916 9768 106 <span>Mon-Fri 9am - 6pm</span></a>
              </div>
            </div>
            <div class="media mt15">
              <div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
              <div class="media-body getintouchinfo">
                <a href="tel:+2349169768106">+234 916 9768 106<span>24/7</span></a>
              </div>
            </div>
            <div class="media mt15">
              <div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
              <div class="media-body getintouchinfo">
                <a href="mailto:info@flohigh.tech">info@flohigh.tech <span>Online Email Support</span></a>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
    <!--End Location-->
    <!--Start Enquire Form-->
    <section class="contact-page pad-tb bg-gradient3">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="niwax23form shadow">
              <div class="common-heading text-l">
                <h2 class="mt0 mb0">Get in touch</h2>
                <p class="mb50 mt10">We will catch you as early as we receive the message</p>
              </div>
              <div class="contact-form-card-pr contact-block-sw m0 iconin">
                <div class="form-block niwaxform">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" method="post">
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-user"></i></div>
                        <input type="text" placeholder=" " required="required" id="name" class="floating-input" name="fullname">
                        <label>Full Name*</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                        <input type="tel" placeholder=" " required="required" id="mobile_number" class="floating-input" name="mobile_number">
                        <label>Mobile Number*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-envelope"></i></div>
                        <input type="email" placeholder=" " required="required" id="email" class="floating-input" name="email">
                        <label>Email Address*</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-file-alt"></i></div>
                        <select required="required" id="interested_in" class="floating-select" name="interested_in">
                          <option value="">&nbsp;</option>
                          <option value="Graphic Design" >Graphic Design</option>
                          <option value="Web Design" >Web Design</option>
                          <option value="App Design" >App Design</option>
                          <option value="Branding Solutions" >Branding Solutions</option>
                          <option value="Marketing Solutions" >Marketing Solutions</option>
                          <option value="Other" >Other</option>
                        </select>
                        <label>Interested In*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-map-marker-alt"></i></div>
                        <input type="text" placeholder=" " required="required" id="your_location" class="floating-input" name="your_location">
                        <label>Your Location*</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fab fa-whatsapp"></i></div>
                        <input type="text" placeholder=" " required="required" id="skype_whatsapp_no" class="floating-input" name="whatsapp_no">
                        <label>Whatsapp No.*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="fieldsets row textareax">
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-comment-dots"></i></div>
                        <textarea placeholder=" " required="required" id="description" class="floating-input" name="description"></textarea>
                        <label>Brief about your project*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="custom-control custom-checkbox ctmsetsw">
                      <input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">
                      <label class="custom-control-label ctmlabl" for="agree">By clicking the “Submit” button you agree to our  <a href="javascript:void(0)">Terms &amp; Conditions</a>.</label>
                    </div>
                    <div class="fieldsets mt20"> <button type="submit" name="submit" class="btn btn-main bg-btn w-fit mb20"><span>Submit <i class="fas fa-chevron-right fa-icon"></i></span> <span class="loader"></span></button> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 m-mt30">
            <div class="pl--50">
              <h2>Trusted by</h2>
              <p class="mt10">Clients belive us and we deliverd them good service</p>
              <div class="client-trust-us mt30">
                <div class="clientsicons">
                  <a href="#"><img src="images/client/customer-logo-1.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-2.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-3.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-4.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-5.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-6.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-7.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-8.png" alt="icon"></a>
                  <a href="#"><img src="images/client/customer-logo-9.png" alt="icon"></a>
                </div>
              </div>

              <div class="owl-carousel testimonial-card-a contact-review shadow mt40">
                <div class="testimonial-card">
                  <div class="tt-text">
                    <p>Flohigh Technology is our go-to partner for comprehensive marketing solutions. Their strategic approach to SEO, social media, and content marketing significantly increased our online engagement. A reliable and results-driven team that consistently delivers excellence.</p>
                  </div>
                  <div class="client-thumbs mt20">
                    <div class="media v-center">
                      <div class="user-image bdr-radius"><img src="images/client/profile-user.png" alt="girl" class="img-fluid" /></div>
                      <div class="media-body user-info v-center">
                        <h5>Femi Collins</h5>
                        <p>Marketing Manager, <small> Global Tech Solutions</small></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-card">
                  <div class="tt-text">
                    <p>Collaborating with Flohigh Technology on UI/UX design was a delightful experience. Their team’s creativity, attention to user experience, and commitment to creating intuitive interfaces resulted in designs that resonate with our audience. Highly recommended!</p>
                  </div>
                  <div class="client-thumbs mt20">
                    <div class="media v-center">
                      <div class="user-image bdr-radius"><img src="images/client/profile-user.png" alt="girl" class="img-fluid" /></div>
                      <div class="media-body user-info">
                        <h5>Sarah Uche</h5>
                        <p>CEO, <small>Tech Innovators Inc.,</small></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-card">
                  <div class="tt-text">
                    <p>Flohigh Technology's marketing solutions transformed our digital strategy. Their team’s creativity and data-driven approach significantly boosted our online visibility. They are more than a service provider; they are strategic partners invested in our success.</p>
                  </div>
                  <div class="client-thumbs mt20">
                    <div class="media v-center">
                      <div class="user-image bdr-radius"><img src="images/client/profile-user.png" alt="girl" class="img-fluid" /></div>
                      <div class="media-body user-info">
                        <h5>Fashola Stevens</h5>
                        <p>Marketing Manager, <small>Prespay NG.</small></p>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Enquire Form-->


    

    <!--Start Footer-->
      <?php include('footer.php'); ?>
    <!--End Footer-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>	
    <script src="js/plugin.min.js"></script>
    <script src="phpmailer/js/jquery.validate.min.js"></script>
    <script src="phpmailer/js/sweetalert2.all.min.js"></script> 
    <script src="js/dark-mode.js"></script>   
    <!--form script file-->
    <script src="phpmailer/js/main.js"></script>
    <!-- type effect -->
    <script async src="js/typer.js"></script>
    <!--common script file-->
    <script src="js/main.js"></script>
  </body>
</html>