<?php
namespace Home\Model;
use Think\Model\RelationModel;
class ActivityInfoModel extends RelationModel{
	// 自动关联查询
	protected $_link=array(
		"UserInfo"=>array(
				'mapping_type'=>self::BELONGS_TO,
				'class_name'=>'UserInfo',
				'mapping_name'=>'nickname',
				'mapping_fields'=>'id,nickname',
				'foreign_key'=>'userid',
				'as_fields'=>'nickname'
		),
	);
}