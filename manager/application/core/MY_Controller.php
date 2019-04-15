<?php
class MY_Controller extends CI_Controller
{
	public function __construct()
 	{
 		parent::__construct();
        if($this->session->userdata('uuid')=="")
        {
            return redirect(base_url('welecome-to-msd-Login.jsp'));
        }
        date_default_timezone_set("Asia/Calcutta");
 		/*if(! $this->session->userdata('ID'))
 			return redirect('Login');*/
	}
	public function CurrentTime(){
        date_default_timezone_set("Asia/Calcutta");
        return date("Y-m-d H:i:s");
    }

	public function IsLogOut()
	{
		$SesionID=$this->session->userdata('MADHU_SesID');
		$this->load->model('CommonModel');
		 $colsN='ID';
		 $TableN='LogInLog';
		 $whereArrN="ID='".$SesionID."' and LogOut is null";
		 $orderByArrN[0]=array();
		 $ResData=$this->CommonModel->getDataFromNormalSelect($colsN,$TableN,$whereArrN,$orderByArrN);
		 if(count($ResData)==0)
		 {
			 return redirect('Login');
		 }
	}
	public function GUID()
	{
		if (function_exists('com_create_guid') === true)
		{
			return trim(com_create_guid(), '{}');
		}
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}
	
}