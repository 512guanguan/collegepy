<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		echo 'hello index';
    }
	public function login(){
		echo 'hello login';
		$this->display();
	}
}
?>