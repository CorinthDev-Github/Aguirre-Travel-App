<?php 
		include 'connection.php';
		$errors = array();
		session_start();

		  if (isset($_POST['btn_submit'])) {
		    
			$_SESSION['success'] = "Successfully Registered!";
		    $fullname = $_POST['firstname'] . " " . $_POST['lastname'];
		    $email = $_POST['email'];
		    $username = $_POST['username'];
		    $contact = $_POST['contact'];
		    $address = $_POST['address_full'] . " " . $_POST['address_city'] . " " . $_POST['address_province'] . " " . $_POST['address_country'] . " " . $_POST['address_zip'];
		    $password = $_POST['password'];
		    $confirmpassword = $_POST['confirmpassword'];
		    $group_id = $_POST['group_id'];

		    $check_duplicate_department = "SELECT username FROM credentials WHERE username = '$username' ";
		    $result = mysqli_query($conn, $check_duplicate_department);

		    $count = mysqli_num_rows($result);

		    if ($count > 0) {
		    	echo "<h5 class = 'alert alert-danger'><center>The Username ".$username." is already registered.</center></h5>";
		    	return false;
		    }


		    //ensure that from fields are filled properly
			if (empty($fullname)) {
				array_push($errors, "Fullname is required");
			}
			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			if (empty($password)) {
				array_push($errors, "Password is required");
			}

			if ($password != $confirmpassword) {
				array_push($errors, "The password doesn't match!");
			}

			if (count($errors) == 0) {
			    $password = md5($password);
			    $sql = "INSERT INTO credentials (fullname, email, contact, address_full, username, password, confirmpassword, group_id)
			    VALUES ('$fullname','$email','$contact','$address','$username','$password','$confirmpassword','$group_id')";
			    $query = mysqli_query($conn, $sql);
				$_SESSION['fullname'] = $fullname;
				header('location: success_registration.php'); //redirect to homepage
				
			}
			mysqli_close($conn);
		  }

		//login from login page
		if (isset($_POST['btn_login'])){
			login();
		}

		function login() {

		include 'connection.php';
		$_SESSION['error'] = "Incorrect username or password!";
		$username=$_POST['username'];
    	$password=$_POST['password'];

	        // attempt login if no errors on form
				$password = md5($password);

				$query = "SELECT * FROM credentials WHERE username='$username' AND password='$password' LIMIT 1";
				$results = mysqli_query($conn, $query);

				if (mysqli_num_rows($results) == 1) { // user found
					// check if user is admin or user
					$logged_in_user = mysqli_fetch_assoc($results);
					if ($logged_in_user['group_id'] == '0') {
						$_SESSION['user'] = $logged_in_user;
						header('location: ../administrator/index.php');		  
					}elseif ($logged_in_user['group_id'] == '1') {
						$_SESSION['user'] = $logged_in_user;
						header('location: ../userLogged/');	
					}
				}			
		}
?>