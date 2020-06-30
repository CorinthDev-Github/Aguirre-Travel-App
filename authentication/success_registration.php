<?php include '_css.php'; ?>
	<body>

		<div class="wrapper" style="background-image: url('images/bg4.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/ggf.gif" alt="">
				</div>
				<form method="POST">
					<h3>Register Information</h3>
					<?php include 'logreg_function.php'; ?>
					<form method="post" action="login.php" role="login">
				  	<div class="panel-body">

		                <?php if (isset($_SESSION['success'])) : ?>
		                  <div class="error success" >
		                    <h5>
		                      <center>  
		                        <?php 
		                          echo $_SESSION['success']; 
		                          unset($_SESSION['success']);
		                        ?>
		                       </center>
		                    </h5>
		                  </div>
		                <?php endif ?>
		                <!-- logged in user information -->
		                <?php  if (isset($_SESSION['fullname'])) : ?>
		                  <h3 class="alert alert-info text-center">Name:&nbsp <?php echo $_SESSION['fullname']; ?></h3>
		                <?php endif ?>
		                <center><- Back to <a href="index.php">SIGN IN ACCOUNT</a></center>
						</form>
				  	</div>
				</form>
			</div>
		</div>
		
	</body>