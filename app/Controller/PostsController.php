<?php
class PostsController extends AppController {

public function index($category_id="") {
 $this->layout ='articles';
$category_id=$_GET["category_id"];
$sel= "SELECT * FROM posts where category_id=".$category_id;
$query = $this->Post->query($sel);
		$this->set('sd',$query);
		return;
		
	
		

	}

}
?>