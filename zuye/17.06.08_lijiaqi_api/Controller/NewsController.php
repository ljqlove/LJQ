<?php
class NewController
{
	public function getList()
	{
		$news =new Model('k36s');
		// 获取参数
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		$fields = !empty($_GET['fields']) ? $_GET['fields'] : '*';
		$where = !empty($_GET['keywords']) ? 'title like "%'.$_GET['keywords'].'%"' : '';
		$order = !empty($_GET['order']) ? $_GET['order'] : 'id desc';
		$count = $news -> count();
		// 实例化分页对象
		$page = new Page($count,$num);
		// 获取当前页码所对应的limit参数
		$limit = $page -> limit();

		// 读取所有的信息
		$res = $news -> limit($limit)->orderBy($order) -> where($where) -> select($fields) -> get();
		// 判断
		if (!empty($res)) {
			$data = ['status' => '0000','msg'=>'ok','data'=>$res];
		}else{
			$data = ['status' => '0001','msg'=>'empty'];
		}

		echo json_encode($data);
	}
}