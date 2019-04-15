<?php
$Uuid=isset($visitorDataEdit["uuid"])?$visitorDataEdit["uuid"]:"";
$FullName=isset($visitorDataEdit["full_name"])?$visitorDataEdit["full_name"]:"";
$Room_no=isset($visitorDataEdit["room_no"])?$visitorDataEdit["room_no"]:"";
$Mobile=isset($visitorDataEdit["mobile"])?$visitorDataEdit["mobile"]:"";
$Age=isset($visitorDataEdit["age"])?$visitorDataEdit["age"]:"";
$Nationality=isset($visitorDataEdit["nationality"])?$visitorDataEdit["nationality"]:"";
$Comming_from=isset($visitorDataEdit["comming_from"])?$visitorDataEdit["comming_from"]:"";
$Going_to=isset($visitorDataEdit["going_to"])?$visitorDataEdit["going_to"]:"";
$Check_in_time=isset($visitorDataEdit["check_in_time"])?explode(":",$visitorDataEdit["check_in_time"]):"";
$Checkinhr=($Check_in_time!="")?$Check_in_time[0]:"";
$Checkinmin1=($Check_in_time!="")?explode(" ",$Check_in_time[1]):"";
$Checkinmin=($Checkinmin1)?$Checkinmin1[0]:"";
$Checkinap=($Checkinmin1)?$Checkinmin1[1]:"";
$Check_out_time=isset($visitorDataEdit["check_out_time"])?explode(":",$visitorDataEdit["check_out_time"]):"";
$Checkouthr=($Check_out_time!="")?$Check_out_time[0]:"";
$Checkoutmin1=($Check_out_time!="")?explode(" ",$Check_out_time[1]):"";
$Checkoutmin=($Checkoutmin1)?$Checkoutmin1[0]:"";
$Checkoutap=($Checkoutmin1)?$Checkoutmin1[1]:"";
$No_of_guest=isset($visitorDataEdit["no_of_guest"])?$visitorDataEdit["no_of_guest"]:"";
$Check_in_date=isset($visitorDataEdit["check_in_date"])?$visitorDataEdit["check_in_date"]:"";
$Check_out_date=isset($visitorDataEdit["check_out_date"])?$visitorDataEdit["check_out_date"]:"";
$Advance=isset($visitorDataEdit["advance"])?$visitorDataEdit["advance"]:"";
$Refrance=isset($visitorDataEdit["refrance"])?$visitorDataEdit["refrance"]:"";
$Room_no=isset($visitorDataEdit["room_no"])?$visitorDataEdit["room_no"]:"";
$Doc1=isset($visitorDataEdit["doc1"])?$visitorDataEdit["doc1"]:"";
$Doc2=isset($visitorDataEdit["doc2"])?$visitorDataEdit["doc2"]:"";
$Gst_no=isset($visitorDataEdit["gst_no"])?$visitorDataEdit["gst_no"]:"";
$Purpose=isset($visitorDataEdit["purpose"])?$visitorDataEdit["purpose"]:"";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.12/css/bootstrap/zebra_datepicker.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Zebra_datepicker/1.9.12/zebra_datepicker.src.js"></script>
</head>

