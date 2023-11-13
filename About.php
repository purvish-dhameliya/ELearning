<style type="text/css">
  * {
    margin: 0;
    padding: 0;
  }

  .imgbox {
    display: grid;
    height: 100%;
  }

  .center-fit {
    width: 100%;
    height: 100vh;
    margin: auto;
    z-index: 1;
  }

  .img1-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    background-color: black;
    z-index: 1;
    opacity: 0.6;
  }

  .title1 {
    position: absolute;
    top: 35%;
    z-index: 1;
    color: white;
    left: 4%;
    width: 75vh;
  }

  .title {
    font-size: 15px;
    font-weight: bold;
  }

  .btn1 {
    border-radius: 8px;
    border: 1px solid white;
    color: #ffff;
    padding: 10px;
    position: absolute;
    top: 25vh;
    z-index: 1;
    text-decoration: none;
  }

  .btn1:hover {
    background: #fff;
    color: #000;
    border-radius: 8px;
    border: 1px solid white;
    text-decoration: none;
  }

  .mt {
    margin-top: 20px;
  }

  .feature-thumb {
    margin-top: 20px;
    border: 1px solid #000;
    padding: 5em 3em;
  }

  .feature-thumb span {
    background: #3f51b5;
    border-radius: 50px;
    color: #ffffff;
    font-size: 25px;
    font-weight: bold;
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    margin-bottom: 5px;
  }

  .feature-thumb h3 {
    margin: 10px 0;
  }

  #about figure {
    display: inline-block;
    vertical-align: top;
    margin-left: 15px;
  }

  #about figure span {
    float: left;
    margin-left: -15px;
    padding: 15px 20px;
    position: relative;
    top: 20px;
  }

  #about figure span i {
    background: #29ca8e;
    border-radius: 50px;
    color: #ffffff;
    font-size: 25px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
  }
</style>
<?php
include('./dbConnection.php');
// Header Include from mainInclude 
include('./mainInclude/header.php');
//include('./css/style1.css');
?>
<div class="imgbox">
  <div class="vid-parent" style="width=100%; height:800px; ">
    <video playsinline autoplay muted loop>
      <source src="video/home5.mp4" />
    </video>
    <div class="vid-overlay"></div>
  </div>
  </div>
</div>
<div class="title1">
  <h1>Distance Learning Education Center</h1>
  <small class="title">Our online courses are designed to fit in your industry supporting all-round with latest
    technologies.</small><br />
  <a href="index.php" class="btn1">Learn more..</a>
</div>
<div class="container-fluid bg-dark txt-banner mt">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5> <i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
    </div>
  </div>
</div>
<section id="feature">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-4">
        <div class="feature-thumb">
          <span>01</span>
          <h3>Trending Courses</h3>
          <p>Known is free education HTML Bootstrap Template. You can modify in any way and use this for your website.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="feature-thumb">
          <span>02</span>
          <h3>Books & Library</h3>
          <p>You are allowed to use Known HTML Template for your commercial or non-commercial websites.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="feature-thumb">
          <span>03</span>
          <h3>Certified Teachers</h3>
          <p>Please spread a word about us. Template redistribution is NOT allowed on any download website.</p>
        </div>
      </div>

    </div>
  </div>
</section>
<div class="container-fluid bg-dark txt-banner mt">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5> <i class="fa fa-users mr-3"></i>Professional Trainers</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fa fa-certificate mr-3"></i>International Certifications</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-chart-bar mr-3"></i></i>Trial day 2 Week</h5>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 mb-5" style="background-color: #4B7289" id="Feedback">
  <h1 class="text-center testyheading p-4"> Student's Feedback </h1>
  <div class="row">
    <div class="col-md-12">
      <div id="testimonial-slider" class="owl-carousel">
        <?php
        $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $s_img = $row['stu_img'];
            $n_img = str_replace('../', '', $s_img)
              ?>
            <div class="testimonial">
              <p class="description">
                <?php echo $row['f_content']; ?>
              </p>
              <div class="pic">
                <img src="<?php echo $n_img; ?>" alt="" />
              </div>
              <div class="testimonial-prof">
                <h4>
                  <?php echo $row['stu_name']; ?>
                </h4>
                <small>
                  <?php echo $row['stu_occ']; ?>
                </small>
              </div>
            </div>
          <?php }
        } ?>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-danger txt-banner mb-1 pt-1 pb-1">
  <div class="row">
    <div class="col-sm">
      <h5 class="text-white"><i class="fas fa-user-graduate mr-3"></i>1000+Happy Student for E-learning caurse</h5>
    </div>
    <div class="col-sm">
      <h5 class="text-white"><i class="far fa-building mr-3"></i>100% Job-Opportunity</h5>
    </div>
  </div>
</div>
</div>
<?php
// Footer Include from mainInclude 
include('./mainInclude/footer.php');

?>