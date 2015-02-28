<div class="module">
<div class="module-head">
								<h3>Add Post</h3>
							</div>
							<div class="module-body">
							<div class="module-option clearfix">
												<a href="<?php echo $this->html->url('/admin/posts'); ?>" class="btn">Posts List</a>
											</div>
								 <?php if(isset($success)){
					   ?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $success; ?></strong>   
												</div>
												<?php }?>
												 <?php if(isset($ss)){
					   ?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">x</button>
										<strong><?php echo $ss; ?></strong>   
												</div>
												<?php }?>

							<form class="form-horizontal row-fluid" method="post">
							<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="title" name="title" placeholder="Type something here..." class="span8">
											</div>
										</div>
								
												<div class="control-group">
											<label class="control-label" for="basicinput">Select Category</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." name="category" class="span8">
		
<?php 		foreach($finds as $find){
	

	echo "<option value='".$find['categories']['category_id']."' >".
	htmlspecialchars($find['categories']['categoryname'])."</option>";


}
?>
												</select>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="description">Description</label>
											<div class="controls">
												<textarea class="span8" cols="80" rows="20"  name="description"></textarea>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn-inverse">Save Post</button><a href="<?php echo $this->html->url('/admin/posts');?>" style="text-decoration: none;" class="btn">Cancel</a>
											</div>
										</div>
										</form>

										</div>
										</div>
										</div>