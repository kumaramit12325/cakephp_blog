<div class="row">
<?php if(isset($loginerror)){
		
	  
?>
	
									<div class="alert alert-error">
	
	<button type="button" class="close" data-dismiss="alert">×</button>
										<strong><?php echo $loginerror; ?></strong>
             	</div>
			 <?php

		                  
		}
	?>


	
<div class="module module-login span4 offset4">

					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="username" id="inputEmail" placeholder="Username or Email">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
				</from></div>