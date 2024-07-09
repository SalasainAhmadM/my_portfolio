<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>

<body>

   <!-- Header
   ================================================== -->
   <style>
      header {
         position: relative;
         height: 800px;
         min-height: 500px;
         width: 100%;
         /* background: #161415 url(../images/background.jpg) no-repeat top center; */
         /*  background-color: #84ac7c; */
         background-size: cover !important;
         -webkit-background-size: cover !important;
         text-align: center;
         overflow: hidden;
      }

      #resume h1 span {
         border-bottom: 5px solid black;
         padding-bottom: 6px;
      }

      header .social li a {
         color: #fff;
      }

      header .social li a:hover {
         color: green;
      }

      body {
         background: #363e45;
      }
   </style>
   <header id="home">

      <nav id="nav-wrap"
         style="position: fixed;background-color: #363e45;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 0px 0px rgb(0 0 0 / 12%);">

         <a style="background-color: #363e45;" class="mobile-btn" href="#nav-wrap" title="Show navigation">Show
            navigation</a>
         <a style="background-color: #363e45;" class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home" style="font-family: 'Evogria', sans-serif;">
                  <i style="font-family: FontAwesome;font-style: normal;" class="fas fa-home"></i>Home</a></li>
            <li><a class="smoothscroll" href="#about" style="font-family: 'Evogria', sans-serif;">
                  <i style="font-family: FontAwesome;font-style: normal;" class="fas fa-user"></i>About Me</a></li>
            <li><a class="smoothscroll" href="#education" style="font-family: 'Evogria', sans-serif;">
                  <i style="font-family: FontAwesome;font-style: normal;" class="fas fa-book"></i>Education</a></li>
            <li><a class="smoothscroll" href="#OJT" style="font-family: 'Evogria', sans-serif;">
                  <i style="font-family: FontAwesome;font-style: normal;" class="fa-solid fa-briefcase"></i>OJT</a></li>
            <li><a class="smoothscroll" href="#album" style="font-family: 'Evogria', sans-serif;">
                  <i style="font-family: FontAwesome;font-style: normal;" class="fas fa-camera"></i>Album</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      <?php
      $u_qry = $conn->query("SELECT * FROM users where id = 1");
      foreach ($u_qry->fetch_array() as $k => $v) {
         if (!is_numeric($k)) {
            $user[$k] = $v;
         }
      }
      $c_qry = $conn->query("SELECT * FROM contacts");
      while ($row = $c_qry->fetch_assoc()) {
         $contact[$row['meta_field']] = $row['meta_value'];
      }
      // var_dump($contact['facebook']);
      ?>
      <style>
         .banner-text h3 {}

         .banner-text h3 span::after {
            content: "";
            position: absolute;
            border-left: 2px solid red;
         }

         .download-resume button {
            color: black;
            background-color: white;
            border: 1px solid black;
            box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
            border-radius: 6px;
         }

         .download-resume button:hover {
            color: white;
            background-color: green;
         }
      </style>
      <div class="row banner">
         <div class="row align-items-center">
            <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" id="cimg"
               class="img-circle elevation-2" alt="User Image"
               style="border: 0.5px solid black;margin-top: 70px;width: 327px;height: 327px;border-radius: 6px; cover;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);">
         </div>
         <div class="banner-text">
            <h2 style="font-family: 'Roboto', sans-serif; font-weight: bold;color: white;">Hello I'm</h2>
            <h1 style="font-family: 'Roboto', sans-serif; font-weight: bold" class="responsive-headline">
               <?php echo isset($user) ? ucwords($user['firstname'] . '  ' . $user['middlename'] . '  ' . $user['lastname']) : ""; ?>.
            </h1>
            <h3 class="typed-text"
               style="font-weight: bold;font-family: 'Evogria', sans-serif;font-size: 15px; color: white;"><span>
                  <?php echo stripslashes($_settings->info('current_course')) ?>
               </span></h3>
            <hr />
            <ul class="social">
               <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i
                        class="fa fa-facebook-square"></i></a></li>
               <li><a target="_blank" href="<?php echo $contact['instagram'] ?>"><i class="fa fa-instagram"></i></a>
               </li>
               <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google"></i></a>
               </li>
            </ul>
         </div>
      </div>


   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <style>

   </style>
   <section id="about" style="background-color: #363e45;">

      <div class="row">
         <div class="container" style="border: 1px solid black;padding: 120px; height: 100%; background-color: #84ac7c;display: inline-block;
    margin: 20px;
    padding: 20px;
    box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
    position: relative;
    border-radius: 6px;
    opacity: 0.95;">
            <div class="three columns">

               <img style="border: 1px solid black; 200px;height: 200px;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);border-radius: 6px;
            " class="img-fluid img-thumbnail" id="cimg2"
                  src="<?php echo validate_image($_settings->info('aboutprofile')) ?>" alt="" />

            </div>

            <div class="nine columns main-col">

               <h2 style="font-family: 'Evogria', sans-serif; object-fit: cover; text-align: center;"
                  class="responsive-headline">About Myself</h2>

               <div
                  style="border: 1px solid white;font-family: 'Roboto', sans-serif;border-radius: 6px;padding: 15px; box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 0px 0px rgb(0 0 0 / 12%);"
                  id="about_me">
                  <?php include "about.html"; ?>
               </div>

               <div class="row">
                  <div class="columns contact-details"><br>
                     <h2 style="font-family: 'Evogria', sans-serif;">Contact Details</h2>
                     <p class="address">
                        <span style="color: white;">
                           <i style="font-family: FontAwesome;font-style: normal; margin-right: 2px;"
                              class="fas fa-home"></i>
                           <?php echo $contact['address'] ?>
                        </span><br>
                        <span style="color: white">
                           <i style="font-family: FontAwesome;font-style: normal;margin-right: 2px;"
                              class="fas fa-phone"></i>
                           <?php echo $contact['mobile'] ?>
                        </span><br>
                        <span style="color: white">
                           <i style="font-family: FontAwesome;font-style: normal;margin-right: 2px;"
                              class="fa fa-google-plus"></i>
                           <?php echo $contact['email'] ?>
                        </span>
                     </p>
                  </div>
                  <div class="columns download-resume"><br>
                     <a href="ebol.pdf" download>
                        <button
                           style=" border: 1px solid white; 200px; box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);border-radius: 6px;"><i
                              style="font-family: FontAwesome;font-style: normal;margin-right: 2px;" style=""
                              class="fa fa-download"></i>Download Resume</button>
                     </a>
                  </div>
               </div>
               <!-- end row -->

            </div> <!-- end .main-col -->
         </div>
      </div>

   </section> <!-- About Section End-->


   <!-- Education Section
   ================================================== -->
   <section id="education" style="background-color: #363e45;">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">
         <div class="container" style="border: 1px solid black;padding: 120px; height: 100%; width: 96%;background-color: #84ac7c;display: inline-block;
    margin: 20px;
    padding: 20px;
    box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
    position: relative;
    border-radius: 6px;
    opacity: 0.95;">
            <h2 style="font-family: 'Evogria', sans-serif; object-fit: cover;color: white; margin-left: 25px"
               class="responsive-headline">Educational Attainment</h2>

            <div class="nine columns main-col">
               <?php
               $e_qry = $conn->query("SELECT * FROM education order by year desc, started desc");
               while ($row = $e_qry->fetch_assoc()):
                  ?>
                  <div style="font-family: 'Roboto', sans-serif;" class="row item">

                     <div class="twelve columns" style="border: 1px solid white;padding: 120px; height: 100%; background-color:#84ac7c;display: inline-block;
                 margin: 20px;
                 padding: 20px;
                 box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
                 position: relative;
                 border-radius: 6px;
                 opacity: 0.95;">

                        <h3 style="font-family: 'Evogria', sans-serif;color: white">
                           <?php echo $row['school'] ?>
                        </h3>
                        <p style="font-family: 'Roboto', sans-serif;color: white" class="info">
                           <?php echo $row['course'] ?> <br><span>&bull;</span> <em class="date">
                              <?php echo $row['started'] . ' - ' . $row['year'] ?>
                           </em>
                        </p>

                        <p>
                           <?php echo stripslashes(html_entity_decode($row['description'])) ?>
                        </p>

                     </div>

                  </div> <!-- item end -->
               <?php endwhile; ?>


            </div> <!-- main-col end -->
         </div>
      </div>
   </section>
   <!-- End Education -->

   <!-- OJT
      ----------------------------------------------- -->
   <section id="OJT" style="background-color: #363e45;">
      <div class="row work">
         <div class="container-fluid" style="border: 1px solid black;padding: 120px; height: 100%; width: 96%;background-color: #84ac7c;display: inline-block;
    margin: 20px;
    padding: 20px;
    box-shadow: -2px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    position: relative;
    border-radius: 6px;
    opacity: 0.95;">
            <h2 style="font-family: 'Evogria', sans-serif; object-fit: cover;color: white; margin-left: 25px"
               class="responsive-headline">On Job Training</h2>

            <div class="nine columns main-col">
               <?php
               $w_qry = $conn->query("SELECT * FROM work ");
               while ($row = $w_qry->fetch_assoc()):
                  ?>
                  <div class="row item">

                     <div class="twelve columns" style="border: 1px solid white;padding: 120px; height: 100%; background-color:#84ac7c;display: inline-block;
                 margin: 20px;
                 padding: 20px;
                 box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
                 position: relative;
                 border-radius: 6px;
                 opacity: 0.95;">

                        <h3 style="font-family: 'Evogria', sans-serif;color: white">
                           <?php echo $row['company'] ?>
                        </h3>
                        <p style="font-family: 'Roboto', sans-serif;color: white;" class="info">Position:
                           <?php echo $row['position'] ?><br><span>Date Started:<br></span>&bull;
                           <?php echo str_replace("_", " ", $row['started']) ?>
                        </p>

                        <p
                           style="font-family: 'Roboto', sans-serif;border-radius: 6px;padding: 15px; box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 0px 0px rgb(0 0 0 / 12%);color: white; font-size: 12px">
                           <?php echo stripslashes(html_entity_decode($row['description'])) ?>
                        </p>

                     </div>

                  </div> <!-- item end -->
               <?php endwhile; ?>
            </div> <!-- main-col end -->
         </div>
      </div> <!-- End OJT -->
   </section>




   <!-- Skills 
      <div class="row skill">

         <div class="three columns header-col">
            <h1 style="font-family: 'Evogria', sans-serif;"><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">


        <div class="bars">

           <ul class="skills">
             <li style="font-family: 'Evogria', sans-serif;"><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
            <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
            <li><span class="bar-expand css"></span><em>CSS</em></li>
            <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
          </ul>

        </div>

      </div> 

      </div> 

   </section>
 Skills -->

   <!-- Album Section
   ================================================== -->
   <style>
      #portfolio {
         background: #ebeeee;
         padding-top: 90px;
         padding-bottom: 60px;
      }

      #portfolio h1 {
         font: 15px/24px 'opensans-semibold', sans-serif;
         text-transform: uppercase;
         letter-spacing: 1px;
         text-align: center;
         margin-bottom: 48px;
         color: #95A3A3;
      }

      /* Portfolio Content */
      #portfolio-wrapper .columns {
         margin-bottom: 36px;
      }

      .portfolio-item .item-wrap {
         background: #fff;
         overflow: hidden;
         position: relative;

         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
      }

      .portfolio-item .item-wrap a {
         display: block;
         cursor: pointer;
      }

      /* overlay */
      .portfolio-item .item-wrap .overlay {
         position: absolute;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;

         opacity: 0;
         -moz-opacity: 0;
         filter: alpha(opacity=0);

         -webkit-transition: opacity 0.3s ease-in-out;
         -moz-transition: opacity 0.3s ease-in-out;
         -o-transition: opacity 0.3s ease-in-out;
         transition: opacity 0.3s ease-in-out;

      }

      .portfolio-item .item-wrap .link-icon {
         display: block;
         color: #fff;
         height: 30px;
         width: 30px;
         font-size: 18px;
         line-height: 30px;
         text-align: center;

         opacity: 0;
         -moz-opacity: 0;
         filter: alpha(opacity=0);

         -webkit-transition: opacity 0.3s ease-in-out;
         -moz-transition: opacity 0.3s ease-in-out;
         -o-transition: opacity 0.3s ease-in-out;
         transition: opacity 0.3s ease-in-out;

         position: absolute;
         top: 50%;
         left: 50%;
         margin-left: -15px;
         margin-top: -15px;
      }

      .portfolio-item .item-wrap img {
         vertical-align: bottom;
      }

      .portfolio-item .portfolio-item-meta {
         padding: 18px
      }

      .portfolio-item .portfolio-item-meta h5 {
         font: 14px/21px 'opensans-bold', sans-serif;
         color: #fff;
      }

      .portfolio-item .portfolio-item-meta p {
         font: 12px/18px 'opensans-light', sans-serif;
         color: #c6c7c7;
         margin-bottom: 0;
      }

      /* on hover */
      .portfolio-item:hover .overlay {
         opacity: 1;
         -moz-opacity: 1;
         filter: alpha(opacity=100);
      }


      /* popup modal */
      .popup-modal {
         max-width: 650px;
         position: relative;
         margin: 0 auto;
      }

      .popup-modal .description-box {
         padding: 12px 36px 18px 36px;
      }

      .popup-modal .description-box h4 {
         font: 15px/24px 'opensans-bold', sans-serif;
         margin-bottom: 12px;
         color: blue;
      }

      .popup-modal .description-box p {
         font: 14px/24px 'opensans-regular', sans-serif;
         color: green;
         margin-bottom: 12px;
      }

      .popup-modal .description-box .categories {
         font: 11px/21px 'opensans-light', sans-serif;
         color: red;
         text-transform: uppercase;
         letter-spacing: 2px;
         display: block;
         text-align: left;
         opacity: 0;
      }

      .popup-modal .description-box .categories i {
         margin-right: 10px;
      }

      .popup-modal .link-box {
         padding: 18px 36px;
         background: #84ac7c;
         text-align: left;
         margin-top: 1px;
         opacity: 0;
      }

      .popup-modal .link-box a {
         color: white;
         font-family: 'Evogria', sans-serif;
         text-transform: uppercase;
         letter-spacing: 3px;
         opacity: 0;
      }

      .popup-modal a:hover {
         color: black;
         opacity: 0;
      }

      .popup-modal a.popup-modal-dismiss {
         margin-left: 2px;
      }


      /* fadein/fadeout effect for modal popup
/* ------------------------------------------------------------------ */

      /* content at start */
      .mfp-fade.mfp-wrap .mfp-content .popup-modal {
         opacity: 0;
         -webkit-transition: all 200ms ease-in-out;
         -moz-transition: all 200ms ease-in-out;
         -o-transition: all 200ms ease-in-out;
         -ms-transition: all 200ms ease-in-out;
         transition: all 200ms ease-in-out;
      }

      /* content fadein */
      .mfp-fade.mfp-wrap.mfp-ready .mfp-content .popup-modal {
         opacity: 1;
      }

      /* content fadeout */
      .mfp-fade.mfp-wrap.mfp-removing .mfp-content .popup-modal {
         opacity: 0;
      }
   </style>
   <section id="album" style="background-color: #363e45;">
      <div class="row-album">

         <div class="twelve columns collapsed">

            <!-- Album-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
               <?php
               $p_qry = $conn->query("SELECT * FROM album ");
               while ($row = $p_qry->fetch_assoc()):
                  ?>
                  <div class="columns portfolio-item">
                     <div class="item-wrap">

                        <a href="#modal-<?php echo $row['id'] ?>" title="">
                           <img
                              style="border: 1px solid black;width: 330px;height: 330px;border-radius: 6px; cover;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);"
                              alt="" src="<?php echo validate_image($row['picture']) ?>">
                           <div class="overlay">
                              <div class="portfolio-item-meta">
                                 <h5 class="truncate-1">
                                    <?php echo $row['name'] ?>
                                 </h5>
                                 <!-- <p>Illustrration</p> -->
                              </div>
                           </div>
                           <div class="link-icon"><i class="icon-plus"></i></div>
                        </a>
                     </div>
                  </div> <!-- item end -->

               <?php endwhile; ?>

            </div> <!-- album-wrapper end -->

         </div> <!-- twelve columns end -->


         <?php
         $p_qry = $conn->query("SELECT * FROM album ");
         while ($row = $p_qry->fetch_assoc()):
            ?>

            <!-- Modal Popup
        --------------------------------------------------------------- -->

            <div id="modal-<?php echo $row['id'] ?>" class="popup-modal mfp-hide">

               <img class="scale-with-grid" src="<?php echo validate_image($row['picture']) ?>" alt="" />

               <div class="description-box">
                  <h4>
                     <?php echo $row['name'] ?>
                  </h4>
                  <p>
                     <?php echo stripslashes(html_entity_decode($row['description'])) ?>
                  </p>
                  <span class="categories"><i class="fa fa-tag"></i>
                     <?php echo $row['client'] ?>
                  </span>
               </div>

               <div class="link-box">
                  <!-- <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a> -->
                  <a class="popup-modal-dismiss">Close</a>
               </div>

            </div><!-- modal-01 End -->

         <?php endwhile; ?>


      </div> <!-- row End -->

   </section> <!-- Album Section End-->
   <!-- Qoutes Section
   ================================================== -->
   <style>
      #qoutes {
         background-size: cover !important;
         -webkit-background-size: cover !important;
         background-attachment: fixed;
         position: relative;
         min-height: 200px;
         width: 100%;
         overflow: hidden;
      }

      #qoutes .text-container {
         padding-top: 96px;
         padding-bottom: 66px;
      }

      #qoutes h1 {
         font: 18px/24px 'opensans-bold', sans-serif;
         text-transform: uppercase;
         letter-spacing: 3px;
         color: #fff;
      }

      #qoutes h1 span {
         display: none;
      }

      #qoutes .header-col {
         padding-top: 9px;
      }

      #qoutes .header-col h1:before {
         font-family: 'FontAwesome';
         content: "\f10d";
         padding-right: 10px;
         font-size: 72px;
         line-height: 72px;
         text-align: left;
         float: left;
         color: #fff;
      }

      /*	Blockquotes */
      #qoutes blockquote {
         margin: 0 0px 30px 0px;
         padding-left: 0;
         position: relative;
         text-shadow: 0px 1px 3px rgba(0, 0, 0, 1);
      }

      #qoutes blockquote:before {
         content: none;
      }

      #qoutes blockquote p {
         font-family: 'librebaskerville-italic', serif;
         padding: 0;
         font-size: 24px;
         line-height: 48px;
         color: #fff
      }

      #qoutes blockquote cite {
         display: block;
         font-size: 12px;
         font-style: normal;
         line-height: 18px;
         color: #fff;
      }

      #qoutes blockquote cite:before {
         content: "\2014 \0020";
      }

      #qoutes blockquote cite a,
      #qoutes blockquote cite a:visited {
         color: #8B9798;
         border: none
      }
   </style>
   <section id="qoutes" style="border: 1px solid black; background-color: #363e45;width: 50%;margin-left: -30%;margin: 0 auto;text-align: center;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
                 position: relative;
                 border-radius: 6px;">
      <div style="background-color: #84ac7c;" class="text-container">

         <div class="row" style="width: 100%; margin-left: -9%;">

            <div class="two columns header-col">

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>"Always remember that you are absolutely unique. Just like everyone else."
                           </p>
                           <cite>Margaret Mead</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>"Whoever is happy will make others happy too."
                           </p>
                           <cite>Anne Frank</cite>
                        </blockquote>
                     </li> <!-- slide ends -->
                     <li>
                        <blockquote>
                           <p>"The way to get started is to quit talking and begin doing."
                           </p>
                           <cite>Walt Disney</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

      </div> <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- /.content-wrapper -->
   <?php require_once('inc/footer.php') ?>
</body>

</html>