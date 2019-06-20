

             <?php

                include ('dcarehead.php');

                include ('userauth.php');

             ?>

                <?php
                 $stateobj = new Authentication;
                 $state = $stateobj->getState();  ?>

             <div class="row">
                <div class="col-md-3">
                  <div style="background-color: rgb(0,64,128); height: 600px;">
                    <p><img src="images/avatar.png" width="150" height="150" style="margin: 10px 10px;"></p>
                    <p><input type="file" ></p>
                    <h4 style="color: white;">Welcome <?php echo $_SESSION['caregiver_fname']; ?></h4>
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
    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">View Profile</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Edit Your Availability & Experience</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Edit Your About Me</a>
    </div>
      </div>
  </div>

  <div class="row">
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="card card-body">
            <form>
                <div>
                   <h5>Profile</h5>
                     <form>
                         <label>About You</label><br>
                             <textarea cols="20" rows="4" class="form-control"></textarea><br>
                          <label>Availablity and Experience</label> <br>
                            <textarea cols="20" rows="4" class="form-control"></textarea><br>
                            <label>Previous Work Experience</label> <br>
                              <textarea cols="20" rows="4" class="form-control"></textarea><br>
                      </form>
                </div>
            </form>
        </div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
  <div class="card card-body">
              <form>
      <div>
    <h5>Availability and Experience</h5>
    <form> 
  <label>How many days are you available to work weekly</label><br>
  <input type="text" name="available"> <br>
  <label>Where do you work presently</label> <br>
  <input type="text" name="work">
    </form>
    </div>
      
    <div>
      <h5>Previous Work Experience</h5>
      <form>
  <label>What is the company/family name of your former employer</label><br>
  <input type="text" name="available"> <br>
  <label>What type of work did you do </label> <br>
  <input type="text" name="work">
      </form>
    </div> 

            </form>
</div><br>

<button type="button" class="btn btn-success">Save & Continue</button>

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        
        <div class="card card-body">
                              <h5>About Me</h5>
                        <form>
                          <label>Birthdate*</label> <br>
                    <input type="date" name="dob"> <br>
             
                    <label>Contact Number</label> <br>
                      <input type="text" name="phone"> <br>

                        <label>City</label> <br>
                        <input type="text" name="city"> <br>


                        <label for="exampleFormControlSelect1">State</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">Select a state</option>
                                                <?php
                                                    foreach ($state as $key => $value) {
                                                        $stateid = $value['state_id'];
                                                        $statename = $value['state_name'];
                                                        if ($_POST['stateid']) {
                                                        echo "<option value=\"$stateid\" selected='selected'>$statename</option>";

                                                    }else{
                                                        echo "<option value=\"$stateid\">$statename</option>";
                                                    }

                                                    }

                                                    ?>
                                                
                                          </select>  <br>  

                                          <button type="button" class="btn btn-success">Save Changes</button>

                        </form>

                            </div>

      </div>
    </div>
  </div>
</div>
</div>


                </div>  

        </div>

             

<?php
    
    include ('dcarefoot.php');
?>
