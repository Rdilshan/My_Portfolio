<?php
    require_once './connection.php';
    require_once './API/getip.php';

    $sql1 = "SELECT * FROM Detila";
    $result1 = $conn->query($sql1);

    while($row1= $result1->fetch_assoc()) { 

?>


<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $row1['Name'] ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <link rel="shortcut icon" href="favicon.ico">
      <link rel="icon" href="./Assets/web/67_White.png" type="image/x-icon" />
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/flexslider.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/modernizr-2.6.2.min.js"></script>
      <link rel="stylesheet" href="css/preloader.CSS">

   </head>
   <body>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    
      <div id="colorlib-page">
         <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
               <div class="text-center">
                  <!-- <div class="author-img" style="background-image: url(Assets/profile/<?php echo $row1['Profile_Pic'] ?>);"></div> -->

                  <img src="Assets/profile/<?php echo $row1['Profile_Pic'] ?>" class="author-img" alt="Author Image" style="object-fit: cover;">
                  
                  <h1 id="colorlib-logo"><a href="index.html"><?php echo $row1['Name'] ?></a></h1>
                  <span class="position"><a href="#"><?php echo $row1['Role'] ?></a> in <?php echo $row1['Country'] ?></span>
               </div>
               <nav id="colorlib-main-menu" role="navigation" class="navbar">
                  <div id="navbar" class="collapse">
                     <ul>
                        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="about">About</a></li>
                        <li><a href="#" data-nav-section="services">Services</a></li>
                        <li><a href="#" data-nav-section="skills">Skills</a></li>
                        <li><a href="#" data-nav-section="education">Education</a></li>
                        <li><a href="#" data-nav-section="experience">Experience</a></li>
                        <li><a href="#" data-nav-section="work">Work</a></li>
                        <li><a href="#" data-nav-section="blog">Blog</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="colorlib-footer">
                  <p>
                     <small>
                        &copy; 
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                     </small>
                  </p>
                  <ul>
                     <li><a href="#"><i class="icon-facebook2"></i></a></li>
                     <li><a href="#"><i class="icon-twitter2"></i></a></li>
                     <li><a href="#"><i class="icon-instagram"></i></a></li>
                     <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                  </ul>
               </div>
            </aside>
            <div id="colorlib-main">
               <section id="colorlib-hero" class="js-fullheight" data-section="home">
                  <div class="flexslider js-fullheight">
                     <ul class="slides">
                        <li style="background-image: url(Assets/profile/<?php echo $row1['Bg_picture1'] ?>);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner js-fullheight">
                                       <div class="desc">
                                          <h1>Hi! <br>I'm <?php echo $row1['Name'] ?></h1>
                                          <!-- <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2> -->
                                            <p>
                                                <a class="btn btn-primary btn-learn" href="./Assets/profile/cv/<?php echo $row1['Cv']; ?>" download>Download CV <i class="icon-download4"></i></a>
                                            </p>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li style="background-image: url(Assets/profile/<?php echo $row1['Bg_picture2'] ?>);">
                           <div class="overlay"></div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                       <div class="desc">
                                          <h1>I am <br>a <?php echo $row1['Role'] ?></h1>
                                          <!-- <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2> -->
                                          <p>
                                                <a class="btn btn-primary btn-learn" href="./Assets/profile/cv/<?php echo $row1['Cv']; ?>" download>Download CV <i class="icon-download4"></i></a>
                                            </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </section>
               <section class="colorlib-about" data-section="about">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                              <div class="col-md-12">
                                 <div class="about-desc">
                                    <span class="heading-meta">About Us</span>
                                    <h2 class="colorlib-heading">Who Am I?</h2>
                                    <p><strong>Hi </strong> <?php echo $row1['AboutMe'] ?></p>
                                    <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p> -->
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                           <?php
                                $sql2 = "SELECT * FROM CreateProduct";
                                $result2 = $conn->query($sql2);

                                while($row2= $result2->fetch_assoc()) { 
                            ?>
                              <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                 <div class="services color-1">
                                    <span class="icon2"><i class="icon-bulb"></i></span>
                                    <h3><?php echo $row2['Name']?></h3>
                                 </div>
                              </div>
                            <?php } ?>

                             

                           <div class="row" 
                                <?php
                                    if ($row1['hirebanner'] == 0) {
                                        echo 'style="display: none;"';
                                    }
                                ?>
                            >
                              <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                 <div class="hire">
                                    <h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
                                    <a href="#" class="btn-hire">Hire me</a>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>

                  </div>
               </section>
               <section class="colorlib-services" data-section="services">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">What I do?</span>
                           <h2 class="colorlib-heading">Here are some of my expertise</h2>
                        </div>
                     </div>
                     <div class="row row-pt-md">
                            <?php
                                $sql2 = "SELECT * FROM Experience";
                                $result2 = $conn->query($sql2);

                                while($row2= $result2->fetch_assoc()) { 
                            ?>

                        <div class="col-md-4 text-center animate-box">
                           <div class="services color-3">
                              <span class="icon">
                              <i class="icon-phone3"></i>
                              </span>
                              <div class="desc">
                                 <h3><?php echo $row2['Title'] ?></h3>
                                 <p><?php echo $row2['Short_desc'] ?></p>
                              </div>
                           </div>
                        </div>
                        <?php } ?>

                       

                     </div>
                  </div>
               </section>
               <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
                  <div class="overlay"></div>
                  <div class="colorlib-narrow-content">
                     <div class="row">
                     </div>
                     <div class="row">

                     <?php
                            $sql2 = "SELECT * FROM Project_count";
                            $result2 = $conn->query($sql2);

                            while($row2= $result2->fetch_assoc()) { 
                     ?>
                        <div class="col-md-3 text-center animate-box">
                           <span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $row2['count'] ?>" data-speed="5000" data-refresh-interval="50"></span>
                           <span class="colorlib-counter-label"><?php echo $row2['name'] ?></span>
                        </div>
                    <?php } ?>

                       

                     </div>
                  </div>
               </div>
               <section class="colorlib-skills" data-section="skills">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">My Specialty</span>
                           <h2 class="colorlib-heading animate-box">My Skills</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                           <p><?php echo $row1['Skill_desc'] ?></p>
                        </div>

                        <?php
                            $sql3 = "SELECT * FROM Skill";
                            $result3 = $conn->query($sql3);
                            $i = 0;
                            while ($row3 = $result3->fetch_assoc()) {
                            ?>
                                <style>
                                    .progress-bar.newcolor_<?php echo $i ?>:after {
                                        background: <?php echo $row3['color'] ?>;
                                    }
                                </style>
                                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="progress-wrap">
                                        <h3><?php echo $row3['name']; ?></h3>
                                        <div class="progress">
                                            <div class="progress-bar newcolor_<?php echo $i; ?>" role="progressbar"
                                                aria-valuenow="<?php echo $row3['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"
                                                style="width:<?php echo $row3['percentage']; ?>%; background-color: <?php echo $row3['color']; ?>;">
                                                <span style="color: <?php echo $row3['color']; ?>;"><?php echo $row3['percentage']; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php $i = $i + 1;

                            } ?>
                            

                        


                     </div>
                  </div>
               </section>
               <section class="colorlib-education" data-section="education">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">Education</span>
                           <h2 class="colorlib-heading animate-box">Education</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                           <div class="fancy-collapse-panel">
                              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <?php
                                    $sql4 = "SELECT * FROM Education";
                                    $result4 = $conn->query($sql4);
                                    $i = 0;
                                    while ($row4 = $result4->fetch_assoc()) {
                            ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading_<?php echo $i;?>">
                                       <h4 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i; ?>"><?php echo $row4['Title'] ?>
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapse_<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?php echo $i;?>">
                                       <div class="panel-body">
                                        <?php echo $row4['descriptions'] ?>
                                       </div>
                                    </div>
                                 </div>

                            <?php $i = $i + 1; } ?>
                                 

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="colorlib-experience" data-section="experience">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">Experience</span>
                           <h2 class="colorlib-heading animate-box">Work Experience</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="timeline-centered">

                           <?php
                                $sql5 = "SELECT * FROM WorkExperience";
                                $result5 = $conn->query($sql5);
                                $i = 0;
                                while ($row5 = $result5->fetch_assoc()) {
                            ?>
                                <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">
                                        <div class="timeline-icon color-<?php 
                                                $previousNumber = null;
                                                $currentNumber = null;
                                                
                                                do {
                                                    $previousNumber = $currentNumber;
                                                    $currentNumber = rand(1, 5);
                                                } while ($currentNumber === $previousNumber);
                                                
                                                echo $currentNumber;?>">
 
                                            <i class="icon-pen2"></i>
                                        </div>
                                        <div class="timeline-label">
                                            <h2><a href="#"><?php echo $row5['Title']?> </a> <span><?php echo $row5['Duration']?></span></h2>
                                            <p><?php echo $row5['descriptions']?></p>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="colorlib-work" data-section="work">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">My Work</span>
                           <h2 class="colorlib-heading animate-box">Recent Work</h2>
                        </div>
                     </div>



                     <div class="row">

                            <?php
                                $sql6 = "SELECT * FROM MyWork";
                                $result6 = $conn->query($sql6);
                                $i = 0;
                                while ($row6 = $result6->fetch_assoc()) {
                            ?>

                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                           <div class="project" style="background-image: url(Assets/mywork/<?php echo $row6['picture']?>);">
                              <div class="desc">
                                 <div class="con">
                                    <h3><a href="<?php echo $row6['sampleLink']?>"><?php echo $row6['Title']?></a></h3>
                                    <span><?php echo $row6['type']?></span>
                                    <p class="icon">
                                       <!-- <span><a href="#"><i class="icon-share3"></i></a></span> -->
                                       <!-- <span><a href="#"><i class="icon-eye"></i> 100</a></span> -->
                                       <span><a href="#"><i class="icon-heart"></i> <?php echo $row6['LikeCount']?></a></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                     <div class="row">
                        <div class="pagination"></div>
                     </div>
                        
                  </div>
               </section>
               <section class="colorlib-blog" data-section="blog">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">Read</span>
                           <h2 class="colorlib-heading">Recent Blog</h2>
                        </div>
                     </div>
                     <div class="row">

                            <?php
                                $sql7 = "SELECT * FROM `MyBlog` ORDER BY `MyBlog`.`Id` DESC";
                                $result7 = $conn->query($sql7);
                                $i = 0;
                                while ($row7 = $result7->fetch_assoc()) {
                            ?>

                        <div class="col-sm-6 animate-box blogboxes" data-animate-effect="fadeInLeft">
                           <div class="blog-entry">
                              <a href="./article.php?artid=<?php echo $row7['Id'];?>" class="blog-img"><img src="Assets/blog/<?php echo $row7['picture']?>" class="img-responsive" alt="" style="width: 100%;height: 335px;"></a>
                              <div class="desc">
                                 <!-- <span><small><?php echo $row7['date']?> </small> | <small> My Blog </small> | <small> <i class="icon-heart"></i> <?php echo $row7['LikeCount']?></small></span> -->
                                 <h3><a href="./article.php?artid=<?php echo $row7['Id'];?>"><?php echo $row7['Title']?></a></h3>
                                 <!-- <p><?php
                                 
                                    $part = substr($row7['Description'], 0, 100);
                                    $lastSpace = strrpos($part, ' ');
                                    $part = substr($part, 0, $lastSpace);
                                    echo $part . "...";
                                    

                                 ?></p> -->
                              </div>
                           </div>
                        </div>
                    

                    <?php } ?>
                    
                     </div>
                     <div class="row">
                        <div class="paginationblog"></div>
                     </div>
                  </div>
               </section>

               <section class="colorlib-contact" data-section="contact">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           <span class="heading-meta">Get in Touch</span>
                           <h2 class="colorlib-heading">Contact</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                              <div class="colorlib-icon">
                                 <i class="icon-globe-outline"></i>
                              </div>
                              <div class="colorlib-text">
                              <p><?php echo $row1['email'];?></p>
                              </div>
                           </div>
                           <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                              <div class="colorlib-icon">
                                 <i class="icon-map"></i>
                              </div>
                              <div class="colorlib-text">
                                 <p><?php echo $row1['address'];?></p>
                              </div>
                           </div>
                           <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                              <div class="colorlib-icon">
                                 <i class="icon-phone"></i>
                              </div>
                              <div class="colorlib-text">
                                 <p><a href="tel://"><?php echo $row1['telephone'];?></a></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                           <div class="row">

                            <div class="alert alert-warning alert-dismissible fade suceesfulmsgalte" role="alert" >
                                <strong>Successfull</strong> Send your Massage
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>   
                            </div>

                              <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="subject" id="subject"  placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                       <textarea name="" id="message" cols="30" rows="7" name="msg" id="msg" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                       <input type="button" class="btn btn-primary btn-send-message" value="Send Message" onclick="submitForm()">
                                    </div>
                                 </form>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      <script>

            // document.addEventListener('contextmenu', (e) => e.preventDefault());
            // function ctrlShiftKey(e, keyCode) {
            // return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
            // }
            // document.onkeydown = (e) => {
            // if (
            //     event.keyCode === 123 ||
            //     ctrlShiftKey(e, 'I') ||
            //     ctrlShiftKey(e, 'J') ||
            //     ctrlShiftKey(e, 'C') ||
            //     (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            // )
            //     return false;
            // };

      </script>
<?php } ?>
      <script src="./js/preloader.js"></script>
      <script src="./js/sendmsg.js"></script>
      <script src="js/pagenumberforwork.js"></script>
      <script src="js/pagenumberforblog.js"></script>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.countTo.js"></script>
      <script src="js/main.js"></script>
     
   </body>
</html>