<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintBill extends MY_Controller {

    function startPrint($para=""){
        $data["visitorData"]=array();
        if($para!="")
        {
            $qry="select *
                from customer_detail 
                where uuid='".$para."' order by ainc desc;";
            $agent=$this->CommonModel->ExecuteDirectQry($qry,1);
            /*echo "<pre>";
            print_r($agent);
            echo "</pre>";exit;*/
            $data["visitorData"]=$agent;
        }
        $data["pageName"]='genrateBill';
        $this->load->view('adminViewData',$data);
    }
    function print_item()
    {
        //     load library
        $EntryUser=$this->session->userdata('uuid');
        $Uuid = $this->input->post('cid');
        $data["Billno"] = $this->input->post('billno');
        $data["BillDate"] = $this->input->post('bill_date');
        $data["Name"] = $this->input->post('fullName');
        $data["Mobile"] = $this->input->post('mobileno');
        $data["NoOfPerson"] = $this->input->post('noOfPerson');
        $data["Arrivaldate"] = date("Y-m-d",strtotime($this->input->post('arrivaldate')));
        $data["Departuredate"] = date("Y-m-d",strtotime($this->input->post('departuredate')));
        $data["Arrivaltime"]=$this->input->post('arivalhr').":".$this->input->post('arivalmin')." ".$this->input->post('arivalap');
        $data["Departuretime"]=$this->input->post('departurehr').":".$this->input->post('departuremin')." ".$this->input->post('departureap');
        $data["Adult"] = $this->input->post('adult');
        $data["Children"] = $this->input->post('children');
        $data["Roomno"] = $this->input->post('roomno');
        $data["Days"] = $this->input->post('days');
        $data["Room_rent"] = $this->input->post('room_rent');
        $data["Room_rent_tax"] = $this->input->post('room_rent_tax');
        $data["Room_rent_tax_type"] = $this->input->post('room_rent_tax_type');
        $data["Room_rent_taxable_amount"] = $this->input->post('room_rent_taxable_amount');
        $data["Room_rent_with_taxable_amount"] = $this->input->post('room_rent_with_taxable_amount');
        $data["Food_bill"] = $this->input->post('food_bill');
        $data["Food_description"] = $this->input->post('food_description');
        $data["Food_tax"] = $this->input->post('food_tax');
        $data["Food_tax_type"] = $this->input->post('food_tax_type');
        $data["Comment"] = $this->input->post('comment');
        $data["Food_taxable_amount"] = $this->input->post('food_taxable_amount');
        $data["Food_total_with_tax"] = $this->input->post('food_total_with_tax');
        $data["Paymentmode"] = $this->input->post('paymentmode');
        $data["Grandtotal"] = $this->input->post('grandtotal');
        $data["Advance"] = $this->input->post('advance');
        $data["Commingfrom"] = $this->input->post('commingfrom');
        $data["customerGst"] = $this->input->post('customergstin');
        $data["Nationality"] = $this->input->post('nationality');
        $data["Age"] = $this->input->post('age');
       /* $data["ArrivalTotal"] = date("d-m-Y",strtotime($data["Arrivaldate"]." ".$data["Arrivaltime"]));
        $data["DepartureTotal"] = date("d-m-Y H:i",strtotime($data["Departuredate"]." ".$data["Departuretime"]));*/


        /*echo "<pre>";
        print_r($data);
        echo "</pre>";exit;*/
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        // retrieve data from model
        $data['title'] = "items";
        ini_set('memory_limit', '256M');
        // boost the memory limit if it's low ;)
        $html = $this->load->view('pages/bill', $data, true);
        // render the view into HTML
        $pdf->WriteHTML($html); // write the HTML into the PDF
        $output = 'bill/itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'F'); // save to file because we can
        $InsQry="update `customer_detail` set `bill_date`='".$data["BillDate"]."',`age`='".$data["Age"]."',`nationality`='".$data["Nationality"]."',`gst_no`='".$data["customerGst"]."',`comming_from`='".$data["Commingfrom"]."',`total_paid`='".$data["Grandtotal"]."',`payment_mode`='".$data["Paymentmode"]."',`food_discription`='".$data["Food_description"]."',`food_amount_with_tax`='".$data["Food_total_with_tax"]."',`food_tax_type`='".$data["Food_tax_type"]."',`food_tax`='".$data["Food_tax"]."',`food_bill`='".$data["Food_bill"]."',`room_amount_with_tax`='".$data["Room_rent_with_taxable_amount"]."',`room_tax_type`='".$data["Room_rent_tax_type"]."',`room_tax`='".$data["Room_rent_tax"]."',`full_name`='".$data["Name"]."', `room_rent`='".$data["Room_rent"]."', `no_of_days_stay`='".$data["Days"]."', `room_no`='".$data["Roomno"]."', `children`='".$data["Children"]."', `adult`='".$data["Adult"]."', `check_out_time`='".$data["Departuretime"]."', `check_out_date`='".$data["Departuredate"]."', `check_in_time`='".$data["Arrivaltime"]."', `check_in_date`='".$data["Arrivaldate"]."', `no_of_guest`='".$data["NoOfPerson"]."', `mobile`='".$data["Mobile"]."' ,`updated_by`='".$EntryUser."', `updated_at`='".$this->CurrentTime()."',`pdf_name`='".$output."' where uuid='".$Uuid."';";
        if($this->CommonModel->create($InsQry))
        {
            $this->_flashMessage(1,"Bill Genrated successfuly","error occure");;
        }
        else
        {
            //echo "error occure";
            $this->_flashMessage(0,"Bill Genrated successfuly","error occure");;
        }
        $pdf->Output("$output", 'D');

        return redirect('welcome-to-msd-visitor-list.jsp');
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