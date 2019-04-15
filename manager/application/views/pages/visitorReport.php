<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.12/css/bootstrap/zebra_datepicker.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.12/zebra_datepicker.src.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>

<body>
<div class="main-grid">
    <div class="agile-grids">
        <div class="w3l-table-info">
            <div class="table-heading">
                <h2>Visitors</h2>
            </div>
            <p align="center" style="color:#F00;">
                <?php if($msg=$this->session->flashdata('feedback')): ?>

                    <strong style="color:#F00">
                        <?=$msg?>
                    </strong>

                <?php endif; ?>
            </p>
            <div class="row" style="padding-bottom: 4%;">

                <form method="post" action="<?=base_url('welcome-to-msd-visitor-report.jsp')?>" class="valida" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">From Date </label>
                            <div class="form-group">
                                <input type='text' class="datepick form-control" value="<?=date("d-m-Y",strtotime($FromDate))?>" name="fromdate" id="fromdate"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">To Date </label>
                            <div class="form-group">
                                <input type='text' class="datepick form-control" value="<?=date("d-m-Y",strtotime($ToDate))?>" name="todate" id="todate"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Reference from</label>
                            <div class="form-group">
                                <select name="refrence" id="refrence" required="true" class="selectdropdownsimple form-control">
                                    <option value=""></option>
                                    <option value="Grand_Hotal" <?=($Refrance=="Grand_Hotal")?"selected='selected'":"";?>>Grand Hotal (door to door)</option>
                                    <option value="Goibibo" <?=($Refrance=="Goibibo")?"selected='selected'":"";?>>   Goibibo</option>
                                    <option value="Make_my_trip" <?=($Refrance=="Make_my_trip")?"selected='selected'":"";?>>Make my trip</option>
                                    <option value="Just_dial" <?=($Refrance=="Just_dial")?"selected='selected'":"";?>>Just dial</option>
                                    <option value="OYO" <?=($Refrance=="OYO")?"selected='selected'":"";?>>OYO</option>
                                    <option value="Yatra" <?=($Refrance=="Yatra")?"selected='selected'":"";?>>Yatra</option>
                                    <option value="Booking.com" <?=($Refrance=="Booking.com")?"selected='selected'":"";?>>Booking.com</option>
                                    <option value="Website" <?=($Refrance=="Website")?"selected='selected'":"";?>>Website</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2"></label>
                            <div class="form-group">
                                <input type='submit' class="btn btn-primary" value="Show" name="showdata" id="showdata"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <h2>Total revenu: <?=$sumrevenu["totalRevenu"]?></h2>
                <table id="datatable" class="table table-striped table-bordered table-hover table-responsive t">
                    <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Edit </th>
                        <th>Genrate Bill </th>
                        <th>Room No.</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Age</th>
                        <th>Nationality </th>
                        <th>Coming From</th>
                        <th>Going to</th>
                        <th>No. of Persons</th>
                        <th>Purpose</th>
                        <th>Reference from</th>
                        <th>Date/time of arrival </th>
                        <th>Date/time of Departure </th>
                        <th>Number Of days stayed </th>
                        <th>Advance if any</th>
                        <th>Total amount</th>
                        <th>Gst No</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i=0;$i<count($visitorData);$i++)
                    {
                        ?>
                        <tr>
                            <td><?=($i+1);?></td>
                            <td><a href="<?=base_url('welcome-to-msd-edit-visitor.jsp/'.$visitorData[$i]["uuid"])?>" style="font-size:20px;" name="ed"><i class="fa fa-pencil-square-o fa-fw"></i></i></a></td>
                            <td><a href="<?=base_url('msd-start-bill.jsp/'.$visitorData[$i]["uuid"])?>" style="font-size:20px;" name="ed"><i class="fa fa-pencil-square-o fa-fw"></i></i></a></td>
                            <td><?=$visitorData[$i]["room_no"];?></td>
                            <td><?=$visitorData[$i]["full_name"];?></td>
                            <td><?=$visitorData[$i]["mobile"];?></td>
                            <td><?=$visitorData[$i]["age"];?></td>
                            <td><?=$visitorData[$i]["nationality"];?></td>
                            <td><?=$visitorData[$i]["comming_from"];?></td>
                            <td><?=$visitorData[$i]["going_to"];?></td>
                            <td><?=$visitorData[$i]["no_of_guest"];?></td>
                            <td><?=$visitorData[$i]["purpose"];?></td>
                            <td><?=$visitorData[$i]["refrance"];?></td>
                            <td><?=date("d M Y",strtotime($visitorData[$i]["check_in_date"]))." ".$visitorData[$i]["check_in_time"];?></td>
                            <td><?=date("d M Y",strtotime($visitorData[$i]["check_out_date"]))." ".$visitorData[$i]["check_out_time"];?></td>
                            <td><?=$visitorData[$i]["no_of_days_stay"];?></td>
                            <td><?=$visitorData[$i]["advance"];?></td>
                            <td><?=$visitorData[$i]["advance"]+$visitorData[$i]["paid_amount_last"];?></td>
                            <td><?=$visitorData[$i]["gst_no"];?></td>

                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(".selectdropdownsimple").select2();
    $("#datatable").DataTable({
        dom: "<'row'<'col-sm-3'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
        "lengthMenu": [[30, 60, 100, -1], [30, 60, 100, "All"]],
        buttons: [
        ]
    });
    $('.datepick').Zebra_DatePicker({
        direction: true,
        format: 'd-m-Y'
    });
</script>