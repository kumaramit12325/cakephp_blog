<div class="module">
<div class="module-head">
								<h3>Categories List</h3>
							</div>
							<div class="module-body">
							<div class="module-option clearfix">
												<a href="<?php echo $this->html->url('/admin/addcategory'); ?>" class="btn"> Add category</a>
											</div>
						
							<?php if(isset($_GET["del"])){
		if($_GET["del"]==0){
			
			?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong> Category is successfully delete</strong>   
												</div>
												<?php }
												}?>
<form class="form-horizontal row-fluid" method="post">

										<br/>
										<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Category Name</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <?php if(!empty($finds)) 
				$sr =1; 
				{
				foreach($finds as $find){
		
				?>
								  <tbody>
									
									<tr>
									  <td><?php echo $sr++; ?></td>
									  <td><?php echo $find['Admin']['categoryname']; ?></td>
									  <td><a href="<?php echo $this->html->url('/admin/catdelete?category_id='.$find['Admin']['category_id']); ?>" title="Delete" onclick="return confirm('Are you sure Delete the <?php echo $find['Admin']['categoryname']; ?> category?')" class="icon-2 info-tooltip"></a></td>
									</tr>
									<?php }
				}
				?>
								  </tbody>
								</table>

										
										</div>
</form>
</div>


