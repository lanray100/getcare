          <?php include ('dcarehead.php');

                include ('userauth.php'); ?>

             <?php 
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      
                      $dob = Authentication::sanitizeInput($_POST['dob']);
                      $available = Authentication::sanitizeInput($_POST['available']);
                      $work = Authentication::sanitizeInput($_POST['work']);
                      $past = Authentication::sanitizeInput($_POST['past']);
                      $worktype = Authentication::sanitizeInput($_POST['worktype']);

                      if (empty($dob) || empty($available) || empty($work) || empty($past) || empty($worktype)) {
                        $errmsg = "<small class='form-text text-danger'>Fill in the required input field</small>";
                      }

                      if (empty($err)) {
                        
                        $detailsobj = new Authentication;
                        $detailsobj->caregiverDetails($dob,$past,$work,$available,$worktype,$caregiverid);

                      }
                      
              }

           ?>

             <div class="row">
                <div class="col-md-3">
                  <div style="background-color: rgb(0,64,128); height: 600px;">
                    <p><img src="images/avatar.png" width="150" height="150" style="margin: 10px 10px;"></p>
                    <p><input type="file" ></p>
                    <h4 style="color: white;">Welcome <?php echo $_SESSION['caregiver_fname']; ?> </h4>
                    <hr>
                    <p><a href="#" class="ref">Jobs Suggested For You</a></p>
                    <p><a href="#" class="ref">New Jobs Posted</a></p>
                    <p><a href="#" class="ref">Search For Jobs</a></p>
                    <p><a href="#" class="ref">Applied Jobs</a></p>


                  </div>

                </div>

                <div class="col-md-9">
                      <div class="row">
                            <div class="col-12">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                  <?php
                                          if (isset($dob) || isset($available) || isset($work) || isset($past) || isset($worktype)) {
                                            echo $errmsg;
                                          }
                                      ?>
                                    <h5>About Me</h5>
                                      <label>Birthdate*</label> <br>
                                        <input type="date" name="dob"> <br>
      
                                        <label>How many days are you available to work weekly</label><br>
                                            <input type="text" name="available"> <br>
                                         <label>Where do you work presently</label> <br>
                                              <input type="text" name="work"> <br>
   
                                        <label>What is the company/family name of your former employer</label><br>
                                              <input type="text" name="past"> <br>
                                          <label>What type of work did you do </label> <br>
                                               <input type="text" name="worktype"><br><br>
  
                                          <button type="submit" class="btn btn-success">Save & Continue</button>
                                  </form>
                          </div>

                                  

                    </div>
        
        
                              
                        

        

      </div>
  
  </div>

             

<?php
    
    include ('dcarefoot.php');
?>
