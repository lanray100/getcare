

             <?php

                include ('demphead.php');

             ?>

             <?php
             
              $stateobj = new Authentication;
              $state = $stateobj->getState();

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
    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">View Profile</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Edit Your Position</a>
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
                      <textarea cols="30" rows="7" class="form-control"></textarea><br>
                        <label>About Your Company</label> <br>
                            <textarea cols="30" rows="7" class="form-control"></textarea><br>
                            </form>
                          </div>
              </form>
          </div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
 <div class="card card-body">
          <form>
                <div>
    <h5>About Your company</h5>
    <form>
  <label>How many employees do you have?</label><br>
  <input type="text" name="available"> <br>
  <label>What is your Company all about?</label> <br>
  <input type="text" name="work">
    </form>
  </div>

    <div>
      <form>
  <label>Type of Industry</label><br>
  <input type="text" name="available"> <br>
  <label>Type of Category </label> <br>
  <input type="text" name="work">
    </form>
    </div>
      
        </form>
    </div> <br>

<button type="submit" class="btn btn-success">Save & Continue</button>

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        
        <div class="card card-body">
                              <h5>About Me</h5>
                        <form>
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

                                          <button type="button" class="btn btn-success">Save changes</button>

                        </form>

                            </div>

      </div>
    </div>
  </div>
</div>
</div>
        
    
            <?php

                include ('dempfoot.php');

                include ('postmodal.php');

             ?>
