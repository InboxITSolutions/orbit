 <?php
 if(isset($_POST["submitquote"])) {
  if($_POST['submitquote']){
  if($_POST['name']!=""&&$_POST['email']!=""&&$_POST['company']!=""&&$_POST['phone']!=""&&$_POST['zip']!=""&&$_POST['interested']!=""&&$_POST['address']!=""){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $zip = $_POST['zip'];
    $comments = $_POST['comments'];
    $email = $_POST['email'];
    $interest = $_POST['interested'];
    $address = $_POST['address'];
    $recipient = "govinda.aryal10@gmail.com";
    $subject = "Quote Request";
    $mailBody="Name: $name\nPhone No. : $phone\nEmail: $email\nCompany: $company\nZip Code: $zip\nAddress: $address\nInterested In: $interest\nComments: $comments";
    mail($recipient, $subject, $mailBody, "From: $name <$email>");
    ?>

    <script type="text/javascript">
      alert("Quote Requested");
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

  <!--top banner -->
<section id="header">
         <div class="container">
             <div class="row">
                <div class="col-md-6 col-sm-6 left-part">
                    <p class="capkon-p-mini bold left call">
                        <a  tabIndex="-1" href="tel:0422 109 840" class="tooltip tooltip-effect-1 callnow tel"><i class="fa fa-phone"></i>&nbsp;&nbsp; Call Us Now : 11111111111
                           <!-- <span class="tooltip-content">
									<span class="tooltip-front"><i class="fa fa-phone"></i><br/>Call Us Now : </span>
									<span class="tooltip-back">0422 109 840</span>
					       </span> -->
                        </a>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="list-unstyled ul-social">
                        <li><i class="fa fa-facebook-square"></i></li>
                        <li><i class="fa fa-skype"></i></li>
                        <li><i class="fa fa-linkedin-square"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 requestQuote">
                  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Request a Quote 
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu ul-requestaQuote" >
                              <form action="#" method="post">
                                  <label>Name:</label>
                                  <li><input type="text" name="name" placeholder="Name" /></li>
                                  <label>Company Name:</label>
                                  <li><input type="text" name="company" placeholder="Company Name" /></li>
                                  <label>Email Address:</label>
                                  <li><input type="email" name="email" placeholder="Email Address" /></li>
                                  <label>Phone Number:</label>
                                  <li><input type="text" name="phone" placeholder="Phone Number" /></li>
                                  <label>Post Code:</label>
                                  <li><input type="text" name="zip" placeholder="Post Code" /></li>
                                  <label>Interested In:</label><br/>
                                  <select name="interested">
                                    <option selected="selected">Please Select</option>
                                    <option value="Commercial Cleaning">Commercial Cleaning</option>
                                    <option value="Construction Cleaning">Construction Cleaning</option>
                                    <option value="Carpets/Upholstery">Carpets/Upholstery</option>
                                    <option value="Window Cleaning">Window Cleaning</option>
                                    <option value="Floors">Floors</option>
                                    <option value="Grafitti Removal">Grafitti Removal</option>
                                    <option value="High Pressure">High Pressure</option>
                                  </select><br/>
                                  <label>Address:</label>
                                  <li><input type="text" name="address" placeholder="Address"></li>
                                  <label>Comments:</label>
                                  <li><textarea cols="26" rows="4" name="comments" placeholder="Comments"></textarea></li>
                                  <input type="submit" name="submitquote" value="Request Quote" />
                              </form>
                            </ul>
                          </li>
                </div>
             </div>
         </div>
     </section>
  <!-- top banner-end -->
  <!-- nav -->
     <section id="navigation">
     	 <div class="container">
     	     <div class="row">
                     <div class="col-md-2 col-sm-12 logo-absolute">
                          <a href="index.php"><img src="assets/image/logo-orbit.png" class="logo"></a>
                     </div>
                     <div class="col-md-10 col-sm-12 ">
		                         <nav role="navigation" class="navbar navbar-default">
							    <!-- Nav -->
							    <div class="navbar-header">
							        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
							            <span class="sr-only">Toggle navigation</span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							        </button>
							    </div>
							    <!-- Collection of nav links and other content for toggling -->
							    <div id="navbarCollapse" class="collapse navbar-collapse">
							        <ul class="nav navbar-nav pull-right">
							            <li><a href="index.php"  class="active">Home</a></li>
							            <li><a href="about.php">About Us</a></li>
                           <li><a href="career.php">Career</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services 
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Commercial</a></li>
                              <li><a href="#">Construction</a></li>
                              <li><a href="#">Carpets Upholstery</a></li>
                              <li><a href="#">Windows</a></li>
                              <li><a href="#">Floors</a></li>
                              <li><a href="#">Graffiti Removal</a></li>
                              <li><a href="#">High Pressure</a></li>
                            </ul>
                          </li>
							             <li><a href="gallery.php">Gallery</a></li>
							            <li><a href="contact.php" >Contact Us</a></li>

							         <!--    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							            <li><a href="#"><i class="fa fa-skype"></i></a></li>
							            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
							            <li class="last-child"><a href="#"><i class="fa fa-search"></i></a></li> -->
							        </ul>
							    </div>
		                           </nav>
                       </div>
     	     </div>
     	 </div>
     </section>
  <!--nav end-->