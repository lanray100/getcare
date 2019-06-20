          <?php include ('demphead.php'); 
              include ('userauth.php');
          ?>

          <?php 
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      
                      $number = Authentication::sanitizeInput($_POST['number']);
                      $company = Authentication::sanitizeInput($_POST['company']);
                      $industry = Authentication::sanitizeInput($_POST['industry']);
                      $category = Authentication::sanitizeInput($_POST['category']);

                      if (empty($number) || empty($company) || empty($industry) || empty($category)) {
                        $err = "<small class='form-text text-danger'>Fill in the required input field</small>";
                      }

                      if (empty($err)) {
                        
                        $detailsobj = new Authentication;
                        $detailsobj->employerDetails($company,$industry,$category,$number,$employerid);

                      }
                      
              }

           ?>

             <div class="row">
                <div class="col-md-3">
                  <div style="background-color: rgb(0,64,128); height: 600px;">
                    <p><img src="images/avatar.png" width="150" height="150" style="margin: 10px 10px;"></p>
                    <p><input type="file" ></p>
                    <h4 style="color: white;">Welcome <?php
                           echo $_SESSION['employer_fname'];
                         ?></h4>
                    <hr>
                    <p><a href="#" class="ref">Suggested Caregiver For You</a></p>
                    <p><a href="#" data-toggle="modal" data-target="#job"class="ref">Post a Job</a></p>
                    <p><a href="#" class="ref">Posted Jobs</a></p>
                    <p><a href="#" class="ref">Applied Caregivers</a></p>


                  </div>

                </div>

                 <div class="col-md-9">

                      <div class="row">
                              <div class="col-12">

                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                
                                      <h5>About Your company</h5>
                                      <?php
                                          if (isset($number) || isset($industry) || isset($company) || isset($category)) {
                                            echo $err;
                                          }
                                      ?>
    
                                    <label>How many employees do you have?</label><br>
                                     <input type="text" name="number"> <br>
                                        <label>What is your Company all about?</label> <br>
                                            <input type="text" name="company">
     
                                              <label>Type of Industry</label><br>
                                                    <input type="text" name="industry"> <br>
                                                  <label>Type of Category </label> <br>
                                                        <input type="text" name="category">  <br><br>
                                        <button type="submit" class="btn btn-success">Save & Continue</button>
                                </form>

                            </div>
                    </div>

              </div>
        </div>
    
            <?php

                include ('dempfoot.php');

                include ('postmodal.php');

             ?>
