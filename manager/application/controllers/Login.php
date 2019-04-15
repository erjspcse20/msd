<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __constructor()
	{
		parent::__construct();

	}
    public function CurrentTime(){
        date_default_timezone_set("Asia/Calcutta");
        return date("Y-m-d H:i:s");
    }
	public function index()
	{
	    //echo sha1("1234");
        $this->load->view('login');
	}
	public function loginstart(){
        $this->load->model('LoginModel');
        if($this->form_validation->run('signin-master-rules')== FALSE)
        {
            $data["pageName"]='loginPage';
            $this->load->view('Login',$data);
        }
        else
        {
            $UserName=$this->input->post('Username');
            $Password=$this->input->post('Password');
            // echo "hi i m here";exit;
            if(!empty($UserName) and !empty($Password))
            {
                $UserData = $this->LoginModel->loginvalidate($UserName,$Password);
                if($UserData!="" and $UserData["narration"]==base_url())
                {
                    $this->session->set_userdata($UserData);
                    return redirect('welcome-to-msd-dashboard.jsp');
                }
                else
                {
                    $this->_flashMessage(0,'LoginFailed',"Please enter correct username and password");
                    return redirect('welecome-to-msd-Login.jsp');
                }
            }
            else
            {
                $this->_flashMessage(0,'LoginFailed',"Please Enter UserName/Password");
                return redirect('welecome-to-msd-Login.jsp');
            }
        }
    }
	public function logout()
	{

		$this->session->sess_destroy();
		return redirect('welecome-to-msd-Login.jsp');

	}
	private function _flashMessage($successful, $successmsg, $failuremsg)
 	{
 		if( $successful )
 		{
 			$this->session->set_flashdata('feedback',$successmsg);
 			$this->session->set_flashdata('feedback_class','alert_success');
 		}
 		else
 		{
 			$this->session->set_flashdata('feedback',$failuremsg);
 			$this->session->set_flashdata('feedback_class','alert_danger');
 		}
 	}
}