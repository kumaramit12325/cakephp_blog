<div class="module">
<div class="module-head">
								<h3>Add Category</h3>
							</div>
							<div class="module-body">
								<div class="module-option clearfix">
												<a href="<?php echo $this->html->url('/admin/categories'); ?>" class="btn"> Categories List</a>
											</div>
							 <?php if(isset($success)){
					   ?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $success; ?></strong>   
												</div>
												<?php }?>
												 <?php if(isset($del)){
					   ?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $del; ?></strong>   
												</div>
												<?php }?>
							
                       <?php if(isset($ss)){
					   ?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $ss; ?></strong>   
												</div>
												<?php }?>
												<?php if(isset($already)){
					   ?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $already; ?></strong>   
												</div>
												<?php }?>
							
<form class="form-horizontal row-fluid" method="post">
<div class="control-group">
											<label class="control-label" for="categoryname">Category Name</label>
											<div class="controls">
												<input type="text" id="categoryname" name="categoryname" placeholder="Type something here..." class="span8">
												
												<button type="submit" class="btn-inverse">Add Category</button>
											</div>
											
										</div>
										<br/>
								
										
										</div>
</form>
</div>


