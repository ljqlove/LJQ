<?php 

	class Tool
	{
		public static function response($status, $msg, $data=[])
		{
			$data = [
				'status'=>$status,
				'msg'=>$msg,
				'data'=>$data
			];
			echo json_encode($data);die;
		}
	}
?>