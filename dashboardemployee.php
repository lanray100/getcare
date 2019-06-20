              <?php
  
                  include ('userauth.php');
                ?>

             <?php

                include ('dcarehead.php');

             ?>


             <div class="row">
                <div class="col-md-3">
                  <div style="background-color: rgb(0,64,128); height: 600px;">
                    <p><img src="images/avatar.png" width="150" height="150" style="margin: 10px 10px;"></p>
                    <p><input type="file" ></p>
                    <button type="file">Upload</button>
                    <h4 style="color: white;">Welcome <?php echo $_SESSION['caregiver_fname']; ?> </h4>
                    
                    <p><a href="#" class="ref">Jobs Suggested For You</a></p>
                    <p><a href="#" class="ref">New Jobs Posted</a></p>
                    <p><a href="joblisting.php" class="ref">Search For Jobs</a></p>
                    <p><a href="#" class="ref">Applied Jobs</a></p>
                    

                  </div>

                </div>

                <div class="col-md-9">
                      <div>
                          <h1>Explore more with our Job search</h1>
                          <p>Kindly use our job search bar to see more opportunities</p>

                          <h1>Share your experience(s) <br> with your employer</h1>
                          <p>Show all your experience and let the right employer or family reach out to you </p>

                      </div>
                </div>

                
            </div>

            <?php

                include ('dcarefoot.php');

             ?>