<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
      $menulist = C('MENU');       
      $this->assign('MENU_LIST',$menulist);
      $this->display();
    }
}