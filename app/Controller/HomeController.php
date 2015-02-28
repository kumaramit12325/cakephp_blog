<?php
class HomeController extends AppController {


  public function beforeFilter() {
    if($this->request->is('ajax')) {
      $this->layout = 'content';
    }
  }

  function errorRedirect($url = '/', $code = '404 Not Found') {
    if($this->request->is('ajax')) {
      $this->header('HTTP/1.1 ' . $code);
    } else {
      $this->redirect($url);
    }
  }

public function index(){
 $this->layout ='home';
  $fin=$this->Home->find('all');
		$this->set('catmenu',$fin);
		return;

}
}
?>