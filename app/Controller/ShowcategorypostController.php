<?php
class ShowcategorypostController extends AppController {


	public function index($category_id = ""){
		$this->layout ="home";
		//$sel= "SELECT * FROM categories";
		
		$this->loadmodel('Home');
		$fin=$this->Home->find('all');
		$this->set('catmenu',$fin);
		$category_id=$_GET["category_id"];
		if (!$category_id) {
			throw new NotFoundException(__($this->redirect(array( 'controller' => 'home','action'=>'index'))));
		}
		$sho= 'SELECT * FROM categories where category_id='.$category_id;
		$show = $this->Showcategorypost->query($sho);
		$this->set('categorys',$show);
		if($show){

			$sel= "SELECT * FROM posts where category_id=".$category_id;
			$query = $this->Showcategorypost->query($sel);
			$this->set('finds',$query);
		}else{
			$this->redirect(array( 'controller' => 'home','action'=>'index'));
		}
	}

public function post($id=""){
$this->layout ="home";
$this->loadmodel('Home');
		$fin=$this->Home->find('all');
		$this->set('catmenu',$fin);
$id=$_GET["id"];

if (!$id) {
			throw new NotFoundException(__($this->redirect(array( 'controller' => 'home','action'=>'index'))));
		}
	$sel= "SELECT * FROM posts where id=".$id;
			$query = $this->Showcategorypost->query($sel);
			//print_r($query);
			$ss= "SELECT * FROM categories where category_id=".$query[0]["posts"]["category_id"];
     $cat = $this->Showcategorypost->query($ss);
	 $this->set('categoryname',$cat);
			if($query){
$this->set('fi',$query);


}else{
			$this->redirect(array( 'controller' => 'home','action'=>'index'));
		}
	
	}
}
?>