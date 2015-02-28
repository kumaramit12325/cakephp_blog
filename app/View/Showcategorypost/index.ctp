
<div class="module">
<div class="module-head">
								<h3> <?php foreach($categorys as $category){
						?><a href="<?php echo $this->html->url('/home'); ?>" style="text-decoration:None;color:#333" >Home /</a><a href="<?php echo $this->html->url('/showcategorypost?category_id='.$category['categories']['category_id']); ?>" style="text-decoration:None;color:#333" >
							<?php echo $category["categories"]["categoryname"];
							}?></a></h3>
							</div>
							<div class="module-body"><?php foreach($finds as $find){
							?>
							<?php 
					
				
?>

<dl>
  <dt><a href="<?php echo $this->html->url('/showcategorypost/post?id='.$find['posts']['id']); ?>" style="text-decoration:None;color:grey"><?php echo $find["posts"]["title"]; ?></a></dt>
  <dd align="justify"><?php echo substr($find["posts"]["description"],0,200); ?>.......</dd>
</dl>
<?php
}?>
</div>
</div>