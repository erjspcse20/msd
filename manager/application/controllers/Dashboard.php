<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index()
    {
        //print_r($this->session->userdata());
        $qrygh ="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Grand_Hotal';";

        $qrygoibibo ="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Goibibo';";

        $qrymmt="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Make_my_trip';";

        $qryjd="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Just_dial';";
        
        
        $qryoyo="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='OYO';";

        $qrymmtyatra="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Yatra';";
        
       $qrybooking="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Booking.com';";
        
        $qrywebsite="select  IFNULL(sum(total_paid),0) as summGrand_Hotal,count(uuid) as totalno from customer_detail where refrance ='Website';";

        $data["grandhotal"]=$this->CommonModel->ExecuteDirectQry($qrygh,1);
        $data["goibibo"]=$this->CommonModel->ExecuteDirectQry($qrygoibibo,1);
        $data["makemytrip"]=$this->CommonModel->ExecuteDirectQry($qrymmt,1);
        $data["justdial"]=$this->CommonModel->ExecuteDirectQry($qryjd,1);
        $data["oyo"]=$this->CommonModel->ExecuteDirectQry($qryoyo,1);
        $data["yatra"]=$this->CommonModel->ExecuteDirectQry($qrymmtyatra,1);
        $data["booking"]=$this->CommonModel->ExecuteDirectQry($qrybooking,1);
        $data["website"]=$this->CommonModel->ExecuteDirectQry($qrywebsite,1);
        $data["pageName"]='dashboard';
        $this->load->view('adminViewData',$data);
    }
    public function updatePassword()
    {
        $data["pageName"]='changePassword';
        $this->load->view('adminViewData',$data);
    }
    public function updateUserPassword()
    {
        /*if($this->form_validation->run('password_update_rule')== FALSE)
        {
            return redirect('flight-skipper-user-profile.jsp');
        }
        else {*/
            $PasswordOld = $this->input->post('OldPassword');
            $Password = $this->input->post('NewPassword');
            $EncOldPassword=sha1($PasswordOld);
            $last_no_qry="select password from mst_user where uuid='".$this->session->userdata('uuid')."';";
            $vistor=$this->CommonModel->ExecuteDirectQry($last_no_qry,1);
            //print_r($vistor);exit;
            if($vistor["password"]==$EncOldPassword)
            {
                $EncPassword=sha1($Password);
                $InsQry = " update mst_user set ps_un='".$Password."',password='".$EncPassword."',updated_at=now(),updated_by='".$this->session->userdata('uuid')."' where uuid='".$this->session->userdata('uuid')."';";
                if ($this->CommonModel->create($InsQry)) {
                    $this->_flashMessage(1, "password updated successfuly", "error occure");
                } else {
                    //echo "error occure";
                    $this->_flashMessage(0, "password updated successfuly", "error occure");
                }
            }else{
                $this->_flashMessage(0, "password updated successfuly", "OldPassword does not match");
            }
            return redirect('welecome-to-msd-change-password.jsp');
        //}
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel');
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