<body>
<div class="main-grid">
    <div class="grids">
        <div class="progressbar-heading grids-heading">
            <h2><?=($Uuid=="")?"Add Visitors":"Edit Visitor"?></h2>
        </div>
        <p align="center" style="color:#F00;">
            <?php if($msg=$this->session->flashdata('feedback')): ?>

                <strong style="color:#F00">
                    <?=$msg?>
                </strong>

            <?php endif; ?>
        </p>
        <div class="forms-grids">
            <div class="w3agile-validation">
                <div class="panel panel-widget agile-validation">
                    <div class="my-div">
                        <form method="post" action="<?=($Uuid=="")?base_url('welcome-to-msd-visitor-save.jsp'):base_url('welcome-to-msd-visitor-update.jsp')?>" class="valida" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
                            <input type="hidden" name="datauser" id="datauser" value="<?=$Uuid?>"/>
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Full Name </label>
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname" value="<?=$FullName;?>" class="form-control" required="true" placeholder="Enter Name" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Mobile No</label>
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="mobile" class="form-control"  value="<?=$Mobile;?>" required="true" placeholder="Enter Mobile No" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Age</label>
                                    <div class="form-group">
                                        <input type="text" name="age" id="age" class="form-control numpoint" value="<?=$Age;?>" placeholder="Enter Age" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Nationality </label>
                                    <div class="form-group">
                                        <input type="text" name="nationality" id="nationality" value="<?=$Nationality;?>" filter="Nationality" class="form-control" placeholder="Enter Nationality" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Coming From</label>
                                    <div class="form-group">
                                        <input type="text" name="commingfrom" id="commingfrom" value="<?=$Comming_from;?>" filter="commingfrom" class="form-control" placeholder="Comming From" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Going to</label>
                                    <div class="form-group">
                                        <input type="text" name="goingto" id="goingto" value="<?=$Going_to;?>" filter="goingto" class="form-control" placeholder="Enter Going To" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Purpose </label>
                                    <div class="form-group">
                                        <input type="text" name="purpose" id="purpose" value="<?=$Purpose;?>" filter="Persons" class="form-control" placeholder="Enter Purpose" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Advance if any</label>
                                    <div class="form-group">
                                        <input type="text" name="advance" id="advance" value="<?=$Advance;?>" filter="advance" class="form-control numpoint" placeholder="Advance" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">No. of Persons</label>
                                    <div class="form-group">
                                        <input type="text" name="noofperson" id="noofperson" value="<?=$No_of_guest;?>" filter="noofperson" class="form-control" placeholder="No Of Person" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">

                                    <label for="field-1-2">Arrival Date</label>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="datepick form-control" value="<?=date("d-m-Y",strtotime($Check_in_date));?>" name="arrivaldate" id="arrivaldate"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Arrival Time</label>
                                    <div class="form-group">
                                        <div class='row'>
                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <select name="arivalhr" id="arivalhr" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="" <?=($Checkinhr=="")?"selected='selected'":"";?>>HH</option>
                                                        <?php
                                                        for($d=0;$d<12;$d++) {
                                                            ?>
                                                            <option value="<?=$d?>" <?=($Checkinhr==$d)?"selected='selected'":"";?>><?=$d?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="arivalmin" id="arivalmin" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="" <?=($Checkinmin=="")?"selected='selected'":"";?>>MM</option>
                                                        <?php
                                                        for($d=0;$d<12;$d++) {
                                                            ?>
                                                            <option value="<?=$d?>" <?=($Checkinmin==$d)?"selected='selected'":"";?>><?=$d?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="arivalap" id="arivalap" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="am" <?=($Checkinap=="am")?"selected='selected'":"";?>>AM</option>
                                                        <option value="pm" <?=($Checkinap=="pm")?"selected='selected'":"";?>>PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Departure  Date</label>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="datepick form-control" value="<?=date("d-m-Y",strtotime($Check_out_date));?>" name="departuredate" id="departuredate"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <label for="field-1-2">Departure  Time</label>
                                    <div class="form-group">
                                        <div class='row'>
                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <select name="departurehr" id="departurehr" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="" <?=($Checkouthr=="")?"selected='selected'":"";?>>HH</option>
                                                        <?php
                                                        for($d=0;$d<12;$d++) {
                                                            ?>
                                                            <option value="<?=$d?>" <?=($Checkouthr==$d)?"selected='selected'":"";?>><?=$d?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="departuremin" id="departuremin" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="" <?=($Checkoutmin=="")?"selected='selected'":"";?>>MM</option>
                                                        <?php
                                                        for($d=0;$d<12;$d++) {
                                                            ?>
                                                            <option value="<?=$d?>" <?=($Checkoutmin==$d)?"selected='selected'":"";?>><?=$d?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="departureap" id="departureap" style="width: 100%!important;" class="selectdropdownsimple">
                                                        <option value="am" <?=($Checkoutap=="am")?"selected='selected'":"";?>>AM</option>
                                                        <option value="pm" <?=($Checkoutap=="pm")?"selected='selected'":"";?>>PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">

                                    <label for="field-1-2">Customer Gst</label>
                                    <div class="form-group">
                                        <input type="text" name="customerGst" id="customerGst" value="<?=$Gst_no;?>" filter="customerGst" class="form-control" placeholder="Customer Gst No" required="true" data-invalid="Must be a valid email address">
                                    </div>
                                </div>
                            </div>

                            <div class="input-info">
                                <h3>Documents</h3>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <input type='file' name="doc1" id="doc1" onchange="readURL(this);" />
                                    <img id="imgshowdoc1" width="100" height="100" name="" src="<?=($Doc1!="")?base_url('upload/'.$Doc1):base_url('assets/images/logo.png');?>" alt="your image" />
                                    <input type="hidden" name="oldimg1" id="oldimg1" value="<?=$Doc1?>"/>
                                </div>

                                <div class="col-md-6">
                                    <input type='file' id="doc2" name="doc2" onchange="readURL(this);" />
                                    <img id="imgshowdoc2" width="100" height="100" src="<?=($Doc1!="")?base_url('upload/'.$Doc2):base_url('assets/images/logo.png');?>" alt="your image" />
                                    <input type="hidden" name="oldimg2" id="oldimg2" value="<?=$Doc2?>"/>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-4">



                                <h4>Reference from :</h4>
                                <div class="form-group">
                                    <select name="refrence" id="refrence" required="true" class=" form-control">
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
                            <div class="col-xs-12 col-sm-4">



                                <h4>Room No. :</h4>
                                <div class="form-group">
                                    <select name="roomno" id="roomno" required="true" class="selectdropdownsimple form-control">
                                        <option value="">Room No</option>
                                        <option value=""></option>
                                        <option value="201" <?=($Room_no=="201")?"selected='selected'":"";?>>201 - Saver Room </option>
                                        <option value="202" <?=($Room_no=="202")?"selected='selected'":"";?>>202 - Saver Room </option>
                                        <option value="204" <?=($Room_no=="204")?"selected='selected'":"";?>>204 - Saver Room </option>
                                        <option value="200" <?=($Room_no=="200")?"selected='selected'":"";?>>200 - Classic Room </option>
                                        <option value="203" <?=($Room_no=="203")?"selected='selected'":"";?>>203 - Classic Room </option>
                                        <option value="205" <?=($Room_no=="205")?"selected='selected'":"";?>>205 - Classic Room </option>
                                        <option value="206" <?=($Room_no=="206")?"selected='selected'":"";?>>206 - Classic Room </option>
                                        <option value="207" <?=($Room_no=="207")?"selected='selected'":"";?>>207 - Classic Room </option>
                                        <option value="208" <?=($Room_no=="208")?"selected='selected'":"";?>>208 - Classic Room </option>
                                        <option value="209" <?=($Room_no=="209")?"selected='selected'":"";?>>209 - Classic Room </option>
                                        <option value="210" <?=($Room_no=="210")?"selected='selected'":"";?>>210 - Classic Room </option>
                                        <option value="211" <?=($Room_no=="211")?"selected='selected'":"";?>>211 - Classic Room </option>
                                        <option value="212" <?=($Room_no=="212")?"selected='selected'":"";?>>212 - Classic Room </option>
                                        <option value="102" <?=($Room_no=="102")?"selected='selected'":"";?>>102 - Super Dulex Room</option>
                                        <option value="103" <?=($Room_no=="103")?"selected='selected'":"";?>>103 - Super Dulex Room</option>
                                        <option value="104" <?=($Room_no=="104")?"selected='selected'":"";?>>104 - Super Dulex Room</option>
                                        <option value="105" <?=($Room_no=="105")?"selected='selected'":"";?>>105 - Super Dulex Room</option>
                                        <option value="106" <?=($Room_no=="106")?"selected='selected'":"";?>>106 - Super Dulex Room</option>
                                        <option value="101" <?=($Room_no=="101")?"selected='selected'":"";?>>101 -  Super Dulex Single Room</option>
                                    </select>

                                </div>

                            </div>


                            <hr>


                            <p>
                                <input type="submit" name="save" id="save" value="<?=($Uuid=="")?"Save":"Update"?>" class="btn btn-primary">

                            </p>
                        </form>

                    </div>
                </div>
            </div>


            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(".selectdropdownsimple").select2();
    $('.datepick').Zebra_DatePicker({
        direction: true,
        format: 'd-m-Y'
    });
    $(".numpoint").keypress(function(e) {
        var num=$(this).val();
        if(num.length>7)
        {
            return false;
        }
        if(e.charCode<46 || e.charCode>58)
        {
            return false;
        }
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgshow').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
