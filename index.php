<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>

    <title>SHU Zone</title>
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- JS -->
    <script src="assets/js/wow.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="t-image">
              <a href="#"><img src="assets/images/LOGO-USING.png" alt="" /></a>
            </div>
            <div class="image">
              <a href="#"><img src="pic/me1.jpg" alt="" /></a>
            </div>
            <h4 class="name">SHU HAO CHANG</h4>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section0">About</a></li>
                <li><a href="#section1">Skills</a></li>
                <li><a href="#section2">Experience</a></li>
                <li><a href="#section3">Portfolio</a></li>
                <li><a href="#section4">Job search Conditions</a></li>
              </ul>
            </nav>
            <!-- <div class="author-content">
             
              <span>Web Designer</span>
              <span>
                During working, I not only take my responsibility seriously but also keep
                learning the different skills in case I have to use it in another day. <br>
                Since the opportunity always favors the prepared mind.<br>
                Therefore,I enjoy attempting to challenge and progress continuously.<br>
                
                I’m really looking forward to putting my skills to use in a challenging environment.</span>
            </div> -->
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href=""
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <span>Copyright 2020 SHU Design</span>
              <?php
                // 如果session是空的 就顯示登入，如果else顯示返回管理
                    if(empty($_SESSION['login'])){  
                ?>
              <span class="login"><a href="front/login.php">LOGIN</a></span>
              <?php
                    }else{
                      ?>
              <span class="login"onclick="location.replace(&#39;api/logout.php&#39;)" ><a href="#">LOGOUT</a></span>
              <?php
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
        <!-- about -->
        <section class="section section about" data-section="section0" >
          <div class="container">
            <div class="section-heading align-items-center">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                  <div class="contents">
                    <img src="assets/images/LOGO-USINGT.png" class="wow fadeInUp animated" style=" animation-delay:0.1s;" alt="" />
                    <h1 class="wow fadeInUp animated set1" style="animation-delay:0.3s">
                      Hi This is
                    </h1>
                    <h1 class="wow fadeInUp animated set2" style="animation-delay:0.6s">
                      SHU 
                    </h1>
                    <h1 class="wow fadeInUp animated set1" style="animation-delay:0.9s">
                      WelCome My website!
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- skill -->
      <section class="section section about-me" data-section="section1" >
        <div class="container">
          <div class="section-heading align-items-center">
            <h2>SKILLS</h2>
            <div class="line-dec"></div>
          </div>
        </div>
        <!-- square -->
          <div class="row">
            <div class="col-md-4 bbx">
              <div class="service-item">
                <i class="fas fa-laptop fa-4x fass"></i>
                <div class=" service-icon"></div>
                <h4>Web Programming</h4>
                <table class="tt1">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>JavaScript</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>CSS/HTML5</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Bootstrap</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>PHP</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>MySQL/MariaDB</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-4 bbx">
              <div class="service-item">
                <i class="fas fa-paint-brush fa-4x fass"></i>
                <h4>Graphic Design</h4>
                <table class="tt1">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Adobe Photoshop</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Adobe Illustrator</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Zbrush</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>3ds Max</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-4 bbx">
              <div class="service-item">
                <i class="fas fa-tools fa-4x icon fass"></i>
                <div class="third-service-icon service-icon"></div>
                <h4>Others</h4>
                <table class="tt1">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Git</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>Github</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>AlphaCam</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>SolidWorks</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" style="padding-left:20px;margin-right:10px;"></i>AutoCad</td>
                    </tr>
                  </tbody>
                  </table> 
              </div>
            </div>
          </div>
      </section>
        <!-- Experience -->
      <section class="section my-services ss2" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>EXPERIENCE</h2>
            <div class="line-dec"></div>
          </div>
          <h3 class="e-h3">WORK EXPERIENCE</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <div><h4>PRODUCT DEVELOPER</h4></div>
                <div class="sss2">
                  <span>
                    KD_科定企業股份有限公司
                  </span>
                    <span>|</span>
                    <span>
                    Jun.2016 - Nov.2019
                    </span>
                </div>
                <table class="tt2">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>Product Reverse Engineering </td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>3D Drawing & Modeling </td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>4 Axis & 5 Axis CNC Programmer and Operator </td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>Product Mass Production</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <div><h4>MECHANICAL EQUIPMENT MANUFACTURING TECHNICIAN</h4></div>
                  <div class="sss2">
                   <span>
                      國鉅機械股份有限公司  
                    </span>
                      <span>|</span>
                    <span>
                      Jul.2015-Mar.2016
                    </span>
                  </div>
                <table class="tt2">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>Welding and metal structure processing </td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>Mechanical equipment assembly and maintenance </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div>
            <h3 class="e-h3">EDUCATION</h3>
             <div class="col-md-12">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <div><h4>NATIONAL CHIAYI UNIVERSITY</h4></div>
                <span>
                  Department of Wood Based Materials and Design
                </span>
                <span>|</span>
                <span>
                  Set.2011-Jun.2015
                </span>
                <table class="tt2">
                  <tbody>
                    <tr>
                      <td><i class="fas fa-circle fa-1x" ></i></td>
                      <td>Honorable mention of The 3th SAKURA Award</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              </div>
            </div>
        </div>
      </section>

<!-- 作品 -->
      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>PORTFOLIO</h2>
            <div class="line-dec"></div>
            <span
              ></span
            >
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>all</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="JavaScript"
                    name="isotope-filter"
                  />
                  <span>JavaScript</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="PHP"
                    name="isotope-filter"
                  />
                  <span>PHP</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="Others"
                    name="isotope-filter"
                  />
                  <span>Others</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="PHP">
                  <figure class="snip1321">
                    <img
                      src="pic/calendar.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/calendar.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>First Title</h4>
                      <span>free to use our template</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="JavaScript">
                  <figure class="snip1321">
                    <img
                      src="pic/countclock.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/countclock.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Second Title</h4>
                      <span>please tell your friends</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="JavaScript">
                  <figure class="snip1321">
                    <img
                      src="pic/clock.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/clock.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Second Title</h4>
                      <span>please tell your friends</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="PHP">
                  <figure class="snip1321">
                    <img
                      src="pic/invoice.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/invoice.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Item Third</h4>
                      <span>customize anything</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="Others">
                  <figure class="snip1321">
                    <img
                      src="pic/table2.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/table2.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Item Fourth</h4>
                      <span>Re-distribution not allowed</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="Others">
                  <figure class="snip1321">
                    <img
                      src="pic/all.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="pic/all.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Fifth Awesome</h4>
                      <span>Ut sollicitudin risus</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="Others">
                  <figure class="snip1321">
                    <img
                      src="pic/think.png"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a href="pic/think.png" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Awesome Sixth</h4>
                      <span>Donec eget massa ante</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
                <!-- portfolio -->
                <!-- <div class="left-image-post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="left-image">
                        <img src="assets/images/left-image.jpg" alt="" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="right-text">
                        <h4>Reflux HTML CSS Template</h4>
                        <p>
                          Donec tristique feugiat lacus, at sollicitudin nunc euismod
                          sed. Mauris viverra, erat non sagittis gravida, elit dui
                          mollis ante, sit amet eleifend purus ligula eget eros. Sed
                          tincidunt quam vitae neque pharetra dignissim eget ut
                          libero.
                        </p>
                        <div class="white-button">
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="right-image-post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="left-text">
                        <h4>Sed sagittis rhoncus velit</h4>
                        <p>
                          Pellentesque habitant morbi tristique senectus et netus et
                          malesuada fames ac turpis egestas. Vestibulum fermentum
                          eleifend nibh, vitae sodales elit finibus pretium.
                          Suspendisse potenti. Ut sollicitudin risus a sollicitudin
                          semper.
                        </p>
                        <div class="white-button">
                          <a href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="right-image">
                        <img src="assets/images/right-image.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                </div> -->
      </section>
<!-- 求職條件 -->
      <section class="section contact-me ss2" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Job search conditions</h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3 class="e-h3">工作職位</h3>
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <div class="h4 text-dark">職位</div>
                <div class="">
                  <span>
                    全端/前端/後端網頁設計人員
                  </span>
                </div>
                <div class="h4 text-dark">工作地點</div>
                <div class="">
                  <span>
                    台北/新北/桃園
                  </span>
                </div>
                <div class="h4 text-dark">工作性質</div>
                <div class="">
                  <span>
                    全職
                  </span>
                </div>
                <div class="h4 text-dark">期望薪資</div>
                <div class="">
                  <span>
                    面議
                  </span>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- 聯絡 -->
      <!-- <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
            <span
              >Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
              efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.</span
            >
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Send Message
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> -->


    <footer></footer>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
    </div>
  </body>
</html>
