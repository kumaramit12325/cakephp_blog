<div class="module">

<div class="module-head">
								<h3>Posts List</h3>
							</div>
							<div class="module-body">
							<div class="module-option clearfix">
												<a href="<?php echo $this->html->url('/admin/addpost'); ?>" class="btn"> Add Post</a>
											</div>
							 <?php if(isset($success)){
					   ?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $success; ?></strong>   
												</div>
												<?php }?>
							
                      <?php if(isset($_GET["edit"])){
		if($_GET["edit"]==1){
			?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong> Post is Successfully Update</strong>   
												</div>
												<?php }
												}?>
												   <?php if(isset($_GET["del"])){
		if($_GET["del"]==0){
			?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong> Post is Successfully Delete</strong>   
												</div>
												<?php }
												}?>
												

										
											
										
										<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Title</th>
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
									  <td><?php echo $find['a']['title']; ?></td>
									  <td><?php echo $find['b']['categoryname']; ?></td>
									  <td><a href="<?php echo $this->html->url('/admin/postedit?id='.$find['a']['id']); ?>" title="Edit" class="icon-1 info-tooltip"></a>
									  <a href="<?php echo $this->html->url('/admin/postdelete?id='.$find['a']['id']); ?>" title="Delete" class="icon-2 info-tooltip" onclick="return confirm('Are You Sure Delete this Post?')"></a></td>
									</tr>
									<?php }
				}
				?>
								  </tbody>
								</table>

										
										</div>

</div>


