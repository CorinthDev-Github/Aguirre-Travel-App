<?php include '_css.php'; ?>
	<body>

		<div class="wrapper" style="background-image: url('images/bg2.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/ggf.gif" alt="">
				</div>
            	<?php include 'logreg_function.php'; ?>
				<form action="index.php" method="POST">
					<center><img src="images/aguirrepic.png"></center><br/>
					<center><p>Welcome back! Happy to see you again.</p></center><br/>
					<h3>Sign in credentials</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control" name="username" required>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password" required>
					</div>
					Don't have an account? <a href="./signup.php" style="text-decoration: none; color: blue;">Sign up</a><br/><br/>
					Want to explore website? <a href="../index.php" style="text-decoration: none; color: blue;">Explore Website</a>
					<button name="btn_login">SIGN IN
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>