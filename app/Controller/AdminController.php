<?php 
class AdminController extends AppController {

	public function login() {
		$this->layout = 'adminlogin';
		$userid = $this->Session->read('Admin.id');
			$loginstatus=$this->Session->read('Admin.loginstatus');
			if($userid!="" && $loginstatus==1)
			//$user =  $this->Session->read('name');
		
		{
			$this->redirect(array('controller' => 'admin', 'action' => 'index'));
			return;
		}
		else{
			$this->Session->destroy();
		}
		if($this->request->is('post')){
			$a = $this->request->data('username');
			$b = $this->request->data('password');
			if($a!="" && $b!=""){
				$check=($this->Admin->find('all', array('conditions' => array("(Admin.username = '$a' OR Admin.email = '$a') AND Admin.password = '$b'"))));
				
				if(empty($check)) {
					$this->set('loginerror', 'Incorrect Username or Password');
					return;
				}
				else{
					
					$this->Session->write('Admin.id',$check[0]["Admin"]["id"]);
						$this->Session->write('Admin.loginstatus',1);
						$this->Session->write('Admin.name',$check[0]["Admin"]["username"]);
						
					$this->redirect(array('controller' => 'admin', 'action' => 'index'));
					return;
					
				}
			}
			else{
				$this->set('loginerror', 'Both Fields are Required');
				return;
			}

			
		}

	}

	public function index() {
	$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		$this->layout = 'adminindex';
		
		
		}else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}

	}
	public function categories(){
		$this->layout = 'adminindex';
		$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		
        $this->Admin->setSource('categories');     
		//$sql    = 'SELECT * FROM categories';
		$fin= $this->Admin->find('all');
		$this->set('finds',$fin);
		return;
		}
		else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
	}
	public function catdelete($category_id = ""){
$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
	
		$category_id=$_GET["category_id"];
		if (!$category_id) {
			throw new NotFoundException(__($this->redirect(array( 'action' => 'categories'))));
		}
		$sel= "SELECT * FROM categories where category_id=".$category_id;
		if($this->Admin->query($sel)){
			
			$del = "DELETE FROM categories WHERE category_id =".$category_id;
			$this->Admin->query($del); 
			
			//$this->set('del',"Category is successfully Delete");
			$this->redirect(array( 'action' => 'categories?del=0'));
		}else{
			$this->redirect(array( 'action' => 'categories'));
		}
}
else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
	}
	public function addcategory(){
		$this->layout = 'adminindex';
		$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		if ($this->request->is('post')) {
		
			$categoryname = mysql_real_escape_string($_POST['categoryname']);
			$ch="SELECT * FROM `categories` WHERE `categoryname`='".$categoryname."'";
			if (empty($categoryname)){
				$this->set('ss',"Please Type some text");
			} else {
			if($this->Admin->query($ch)){
			$this->set('already',"Category is already");
			}else{
				$insertquery  = "INSERT INTO `categories` (categoryname) VALUES ('".$categoryname."')";
				$this->Admin->query($insertquery);
				$this->set('success',"Category is successfully Add");
				return;
			}
		}
		}
		}
		else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
		
	}

	public function posts(){
		$this->layout = 'adminindex';
		$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		$sql    = 'SELECT a.id, a.title, b.categoryname  FROM posts a, categories b WHERE a.category_id = b.category_id;';
		$fin= $this->Admin->query($sql);
		$this->set('finds',$fin);
		}
		else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
	}

	public function addpost(){
		$this->layout = 'adminindex';
		$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		$sql    = 'SELECT * FROM categories';
		$fin= $this->Admin->query($sql);
		$this->set('finds',$fin);
		if ($this->request->is('post')) {
			$title = mysql_real_escape_string($_POST['title']);
			$category = $_POST['category'];
			$description = mysql_real_escape_string($_POST['description']);
			 
			if (empty($title)){
				$this->set('ss',"Please Type Some Text in Title");
			}else{
				$query= "INSERT INTO `posts`(title, description,category_id) VALUES ('".$title."','".$description."' ,'".$category."')";
				$this->Admin->query($query);
				$this->set('success',"Post is successfully Add");
				return;
			}		
		}
		

	}
	else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
	}
	
	public function postedit(){
		
		$this->layout = 'adminindex';
		$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		$id=$_GET["id"];
		$sql    = 'SELECT * FROM categories';
		$fin= $this->Admin->query($sql);
		$this->set('finds',$fin);
		
		if (!$id) {
			throw new NotFoundException(__($this->redirect(array( 'action' => 'posts'))));
		}

		$fi="select * from posts where id=".$id;
		if (!$fi) {
			throw new NotFoundException(__('Invalid record'));
		}
		if($this->Admin->query($fi)){
			if ($this->request->is('post')) {
				$title = mysql_real_escape_string($_POST['title']);
				$category = $_POST['category'];
				$description = mysql_real_escape_string($_POST['description']);
				$id=$_GET["id"];
				
				$updatequery="Update posts set title='$title', category_id='$category',description= '$description' Where id=".$id;
				
				$this->Admin->query($updatequery);
				$this->redirect(array( 'action' => 'posts?edit=1'));

				
			}	
		}
		else{
			$this->redirect(array( 'action' => 'posts'));
		}	
		$this->set('articles',$this->Admin->query($fi));
		}else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}

	}
	
	public function postdelete($id=""){
	$this->layout = 'adminindex';
	$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
		$id=$_GET["id"];
		if (!$id) {
			throw new NotFoundException(__($this->redirect(array( 'action' => 'posts'))));
		}
		//$sel= "SELECT * FROM posts where id=".$id;
		$this->Admin->setSource('posts');  
		$f=$this->Admin->find('all',array('conditions'=>array('Admin.id'=>$id)));
		if(!empty($f)){
			if($this->Admin->delete($id)){
			//$del = "DELETE FROM posts WHERE id =".$id;
			//$this->Admin->query($del); 
			//$this->set('del',"Post is successfully Delete");
			$this->redirect(array( 'action' => 'posts?del=0'));
			}
		}else{
			$this->redirect(array( 'action'=>'posts'));
		}
		}
else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
	}
	public function editprofile(){
	$this->layout = 'adminindex';
			$loginstatus = $this->Session->read('Admin.loginstatus');
			$userid = $this->Session->read('Admin.id');
			if($userid!="" && $loginstatus==1){
				$admin = $this->Admin->findById($userid);
				if (empty($admin)) {
					$this->Session->destroy();
					$this->redirect(array('controller' => 'admin', 'action' => 'login'));
				}
				if ($this->request->is('post')) {
						$this->Admin->id = $userid;
						if($this->Admin->save($this->request->data)){
							$this->set('sucess', "Profile is Successfully Updated");
						}
						else{
							$this->set('validationErrorsArray', $this->Admin->invalidFields());
						}
						
				}
				$admin = $this->Admin->findById($userid);
				
				$this->set('admindata',$admin);				
				return;				
			}
			else{
				$this->Session->destroy();
				$this->redirect(array('controller' => 'admin', 'action' => 'login'));
			}
		}
	public function logout(){
			$this->Session->destroy();
			$this->redirect(array('controller' => 'admin', 'action' => 'login?id=0'));
		}


}
?>