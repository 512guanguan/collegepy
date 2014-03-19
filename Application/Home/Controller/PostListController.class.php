<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 接口说明：首页的列表刷新请求
 * URL地址：/Home/PostList/postlist
 * 提交方式：post
 * @author llb
 */
class PostListController extends Controller{
	public function postlist(){
// 		header('Content-type: text/html;charset=UTF-8');
		$this->selectPage("ActivityInfo",1);//测试语句,一定得是表名，注意大小写
		// 采用htmlspecialchars方法对$_POST['name'] 进行过滤，如果不存在则返回空字符串
		$jsonReceive=json_decode(file_get_contents("php://input"));//php无法接收post上来的json数据
// 		$code=I('get.code','','htmlspecialchars'); //请求功能号
// 		$page=I('get.page','1','htmlspecialchars');//请求页码
// 		$data=array("code"=>$jsonReceive->code,"page"=>$jsonReceive->page,"author"=>"llb");
// 		$json=json_encode($data);
// 		echo $json;
		$code=$jsonReceive->code;//获得功能号
		$page=$jsonReceive->page;//获取页码
		$code=100;
		switch ($code){
			case 100://活动刷新请求
				$result=$this->selectPage("activity_info",1);
				if(empty($result)){
					$json=array("code"=>"10101","result"=>"");//请求出错，没有拿到数据
				}else{
					$json=array("code"=>"101","result"=>$result);
				}
				echo json_encode($json);
				//调用相关函数
				break;
			case 200://工作刷新请求
				break;
			case 300://圈子刷新请求
				break;
		}
	}
	/**
	 * 根据要求执行数据库查询操作
	 * @param unknown $table要查询的表名 
	 * @param string $page 要查询的页码
	 * @param string $number 查询条数，默认30条
	 */
	private function selectPage($table,$page="1",$number="30"){
		$post=D($table);//获取表对象
		$message=$post->relation(true)->page($page,$number)->order("createtime desc")
 			->field("id,title,time,location,userid,createtime")->select();
// 		echo "取得的数据：".var_dump($message);
		return $message;
	}
}






