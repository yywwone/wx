<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
   
     public function _empty(){
    	$this->redirect('Admin/Index/index');  
    }
}