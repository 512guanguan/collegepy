<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	header('Content-type: text/html;charset=UTF-8');
    	echo '试试数据库连接操作<br />';
//     	//实例化数据表
//     	$Login=M("Login");//注意与D函数的区别
//     	//查询数据库
//     	$Info=$Login->where('id<5')->select();
// //     	dump($Info);//参看读取的结果
//     	for($i=0;$i<count($Info);$i++){
//     		echo 'id='.$Info[$i]['id'].'  Uname='.$Info[$i]['Uname'].'<br />';
//     	}
//     	//往数据库里面插入数据成功
//     	$data['Uname']="zgr";
//     	$data['Upassword']="zouguanru";
// //     	$Login->data($data)->add();//往数据库里面插入数据成功
// 	//给前端模版显示页面传值
// 	$user=array('username'=>'llb','pwd'=>'lailubo');
// 	$this->assign("user",$user);//把数组传给前端页面
	$this->display();
    }
    /**
     * 服务器端的接口函数
     * 请求方式：post
     * 请求url：/index/Activity
     */
    public function Activity(){
    	$type=$_POST["type"];
//     	echo "马勒戈壁：".var_dump($type);
//     	$aInfo=M('activity_info');
    	$aInfo=D('activity_info');
    	$info=$aInfo->where('id<2')->select();
//     	echo $info."<br />";
		$data=array("llb"=>"zgr","bb"=>"ee");
    	$json=json_encode($info);
//     	$this->assign("aListJson",json_encode($info));
//     	echo $json;
    	$this->display("circle_content");
    }
}
?>