
<?php
  $title = "purchase";
  require_once "./template/header.php";
?>
<?php include 'sendemail.php'; ?>
<?php echo $alert; ?>
    
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal" method="POST" action="">
            
			  	<fieldset>
				    <legend>purchase</legend>
				    <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">price$</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" name="message" rows="3" id="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<input type="reset" class="btn btn-default" value="Cancel"name="cancel">
				        	<input type="submit" class="btn btn-primary" value="Submit" name="submit">
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

<?php
  require_once "./template/footer.php";
?>