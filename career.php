<?php include("include/header.php");  ?>

<?php include("include/navigation.php");  ?>

 <?php
 if(isset($_POST["apply"])) {
  if($_POST['apply']){
  if($_POST['name']!=""&&$_POST['email']!=""&&$_POST['cv']!=""&&$_POST['phone']!=""&&$_POST['address']!=""&&$_POST['post']!=""){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['address'];
    $email = $_POST['email'];
    $post = $_POST['post'];
    $recipient = "govinda.aryal10@gmail.com";
    $subject = "Job Apply";
    $mailBody="Name: $name\nPhone No. : $phone\nEmail: $email\nAddress: $address";
    mail($recipient, $subject, $mailBody, "From: $name <$email>");
    ?>

    <script type="text/javascript">
      alert("Thank You!!! We will respond soon");
    </script>

    <?php

  }
  else{
    ?>

    <script type="text/javascript">
      alert("Data not Provided");
    </script>

    <?php
  }
}
}
?>
<!--career starts-->
  <section id="career">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="page blue-pring career-page" style="width: 460px !important;">
            <h2 class="title-page" >We are currently hiring... </h2>
          </div>
          <div class="small">
            <p>Job Placement</p>
          </div>
        </div>
      </div>
      <div class="row career-content">
        <div class="col-md-3 col-sm-3 career-icon">
          <div class="text-xs-center background-image img-fluid img-circle">
            <img src="assets/image/vac.png" class="img-fluid foreground-image" />
          </div>
          <div class="career-icon-name">Mobile App Developer</div>
          <div class="vacancy">
            <span class="job-title">iOS:&nbsp;</span><span class="vacancy-number">3</span>&nbsp;&nbsp;&nbsp;
            <span class="job-title">Android:&nbsp;&nbsp;</span> <span class="vacancy-number">2</span>
          </div>
          <a href="#" class="btn-apply" data-toggle="modal" data-target="#myModal">Apply Now</a>
        </div>
        <div class="col-md-3 col-sm-3 career-icon">
          <div class="text-xs-center background-image img-fluid img-circle">
            <img src="assets/image/vac.png" class="img-fluid foreground-image" />
          </div>
          <div class="career-icon-name">Web Devloper</div>
          <div class="vacancy">
            <span class="job-title">Designer:&nbsp;</span><span class="vacancy-number">2</span>&nbsp;&nbsp;&nbsp;
            <span class="job-title">.NET Programmer:&nbsp;</span> <span class="vacancy-number">1</span>
          </div>
          <a href="#" class="btn-apply" data-toggle="modal" data-target="#myModal">Apply Now</a>
        </div>
        <div class="col-md-3 col-sm-3 career-icon ">
          <div class="text-xs-center background-image img-fluid img-circle">
            <img src="assets/image/vac.png" class="img-fluid foreground-image" />
          </div>
          <div class="career-icon-name">Account Manager</div>
          <div class="vacancy">
            <!--<span class="job-title">iOS:</span><span class="vacancy-number">3</span>&nbsp;&nbsp;&nbsp;-->
            <span class="job-title">Vacancies:&nbsp;</span> <span class="vacancy-number">1</span>
          </div>
          <a href="#" class="btn-apply" data-toggle="modal" data-target="#myModal">Apply Now</a>
        </div>
        <div class="col-md-3 col-sm-3 career-icon">
          <div class="text-xs-center background-image img-fluid img-circle">
            <img src="assets/image/vac.png" class="img-fluid foreground-image" />
          </div>
          <div class="career-icon-name">Call Center Agent</div>
          <div class="vacancy">
            <!--<span class="job-title">iOS:</span><span class="vacancy-number">3</span>&nbsp;&nbsp;&nbsp;-->
            <span class="job-title">Vacancies:&nbsp;</span> <span class="vacancy-number">2</span>
          </div>
          <a href="#" class="btn-apply" data-toggle="modal" data-target="#myModal">Apply Now</a>
        </div>
      </div>
    </div>
  

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Apply Now</h4>
          </div>
          <div class="modal-body">
            <form role="form" action="career.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="address">Mailing Address:</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="post">Apply For Post:</label>
                <input type="text" class="form-control" id="post" name="post">
              </div>
              <div class="form-group">
                <label for="file">Choose CV:</label>
                <input type="file" class="form-control" id="file" name="cv">
              </div>
              <input type="submit" class="btn btn-primary" name="apply" value="Submit">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--career ends-->
  <!-- footer-->
  <section id="footer">
        <div class="container">
                  <div class="row">
                           <div class="col-md-12 col-sm-12">
                                     <div class="page footer-h1">
                                          <h2 class="title-page">Connect Us</h2>
                                     </div>
                                     <div class="small servicessmall">
                                          <p>Connect with Orbit Services</p>
                                     </div>
                           </div>
                  </div>
                  <div class="row about-contain">
                          <div class="col-md-12 col-sm-12">
                                          <div class="form-footer">
                                                     <form class="signup">
                                                                      <ul class="singup-list list-unstyled">
                                                                        <li class="signup-item">
                                                                          <input type="text" placeholder="Your Name" class="signup-input">
                                                                          <label for="" class="signup-label">Name :</label>
                                                                        </li>
                                                                        <li class="signup-item">
                                                                          <input type="email" placeholder="Your Email Address" class="signup-input">
                                                                          <label for="" class="signup-label">Email :</label>
                                                                        </li>
                                                                        <li class="signup-item message-footer">
                                                                          <textarea type="textarea" placeholder="Message" class="signup-input "></textarea>
                                                                          <label for="" class="signup-label">Message :</label>
                                                                        </li>
                                                                        
                                                                        <li class="signup-item">
                                                                          <a href="#" class="signup-submit">Send</a>
                                                                        </li>
                                                                      </ul>
                                                                    </form>
                                                                
                                          </div>
                          </div>
                  </div>
        </div>
  </section>
  <!--footer end -->
<?php include("include/footer.php");  ?>
   