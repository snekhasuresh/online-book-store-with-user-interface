<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

<div class="container">       
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<h3>Admin Panel</h3>

		   <form action="admin_verify.php" method="POST" class="">
			    <div class="form-group">
                <label for="">Username</label>
				<input type="text" placeholder="username" name="name"class="form-control">
				
                
			</div>
			<div class="form-group">
            <label for="">Password</label>
				<input type="password" placeholder="Password" name="pass"class="form-control">
				
                
                </div>
		       
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success" >
			</div>
			</form>
	</div>
    <div class="col-sm-4"></div>
    </div>
	</div>

<?php
	require_once "./template/footer.php";
?>