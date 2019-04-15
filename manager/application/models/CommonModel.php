<?php
class CommonModel extends CI_Model
{
    public function create($Qry)
    {
        $this->db->trans_start();
        $this->db->query($Qry);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return 0;
            // generate an error... or use the log_message() function to log your error
        }
        else
        {
            return 1;
        }
    }
    public function createmultiquery($Qry)
    {
        $this->db->trans_start();
        for($i=0;$i<count($Qry);$i++)
        {
            $this->db->query($Qry[$i]);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return 0;
            // generate an error... or use the log_message() function to log your error
        }
        else
        {
            return 1;
        }
    }
    public function createprepare($Qry,$arr)
    {
        $this->db->trans_start();
        $this->db->query($Qry, $arr);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return 0;
            // generate an error... or use the log_messae() function to log your error
        }
        else
        {
            return 1;
        }
    }
    public function ExecuteDirectQry($Qry,$row=0)
    {
        $res=$this->db->query($Qry);
        $datarr=array();
        if ($res)
        {
            $datarr=($row==0)?$res->result_array():$res->row_array();
        }

        return $datarr;
    }
}
?>