<?php include '_css.php'; ?>
	<body>

		<div class="wrapper" style="background-image: url('images/bg1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/ggf.gif" alt="" style="height: 100%;">
				</div>
            	<?php include 'logreg_function.php'; ?>
				<form action="signup.php" method="POST">
				<center><img src="images/aguirrepic.png" style="width: 100%"></center><br/>
					<h3>Register credentials</h3>
					<input type="hidden" name="group_id" value="1">
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="firstname" required>
						<input type="text" placeholder="Last Name" class="form-control" name="lastname" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Username" class="form-control" name="username" required>
						<input type="email" placeholder="Email" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<input type="number" placeholder="Mobile Number" class="form-control" name="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" required>
						<input type="number" placeholder="Zip Code" class="form-control" name="address_zip" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Address Line" class="form-control" name="address_full" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="City / Town" class="form-control" name="address_city" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Province" class="form-control" name="address_province" required>
						<input type="text" placeholder="Country" class="form-control" name="address_country" required>
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" name="password" id="pass1" onkeyup="checkPass(); return false;" required>
						<input type="password" placeholder="Confirm Password" class="form-control" name="confirmpassword" id="pass2" onkeyup="checkPass(); return false;" required>
					</div>
                	<center><div id="error-nwl"></div></center>
					Already have an account? <a href="./index.php" style="text-decoration: none; color: blue;">Sign in</a>
					<button name="btn_submit">REGISTER
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
<script type="text/javascript">
  function checkPass()
  {
      var pass1 = document.getElementById('pass1');
      var pass2 = document.getElementById('pass2');
      var message = document.getElementById('error-nwl');
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      
      if(pass1.value.length > 5)
      {
          pass1.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "character number ok!"
      }
      else
      {
          pass1.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Enter atleast 6 characters"
          return;
      }
    
      if(pass1.value == pass2.value)
      {
          pass2.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "Password match!"
      }
      else
      {
          pass2.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Password doesn't match!"
      }
  }  
</script>