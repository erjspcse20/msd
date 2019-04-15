<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends MY_Controller {
public function index()
{
    $data["pageName"]='addVisitor';
    $this->load->view('adminViewData',$data);
}
public function EditVisitor($para)
{

    $qry="select uuid,full_name,room_no,mobile,age,nationality,comming_from,going_to,check_in_time,check_out_time,no_of_guest,check_in_date,check_out_date,advance,total_paid,paid_amount_last,refrance,room_no,doc1,doc2,gst_no,purpose
            from customer_detail 
            where uuid='".$para."' and is_deleted=0 and is_active=1 order by ainc desc;";
    $vistor=$this->CommonModel->ExecuteDirectQry($qry,1);
    /* echo "<pre>";
     print_r($agent);
     echo "<pre>";*/
    $data["visitorDataEdit"]=$vistor;
    $data["pageName"]='addVisitor';
    $this->load->view('adminViewData',$data);

}

public function VisitorList()
{
    $qry="select uuid,full_name,room_no,mobile,age,nationality,comming_from,going_to,no_of_days_stay,check_in_time,check_out_time,no_of_guest,check_in_date,check_out_date,advance,total_paid,paid_amount_last,refrance,room_no,doc1,doc2,gst_no,purpose
                from customer_detail 
                where is_deleted=0 and is_active=1 order by ainc desc;";
    $agent=$this->CommonModel->ExecuteDirectQry($qry);
    $qrysum="select IFNULL(sum(total_paid),0) as totalRevenu
                from customer_detail 
                where is_deleted=0 and is_active=1 order by ainc desc;";
    $agent=$this->CommonModel->ExecuteDirectQry($qry);
    $sumrevenu=$this->CommonModel->ExecuteDirectQry($qrysum,1);
   /* echo "<pre>";
    print_r($agent);
    echo "<pre>";*/
    $data["visitorData"]=$agent;
    $data["sumrevenu"]=$sumrevenu;
    $data["pageName"]='visitorList';
    $this->load->view('adminViewData',$data);

}
    public function VisitorListfilter()
    {
        $FromDate = $this->input->post('fromdate');
        $ToDate = $this->input->post('todate');
        $Refrance = $this->input->post('refrence');//exit;
        $data["ToDate"]=($FromDate!="")?$ToDate:date("d-m-Y");
        $data["FromDate"]=($ToDate!="")?$FromDate:date("d-m-Y",strtotime('-10 days', strtotime(date("d-m-Y"))));
        $data["Refrance"]=($Refrance!="")?$Refrance:"";
        $qry="select uuid,full_name,room_no,mobile,no_of_days_stay,age,nationality,comming_from,going_to,check_in_time,check_out_time,no_of_guest,check_in_date,check_out_date,advance,total_paid,paid_amount_last,refrance,room_no,doc1,doc2,gst_no,purpose
                from customer_detail 
                where is_deleted=0 and is_active=1 and check_in_date>='".date("Y-m-d",strtotime($data["FromDate"]))."' and check_in_date<='".date("Y-m-d",strtotime($data["ToDate"]))."' ".(($Refrance!="")?" and refrance='".$Refrance."'":"")." order by ainc desc;";
        $qrysum="select IFNULL(sum(total_paid),0) as totalRevenu
                from customer_detail 
                where is_deleted=0 and is_active=1 and check_in_date>='".date("Y-m-d",strtotime($data["FromDate"]))."' and check_in_date<='".date("Y-m-d",strtotime($data["ToDate"]))."' ".(($Refrance!="")?" and refrance='".$Refrance."'":"")." order by ainc desc;";

        $agent=$this->CommonModel->ExecuteDirectQry($qry);
        $sumrevenu=$this->CommonModel->ExecuteDirectQry($qrysum,1);
        /* echo "<pre>";
         print_r($agent);
         echo "<pre>";*/
        $data["visitorData"]=$agent;
        $data["sumrevenu"]=$sumrevenu;
        //exit;
        $data["pageName"]='visitorReport';
        $this->load->view('adminViewData',$data);

    }
public function Store()
{
    // echo "hi";exit;
   /* if($this->form_validation->run('visitor_master_rules')== FALSE)
    {
        $data["pageName"]='AddCity';
        $this->load->view('adminViewData',$data);
    }
    else
    {*/
        // echo "hi";exit;
        $EntryUser=$this->session->userdata('uuid');
        $Name = $this->input->post('fullname');
        $Address1 = $this->input->post('address1');
        $Address2 = $this->input->post('address2');
        $Mobile = $this->input->post('mobile');
        $Age = $this->input->post('age');
        $Nationality = $this->input->post('nationality');
        $Commingfrom = $this->input->post('commingfrom');
        $Goingto = $this->input->post('goingto');
        $Noofperson = $this->input->post('noofperson');
        $Purpose = $this->input->post('purpose');
        $customerGst = $this->input->post('customerGst');
        $Advance = $this->input->post('advance');
        $Refrence = $this->input->post('refrence');
        $Roomno = $this->input->post('roomno');
        $Arrivaldate = date("Y-m-d",strtotime($this->input->post('arrivaldate')));
        $Departuredate = date("Y-m-d",strtotime($this->input->post('departuredate')));
        $Arrivaltime=$this->input->post('arivalhr').":".$this->input->post('arivalmin')." ".$this->input->post('arivalap');
        $Departuretime=$this->input->post('departurehr').":".$this->input->post('departuremin')." ".$this->input->post('departureap');
        $Imgdoc1 ="";
        $new_name = time().$_FILES["doc1"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
        /*$config['max_size']             = 1000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;*/
        $data1 = array();
        $data2 = array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('doc1'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data1 = $this->upload->data('file_name');
        }
        $new_name2 = time().$_FILES["doc2"]['name'];
        $config['file_name'] = $new_name2;
        if ( ! $this->upload->do_upload('doc2'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data2 = $this->upload->data('file_name');
        }
         $Imgdoc2 = $this->input->post('advance');
        $last_no_qry="select max(last_no) as sequence from customer_detail";
        $vistor=$this->CommonModel->ExecuteDirectQry($last_no_qry,1);
        if($vistor["sequence"]>0){
            $lastNo=$vistor["sequence"]+1;
            $Sequence="MSD".date("Y").$lastNo;
        }else{
            $lastNo=2000;
            $Sequence="MSD".date("Y")."2000";
        }

        $InsQry="INSERT INTO `customer_detail`(`uuid` ,`full_name`, `address_line1`, `address_line2`, `mobile`, `age`, `nationality`, `comming_from`, `going_to`, `check_in_time`, `check_out_time`, `no_of_guest`, `created_by`, `created_at`, `check_in_date`, `check_out_date`, `is_active`, `advance`, `refrance`, `room_no`, `doc1`, `doc2`, `gst_no`, `purpose`, `bill_no`, `last_no`) 
                    VALUES (uuid(),'".$Name."','".$Address1."','".$Address2."','".$Mobile."','".$Age."','".$Nationality."','".$Commingfrom."','".$Goingto."','".$Arrivaltime."','".$Departuretime."','".$Noofperson."','".$EntryUser."','".$this->CurrentTime()."','".$Arrivaldate."','".$Departuredate."',1,'".$Advance."','".$Refrence."','".$Roomno."','".$data1."','".$data2."','".$customerGst."','".$Purpose."','".$Sequence."','".$lastNo."');";


        if($this->CommonModel->create($InsQry))
        {
            $this->_flashMessage(1,"Save successfuly","error occure");;
        }
        else
        {
            //echo "error occure";
            $this->_flashMessage(0,"Save successfuly","error occure");;
        }//echo $this->db->last_query();exit;
        return redirect('welcome-to-msd-add-visitor.jsp');

}
public function UpdateVisitor()
{
    $EntryUser=$this->session->userdata('uuid');
    $Uuid = $this->input->post('datauser');
    $Name = $this->input->post('fullname');
    $Address1 = $this->input->post('address1');
    $Address2 = $this->input->post('address2');
    $Mobile = $this->input->post('mobile');
    $Age = $this->input->post('age');
    $Nationality = $this->input->post('nationality');
    $Commingfrom = $this->input->post('commingfrom');
    $Goingto = $this->input->post('goingto');
    $Noofperson = $this->input->post('noofperson');
    $Purpose = $this->input->post('purpose');
    $customerGst = $this->input->post('customerGst');
    $Advance = $this->input->post('advance');
    $Refrence = $this->input->post('refrence');
    $Roomno = $this->input->post('roomno');
    $Arrivaldate = date("Y-m-d",strtotime($this->input->post('arrivaldate')));
    $Departuredate = date("Y-m-d",strtotime($this->input->post('departuredate')));
    $Arrivaltime=$this->input->post('arivalhr').":".$this->input->post('arivalmin')." ".$this->input->post('arivalap');
    $Departuretime=$this->input->post('departurehr').":".$this->input->post('departuremin')." ".$this->input->post('departureap');
    $Imgdoc1 ="";
    $new_name = time().$_FILES["doc1"]['name'];
    $config['file_name'] = $new_name;
    $config['upload_path']          = 'upload/';
    $config['allowed_types']        = '*';
    /*$config['max_size']             = 1000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;*/
    $data1 = "";
    $data2 = "";
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    //var_dump($_FILES);
    if ( ! $this->upload->do_upload('doc1'))
    {
        $error = array('error' => $this->upload->display_errors());
        //print_r($error);
    }
    else
    {
        print_r($this->upload->data());
        $data1 = $this->upload->data('file_name');
    }
    $new_name2 = time().$_FILES["doc2"]['name'];
    $config['file_name'] = $new_name2;
    if ( ! $this->upload->do_upload('doc2'))
    {
        $error = array('error' => $this->upload->display_errors());
        //print_r($error);
    }
    else
    {
        $data2 = $this->upload->data('file_name');
    }

    $Imgdoc2 = $this->input->post('advance');
    $InsQry="update `customer_detail` set `full_name`='".$Name."', `address_line1`='".$Address1."', `address_line2`='".$Address2."', `mobile`='".$Mobile."', `age`='".$Age."', `nationality`='".$Nationality."', `comming_from`='".$Commingfrom."', `going_to`='".$Goingto."', `check_in_time`='".$Arrivaltime."', `check_out_time`='".$Departuretime."', `no_of_guest`='".$Noofperson."', `updated_by`='".$EntryUser."', `updated_at`='".$this->CurrentTime()."', `check_in_date`='".$Arrivaldate."', `check_out_date`='".$Departuredate."', `advance`='".$Advance."', `refrance`='".$Refrence."', `room_no`='".$Roomno."' ".(($data1!="")?", `doc1`='".$data1."'":"")." ".(($data2!="")?", `doc2`='".$data2."'":"").", `gst_no`='".$customerGst."', `purpose`='".$Purpose."' where uuid='".$Uuid."';";
    if($this->CommonModel->create($InsQry))
    {
        $this->_flashMessage(1,"updated successfuly","error occure");;
    }
    else
    {
        //echo "error occure";
        $this->_flashMessage(0,"Save successfuly","error occure");;
    }

    //echo $this->db->last_query();exit;
    return redirect('welcome-to-msd-visitor-list.jsp');
}
public function __construct()
{
    parent::__construct();
    $this->load->model('CommonModel');
    $this->load->helper('url');
    $this->load->library('form_validation');
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
?>