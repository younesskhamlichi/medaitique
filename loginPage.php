
<?php
include('includes/header.php');

?>






	<div class="container-fluid d-flex login">
    <div class="logo">
   <h1>Fresh Pages</h1>
  <h3>find endless books in the only ever fresh page</h3>
   </div>
			<div class="col-md-5 offset-md-3">
				<div class="card">
					<div class="card-body">
						<form action="login.php" method="POST">
							<div class="form-group">
								<input type="text" class="form-control loginIput" name="Username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="text" class="form-control loginIput" name="pwd" placeholder="Password">
							</div>
                      <div class="loginbtn">
              <button type="submit" class="btn btn-primary form-control">Log in</button>
							<a href="singupPage.php"  class="btn btn-secondary">Don't have an acount sign up</a>
              </div>			
						</form>
					</div>
				</div>
			</div>
		</div>




<?php
 include('includes/footer.php');
?>


