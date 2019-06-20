

             <?php

                include ('demphead.php');

             ?>

             <div class="row">
                <div class="col-md-3">
                  <div style="background-color: rgb(0,64,128); height: 600px;">
                    <p><img src="images/avatar.png" width="150" height="150" style="margin: 10px 10px;"></p>
                    <p><input type="file" ></p>
                    <button type="file">Upload</button>
                    <h4 style="color: white;">Welcome
                      <?php
                           echo $_SESSION['employer_fname'];
                         ?>

                    </h4>
                    <hr>
                    <p><a href="#" class="ref">Suggested Caregiver For You</a></p>
                    <p><a href="#" data-toggle="modal" data-target="#job" class="ref">Post a Job</a></p>
                    <p><a href="#" class="ref">Posted Jobs</a></p>
                    <p><a href="#" class="ref">Applied Caregivers</a></p>


                  </div>

                </div>

                <div class="col-md-9">
                       <div>
                         <div>
                          <h1>Post your Jobs in one step</h1>
                          <p>Kindly post jobs to give you channels to caregivers</p>

                          <h1>Find the right caregiver for<br> your company or family</h1>
                          <p>Caregivers are waiting for you just give it a shot in posting your job
                          in our website </p>

                      </div>



                       </div>
                </div>

                </div>
  
  <?php

                include ('dempfoot.php');

                include ('postmodal.php');

             ?>