<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  
    <!-- Start Video Background-->
    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/home1.mp4" />
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">Welcome to E-Learning</h1>
        <!-- <small class="my-content">Learn and Implement</small><br /> -->
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-primary text-white font-weight-bolder mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-info mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div>
    </div> <!-- End Video Background -->


    <!-- Popular Course -->
    <div style="background-image: url(image/BooksBG.jpg); background-attachment: fixed;">
      <div class="container mt-5"> <!-- Start Most Popular Course -->
        <div style="padding-top:10px">
            <h1 class="text-center mx\y-5 text-white my-5" style="">POPULAR COURSE</h1>
        </div>
        <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
          <?php
          $sql = "SELECT * FROM course LIMIT 3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                  <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top card-set-img" alt="Guitar" height: "250"/>
                  <div class="card-body">
                    <h5 class="card-title">'.$row['course_name'].'</h5>
                    <p class="card-text">'.$row['course_desc'].'</p>
                  </div>
                  <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-warning text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                  </div>
                </div>
              </a>  ';
            }
          }
          ?>   
        </div>  <!-- End Most Popular Course 1st Card Deck -->   
        <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
          <?php
            $sql = "SELECT * FROM course LIMIT 3,3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){ 
              while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                  <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                    <div class="card">
                      <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top card-set-img" alt="Guitar" />
                      <div class="card-body">
                        <h5 class="card-title">'.$row['course_name'].'</h5>
                        <p class="card-text">'.$row['course_desc'].'</p>
                      </div>
                      <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-warning text-white font-weight-bolder float-right" href="#">Enroll</a>
                      </div>
                    </div>
                  </a>  ';
              }
            }
          ?>
        </div>   <!-- End Most Popular Course 2nd Card Deck --> 
        <div class="text-center my-5">
          <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a> 
        </div>
      </div>  <!-- End Most Popular Course -->
    </div>
    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  
    
    <div class="container-fluid" style="background-color: #1b2f47a8;"> <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social_hover" style="font-weight: bold; ;" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social_hover" style="font-weight: bold; ;" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social_hover" style="font-weight: bold; ;" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social_hover" style="font-weight: bold; ;" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> <!-- End Social Follow -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>E-Learning provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a><br />
            <a class="text-dark" href="#">Web Designing</a><br />
            <a class="text-dark" href="#">Android App Dev</a><br />
            <a class="text-dark" href="#">iOS Development</a><br />
            <a class="text-dark" href="#">Data Analysis</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>E-Learning Pvt Ltd <br> Near Police Varrachha <br> Surat,Gujrat <br> Ph. 000000000 </p>
          </div>
        </div>
      </div>
    </div> <!-- End About Section -->

  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
