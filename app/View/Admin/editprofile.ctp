<div class="module">
<div class="module-head">
								<h3>Edit Profile</h3>
							</div>
							<div class="module-body">
						
								<?php
		if(isset($sucess)){
	?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $sucess; ?></strong>   
												</div>
												<?php }?>
												<?php  if(isset($validationErrorsArray)){
												 foreach($validationErrorsArray as $value){
	  ?>
					   
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $value[0]; ?></strong>   
												</div>
												<?php }
												 }
												 ?>
<?php 
			$record=$admindata["Admin"];
		
							
							?>
							<form class="form-horizontal row-fluid" method="post">
							
							<div class="control-group">
											<label class="control-label" for="name">Name</label>
											<div class="controls">
												<input type="text" id="name" name="name" class="span8" value="<?php echo $record["name"]; ?>">
											</div>
										</div>
							
								
												<div class="control-group">
											<label class="control-label" for="username">User Name</label>
											<div class="controls">
												<input type="text" id="username" name="username" class="span8" value="<?php echo $record["username"]; ?>">
											</div>
										</div>
							
										
										
										<div class="control-group">
											<label class="control-label" for="email">Email </label>
											<div class="controls">
												<input type="text" id="email" name="email" class="span8" value="<?php echo $record["email"]; ?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="password">Password</label>
											<div class="controls">
												<input type="password" id="password" name="password" class="span8" value="<?php echo $record["password"]; ?>">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn-inverse">Update Profile</button><a href="<?php echo $this->html->url('/admin/');?>" style="text-decoration: none;" class="btn">Cancel</a>
											</div>
											
											
										
										</div>
										
												</form>
													<?php 		
											
									
							?>
								

										</div>
										</div>
										</div>