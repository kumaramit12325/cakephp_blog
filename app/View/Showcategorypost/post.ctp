
<div class="module">
<div class="module-head"><?php foreach($fi as $find){
						?>	<h3> 
						<a href="<?php echo $this->html->url('/home'); ?>" style="text-decoration:None;color:#333" >Home </a>/<a href="<?php echo $this->html->url('/showcategorypost?category_id='.$find['posts']['category_id']); ?>" style="text-decoration:None;color:#333" >
							<?php foreach($categoryname as $category){ echo $category['categories']['categoryname'];
							}?></a> / <?php echo $find["posts"]["title"]; ?></h3>	
							</div>
							<div class="module-body">
							
							
<dl>
  <dt>  Title: <?php echo $find["posts"]["title"]; ?></a></dt>
  Description:<dd align="justify"><?php echo $find["posts"]["description"]; ?></dd>
</dl>


<?php
}?>