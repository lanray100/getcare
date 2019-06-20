<?php


// Connect to the database

class DatabaseConfig{
	// database handler
	public $dbcon;
	
	function __construct(){
		$this->dbcon = new mysqli("localhost","root","","getcaregiverdb");

		// check connection 
			// if ($this->dbcon->connect_error) {
			// 	die('Connection Failed'.$this->dbcon->connect_error);
			// }else{
			// 	echo "Connection successful";
			// }
	}
}

	
	// Authentication class for users

	class Authentication
	{
		public $firstname;
		public $lastname;
		public static $emailaddress;
		public $password;
		public $gender;
		public $dbobj;


		public function __construct(){
			$this->dbobj = new DatabaseConfig;
		}

		public function getState(){
			// write a query to get states
			$sql = "SELECT * FROM state";

			if ($result = $this->dbobj->dbcon->query($sql)) {
				
				$row = $result->fetch_all(MYSQLI_ASSOC);
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

			return $row;
		}


		public function registerEmployer($lname,$fname,$company,$email,$password,$gender,$phone,$id,$city,$stateid){
			
			$password = md5($password);
			// write query to insert into the database
			$rgsql = "INSERT INTO employer(employer_lname,employer_fname,employer_company,employer_email,employer_password,employer_gender,employer_phone,employer_idnumber,employer_city,state_id) VALUES ('$lname','$fname','$company','$email','$password','$gender','$phone','$id','$city','$stateid')";

			// check if the query() runs //if data is insert into user table
			if ($this->dbobj->dbcon->query($rgsql) == true) {
				// get the last inserted user id 
				$employerid = $this->dbobj->dbcon->insert_id;

				// create session variable
				$_SESSION['myemployerid'] = $employerid;
				$_SESSION['employer_lname'] = $lname;
				$_SESSION['employer_fname'] = $fname;
				

				// redirect to dashboard
				header("Location: http://localhost/getcare/demployer1.php");
				exit;
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

		}

		public function registerCaregiver($lname,$fname,$username,$email,$password,$gender,$phone,$id,$city,$stateid){
			
			$password = md5($password);
			// write query to insert into the database
			$rgsql = "INSERT INTO caregiver(caregiver_lname,caregiver_fname,caregiver_username,caregiver_email,caregiver_password,caregiver_gender,caregiver_phone,caregiver_identification,caregiver_city,state_id) VALUES ('$lname','$fname','$username','$email','$password','$gender','$phone','$id','$city','$stateid')";

			// check if the query() runs //if data is insert into user table
			if ($this->dbobj->dbcon->query($rgsql) == true) {
				// get the last inserted user id 
				$employeeid = $this->dbobj->dbcon->insert_id;

				// create session variable
				$_SESSION['mycaregiverid'] = $employeeid;
				$_SESSION['caregiver_lname'] = $lname;
				$_SESSION['caregiver_fname'] = $fname;
				

				// redirect to dashboard
				header("Location: http://localhost/getcare/dcaregiver1.php");
				exit;
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

		}


		public function loginEmployer($email,$password){

			
			$password = md5($password);
			// write your query
			$logsql = "SELECT employer.*, state.state_name FROM employer left join state on employer.state_id WHERE employer.employer_email='$email' 
					AND employer.employer_password='$password' limit 1 ";

			// run the query
			$result = $this->dbobj->dbcon->query($logsql);

			// check if number of rows return is equal to one
			if ($this->dbobj->dbcon->affected_rows == 1) {
				// fetch the result 
					$row = $result->fetch_assoc();

					// create session variable
				$_SESSION['myemployerid'] = $row['employer_id'];
				$_SESSION['employer_lname'] = $row['employer_lname'];
				$_SESSION['employer_fname'] = $row['employer_fname'];
				$_SESSION['employer_email'] = $row['employer_email'];

				// redirect to dashboard
				header("Location: http://localhost/getcare/demployer.php");
				exit;
			
			}else{
				// display invalid login credentials
				$result = "<div class='alert alert-danger'>Invalid Email Address or Password!</div>";
			}

			return $result;
		}

		public function loginCaregiver($email,$password){

			
			$password = md5($password);
			// write your query
			$logsql = "SELECT caregiver.*, state.state_name FROM caregiver left join state on caregiver.state_id WHERE caregiver.caregiver_email='$email' 
					AND caregiver.caregiver_password='$password' limit 1 ";

			// run the query
			$result = $this->dbobj->dbcon->query($logsql);

			// check if number of rows return is equal to one
			if ($this->dbobj->dbcon->affected_rows == 1) {
				// fetch the result 
					$row = $result->fetch_assoc();

					// create session variable
				$_SESSION['mycaregiverid'] = $row['caregiver_id'];
				$_SESSION['caregiver_lname'] = $row['caregiver_lname'];
				$_SESSION['caregiver_fname'] = $row['caregiver_fname'];
				$_SESSION['caregiver_email'] = $row['caregiver_email'];

				// redirect to dashboard
				header("Location: http://localhost/getcare/dashboardemployee.php");
				exit;
			
			}else{
				// display invalid login credentials
				$result = "<div class='alert alert-danger'>Invalid Email Address or Password!</div>";
			}

			return $result;
		}

		public function employerDetails($company,$industry,$category,$employeenum,$employerid){
			
			// write query to insert into the database
			$rsql = "INSERT INTO employerdetails(employerdetls_company,employerdetls_industry,employerdetls_category,
			employerdetls_carenum,employer_id) VALUES ('$company','$industry','$category','$employeenum','$employerid')";

			// check if the query() runs //if data is insert into user table
			if ($this->dbobj->dbcon->query($rsql) == true) {
				
				// redirect to dashboard
				header("Location: http://localhost/getcare/demployer.php");
				exit;
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

		}

		public function caregiverDetails($dob,$past,$work,$available,$worktype,$caregiverid){
			
			// write query to insert into the database
			$rsql = "INSERT INTO caregiverdetails(caregiverdetls_dob,caregiverdetls_past,caregiverdetls_work,
			caregiverdetls_available,caregiverdetls_worktype,caregiver_id) VALUES ('$dob','$past','$work','$available','caregiverdetls_worktype','$caregiverid')";

			// check if the query() runs //if data is insert into user table
			if ($this->dbobj->dbcon->query($rsql) == true) {
				
				// redirect to dashboard
				header("Location: http://localhost/getcare/dashboardemployee.php");
				exit;
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

		}

		public function getUserDetails($detailsid){
			// write query to fetch the user details from the users table based on the userid
			$sql = "SELECT * FROM employer JOIN employerdetls ON employer.employer_id = employerdetls.employer_id WHERE employer.employer_id = '$detailsid' " ;

			if ($result = $this->dbobj->dbcon->query($sql)) {
				
				$row = $result->fetch_assoc();
			}else{
				echo "Error: ".$this->dbobj->dbcon->error;
			}

			return $row;
		}
	




		public static function sanitizeInput($data){
			$data = trim($data);
			$data = htmlspecialchars($data);
			$data = addslashes($data);


			return $data;
		}

		// public function confirmPassword($passwordok,$confirmpassword){

		// 	if ($pswd == $confirmpswd ) {
				
		// 		$passwordok = $confirmpassword;

		// 		return $passwordok;
		// 	}else{
		// 		$err_msg = "Error!! Password did not match";
		// 	}


		// }
	
	}

?>