<?php

require_once '/Applications/MAMP/htdocs/mvc/libs/Controller.php';

class ErrorController extends Controller{

public function showErrorPage(){
  $this->view->error = '404 ERROR';
  $this->view->render('/Applications/MAMP/htdocs/mvc/view/error/index.phtml');
}

}

 ?>
