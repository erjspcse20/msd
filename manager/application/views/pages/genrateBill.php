<?php
$Check_in_time=isset($visitorData["check_in_time"])?explode(":",$visitorData["check_in_time"]):"";
$Checkinhr=($Check_in_time!="")?$Check_in_time[0]:"";
$Checkinmin1=($Check_in_time!="")?explode(" ",$Check_in_time[1]):"";
$Checkinmin=($Checkinmin1)?$Checkinmin1[0]:"";
$Checkinap=($Checkinmin1)?$Checkinmin1[1]:"";
$Check_out_time=isset($visitorData["check_out_time"])?explode(":",$visitorData["check_out_time"]):"";
$Checkouthr=($Check_out_time!="")?$Check_out_time[0]:"";
$Checkoutmin1=($Check_out_time!="")?explode(" ",$Check_out_time[1]):"";
$Checkoutmin=($Checkoutmin1)?$Checkoutmin1[0]:"";
$Checkoutap=($Checkoutmin1)?$Checkoutmin1[1]:"";
$Uuid=isset($visitorData["uuid"])?$visitorData["uuid"]:"";
$FullName=isset($visitorData["full_name"])?$visitorData["full_name"]:"";
$Room_no=isset($visitorData["room_no"])?$visitorData["room_no"]:"";
$Mobile=isset($visitorData["mobile"])?$visitorData["mobile"]:"";
$Age=isset($visitorData["age"])?$visitorData["age"]:"";
$Nationality=isset($visitorData["nationality"])?$visitorData["nationality"]:"";
$Comming_from=isset($visitorData["comming_from"])?$visitorData["comming_from"]:"";
$Going_to=isset($visitorData["going_to"])?$visitorData["going_to"]:"";
$No_of_guest=isset($visitorData["no_of_guest"])?$visitorData["no_of_guest"]:"";
$Check_in_date=isset($visitorData["check_in_date"])?$visitorData["check_in_date"]:"";
$Check_out_date=isset($visitorData["check_out_date"])?$visitorData["check_out_date"]:"";
$Advance=isset($visitorData["advance"])?$visitorData["advance"]:"";
$Refrance=isset($visitorData["refrance"])?$visitorData["refrance"]:"";
$Doc1=isset($visitorData["doc1"])?$visitorData["doc1"]:"";
$Doc2=isset($visitorData["doc2"])?$visitorData["doc2"]:"";
$Gst_no=isset($visitorData["gst_no"])?$visitorData["gst_no"]:"";
$Purpose=isset($visitorData["purpose"])?$visitorData["purpose"]:"";
$BillNo=isset($visitorData["bill_no"])?$visitorData["bill_no"]:"";
$No_of_days_stay=($visitorData["no_of_days_stay"]!=0)?$visitorData["no_of_days_stay"]:"";
$Adult=isset($visitorData["adult"])?$visitorData["adult"]:"";
$Children=isset($visitorData["children"])?$visitorData["children"]:"";
$Room_rent=($visitorData["room_rent"]!=0)?$visitorData["room_rent"]:"";
$Room_tax=isset($visitorData["room_tax"])?$visitorData["room_tax"]:"";
$Room_tax_type=isset($visitorData["room_tax_type"])?$visitorData["room_tax_type"]:"";
$Room_amount_with_tax=isset($visitorData["room_amount_with_tax"])?$visitorData["room_amount_with_tax"]:"";
$Food_bill=($visitorData["food_bill"]!=0)?$visitorData["food_bill"]:"";
$Food_tax=isset($visitorData["food_tax"])?$visitorData["food_tax"]:"";
$Food_tax_type=isset($visitorData["food_tax_type"])?$visitorData["food_tax_type"]:"";
$Food_amount_with_tax=isset($visitorData["food_amount_with_tax"])?$visitorData["food_amount_with_tax"]:"";
$Food_discription=isset($visitorData["food_discription"])?$visitorData["food_discription"]:"";
$Payment_mode=isset($visitorData["payment_mode"])?$visitorData["payment_mode"]:"";
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
<div class="forms-grids">
    <div class="w3agile-validation">
        <div class="panel panel-widget agile-validation">
            <div class="my-div">
                <form method="post" action="<?=base_url('msd-start-bill-save.jsp')?>" enctype="multipart/form-data" class="valida" autocomplete="off" novalidate="novalidate">
                    <input type="hidden" name="cid" id="cid" value="<?=$Uuid;?>"/>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Bill No.</label>
                            <div class="form-group">
                                <p><?=$BillNo?></p>
                                <input type="hidden" name="billno" id="billno" filter="billno" value="<?=$BillNo?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Bill Date</label>
                            <div class="form-group">
                                <input type="text" name="bill_date" id="bill_date" filter="bill_date" class="datepick form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Full Name </label>
                            <div class="form-group">
                                <input type="text" name="fullName" id="fullName"  value="<?=$FullName?>" filter="fullName" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Mobile No</label>
                            <div class="form-group">
                                <input type="text" name="mobileno" id="mobileno" value="<?=$Mobile?>" filter="mobileno" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Age</label>
                            <div class="form-group">
                                <input type="text" value="<?=$Age?>" name="age" id="age" filter="age" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Nationality </label>
                            <div class="form-group">
                                <input type="text" name="nationality" id="nationality" value="<?=$Nationality?>" filter="Nationality" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Coming From / Address</label>
                            <div class="form-group">
                                <input type="text" name="commingfrom" id="commingfrom" value="<?=$Comming_from;?>" filter="email" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">No. of Persons</label>
                            <div class="form-group">
                                <input type="text" name="noOfPerson" id="noOfPerson" filter="Persons" value="<?=$No_of_guest?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>



                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Arrival Date</label>
                            <div class="form-group">
                                <input type="text" name="arrivaldate" id="arrivaldate" value="<?=$Check_in_date?>" filter="Persons" class="datepick form-control" required="true" data-invalid="Must be a valid email address">
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
                                                for($d=0;$d<13;$d++) {
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
                                                for($d=0;$d<61;$d++) {
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
                                    <input type='text' name="departuredate" id="departuredate" value="<?=date("d-m-Y")?>" class="datepick form-control" />
                                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
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
                            <label for="field-1-2">Adult</label>
                            <div class="form-group">
                                <select name="adult" id="adult" required="true" class="form-control">
                                    <?php
                                    for($i=1;$i<21;$i++){
                                        ?>
                                        <option value="<?=$i;?>"><?=$i;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Children</label>
                            <div class="form-group">
                                <select name="children" id="children" required="true" class="form-control">
                                    <?php
                                    for($i=0;$i<21;$i++){
                                        ?>
                                        <option value="<?=$i;?>"><?=$i;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Room No. :</label>
                            <div class="form-group">
                                <input type="text" name="roomno" id="roomno" value="<?=$Room_no?>" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label for="field-1-2">Days</label>
                            <div class="form-group">
                                <input type="text" name="days" id="days" filter="days" value="<?=$No_of_days_stay;?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2>Room Rent</h2>
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Add Amount in INR. :</label>
                            <div class="form-group">
                                <input type="text" name="room_rent" id="room_rent" value="<?=$Room_rent?>" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Tax</label>
                            <div class="form-group">
                                <select name="room_rent_tax" id="room_rent_tax" required="true" class="form-control">
                                    <?php
                                    for($i=0;$i<24;$i++){
                                        ?>
                                        <option value="<?=$i;?>" <?=($Room_tax==$i)?"selected='selected'":""?>><?=$i;?>%</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Select GST</label>
                            <div class="form-group">
                                <select name="room_rent_tax_type" id="room_rent_tax_type" required="true" class="form-control">
                                    <option value="1" <?=($Room_tax_type=="1")?"selected='selected'":""?>>SGST & CGST</option>
                                    <option value="2" <?=($Room_tax_type=="2")?"selected='selected'":""?>>IGST</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Tax</label>
                            <div class="form-group">
                                <input type="text" disabled name="room_rent_taxable_amount_show"  id="room_rent_taxable_amount_show" filter="taxable_amount" value="<?=$Advance?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Calculated with gst</label>
                            <div class="form-group">
                                <input type="text" value="<?=$Room_amount_with_tax?>" disabled name="room_rent_with_taxable_amount_show" id="room_rent_with_taxable_amount_show" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2>Food Amount</h2>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Add Amount in INR. :</label>
                            <div class="form-group">
                                <input type="text" name="food_bill" value="<?=$Food_bill?>" id="food_bill" filter="Persons" class="numpoint form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <label for="field-1-2">Select food</label>
                            <div class="form-group">
                                <select class="selectdropdownsimple mdb-select md-form colorful-select dropdown-primary" multiple="multiple" name="food_discription[]" id="food_discription" searchable="Search here..">
                                    <option value="" disabled>SELECT MENU</option>

                                    <option value="CHHOLEY BHATUREY/"> CHHOLEY BHATUREY/</option>
                                    <option value="STUFFED PRANTHA/">STUFFED PRANTHA/</option>
                                    <option value="ONION PRANTHA/">ONION PRANTHA/</option>
                                    <option value="MIX VEG PRANTHA/">MIX VEG PRANTHA/</option>
                                    <option value="PANEER PRANTHA/">PANEER PRANTHA/</option>
                                    <option value="PLAIN RICE/">PLAIN RICE/</option>
                                    <option value="JEERA RICE/">JEERA RICE/</option>
                                    <option value="MUTTER PULAV/">MUTTER PULAV/</option>
                                    <option value="VEG PULAV/">VEG PULAV/</option>
                                    <option value="OMELETTE/">OMELETTE/</option>
                                    <option value="EGG BHUJJI/">EGG BHUJJI/</option>
                                    <option value="MAGGI..HALF/">MAGGI..HALF/</option>
                                    <option value="MAGGI..FULL/">MAGGI..FULL/</option>
                                    <option value="CHEESE BURGER/">CHEESE BURGER/</option>
                                    <option value="VEG. BURGER/">VEG. BURGER/</option>
                                    <option value="MANCHURIAN/">MANCHURIAN/</option>
                                    <option value="CHILLI PATATO/">CHILLI PATATO/</option>
                                    <option value="CHEESE CHILLE/">CHEESE CHILLE/</option>
                                    <option value="VEG. SPRING ROLL/">VEG. SPRING ROLL/</option>
                                    <option value="CHOWMEIN/">CHOWMEIN/</option>
                                    <option value="CHEESE CHOWMEIN/">CHEESE CHOWMEIN/</option>
                                    <option value="FINGURCHIPS/">FINGURCHIPS/</option>
                                    <option value="MOMOS/">MOMOS/</option>
                                    <option value="MACRONI/">MACRONI/</option>
                                    <option value="DAL HANDI/">DAL HANDI/</option>
                                    <option value="DAL MAKHNI/">DAL MAKHNI/</option>
                                    <option value="DAL FRY/">DAL FRY/</option>
                                    <option value="SHAHI PANNER/">SHAHI PANNER/</option>
                                    <option value="MUTTER PANEER/">MUTTER PANEER/</option>
                                    <option value="KADHAI PANEER/">KADHAI PANEER/</option>
                                    <option value="PANEER DO PYAJA/">PANEER DO PYAJA/</option>
                                    <option value="MUTTER MUSHROOM/">MUTTER MUSHROOM/</option>
                                    <option value="MUSHROOM DOPYAJA/">MUSHROOM DOPYAJA/</option>
                                    <option value="MALAL KOFTA/">MALAL KOFTA/</option>
                                    <option value="PALAK PANEER/">PALAK PANEER/</option>
                                    <option value="PANEER BHUJ1/">PANEER BHUJI/</option>
                                    <option value="CHANA MASALA/">CHANA MASALA/</option>
                                    <option value="PANEER BUTTER MASALA/">PANEER BUTTER MASALA/</option>
                                    <option value="CHOLEY CHAWAL/">CHOLEY CHAWAL/</option>
                                    <option value="ALOO JEERA/">ALOO JEERA/</option>
                                    <option value="PLAIN ROTI/">PLAIN ROTI/</option>
                                    <option value="BUTTER ROTI/">BUTTER ROTI/</option>
                                    <option value="MISSI ROTI/">MISSI ROTI/</option>
                                    <option value="ONION ROTI/">ONION ROTI/</option>
                                    <option value="PLAIN NAAN/">PLAIN NAAN/</option>
                                    <option value="BUTTER NAAN/">BUTTER NAAN</option>
                                    <option value="PLAIN RAITA/">PLAIN RAITA/</option>
                                    <option value="JEERA RAITA/">JEERA RAITA/</option>
                                    <option value="BOONDI RAITA/">BOONDI RAITA/</option>
                                    <option value="MIX VEG RAITA">MIX VEG RAITA/</option>
                                    <option value="ONION SALAD/">ONION SALAD/</option>
                                    <option value="GREEN SALAD/">GREEN SALAD/</option>
                                    <option value="PLAIN PAPAD/">PLAIN PAPAD/</option>
                                    <option value="MASALA PAPAD/">MASALA PAPAD/</option>
                                    <option value="PEANUTS MASALA/">PEANUTS MASALA/</option>
                                    <option value="CHANA CHAT/">CHANA CHAT/</option>
                                    <option value="VEG PAKORA/">VEG PAKORA/</option>
                                    <option value="TEA/">TEA/</option>
                                    <option value="COFFEE/">COFFEE/</option>
                                    <option value="GLOSS MILK/">/GLOSS MILK </option>
                                    <option value="SODA">SODA</option>
                                    <option value="BISLARI/">BISLARI/</option>
                                    <option value="COLD DRINK/">COLD DRINK/</option>

                                    <option value="MALAI CHAAP - HALF/">MALAI CHAAP . HALF/</option>
                                    <option value="AFAGANI CHAAP- HALF/">AFAGANI CHAAP. HALF/</option>
                                    <option value="MASALA CHAAP- HALF">MASALA CHAAP. HALF/</option>
                                    <option value="LEMON CHAAP- HALF/">LEMON CHAAP -  HALF/</option>
                                    <option value="HARIYALI CHAAP. HALF/">HARIYALI CHAAP - HALF/</option>
                                    <option value="STUFF CHAAP- HALF/">STUFF CHAAP - HALF/</option>
                                    <option value="PANNER TIKKA - HALF/">PANNER TIKKA - HALF/</option>

                                    <option value="MALAI CHAAP. FULL/">MALAI CHAAP. FULL/</option>
                                    <option value="AFAGANI CHAAP. FULL/">AFAGANI CHAAP- FULL/</option>
                                    <option value="MASALA CHAAP- FULL/">MASALA CHAAP- FULL/</option>
                                    <option value="LEMON CHAAP- FULL/">LEMON CHAAP - FULL/</option>
                                    <option value="HARIYALI CHAAP- FULL/">HARIYALI CHAAP - FULL/</option>
                                    <option value="STUFF CHAAP-FULL/">STUFF CHAAP- FULL/</option>
                                    <option value="PANNER TIKKA-FULL/">PANNER TIKKA- FULL/</option>

                                    <option value="HANDI CHICKEN - HALF/">HANDI CHICKEN - HALF/</option>
                                    <option value="CHICKEN MASALA-HALF/">CHICKEN MASALA- HALF/</option>
                                    <option value="EGG CURRY- HALF/">EGG CURRY- HALF/</option>
                                    <option value="EGG BIRYANI-HALF/">EGG BIRYANI..HALF/</option>
                                    <option value="CHICKEN BIRYANI-HALF/">CHICKEN BIRYANI.HALF/</option>
                                    <option value="LEMON CHICKEN-HALF/">LEMON CHICKEN. HALF/</option>
                                    <option value="BUTTER CHICKEN..HALF/">BUTTER CHICKEN..HALF/</option>
                                    <option value="CHICKEN ROGAN JUICE- HALF/">CHICKEN ROGAN JUICE- HALF/</option>
                                    <option value="CHICKEN RORA-  HALF/">CHICKEN RORA-  HALF/</option>
                                    <option value="PUNJABI CHICKEN-HALF/">PUNJABI CHICKEN..HALF/</option>
                                    <option value="KADAI CHICKEN -HALF/">KADAI CHICKEN -HALF/</option>
                                    <option value="CHICKEN CHILLI- HALF/">CHICKEN CHILLI- HALF/</option>

                                    <option value="HANDI CHICKEN -FULL /">HANDI CHICKEN -FULL/</option>
                                    <option value="CHICKEN MASALA- FULL/">CHICKEN MASALA-FULL/</option>
                                    <option value="EGG CURRY-FULL-150">EGG CURRY- FULL/</option>
                                    <option value="EGG BIRYANI-FULL /">EGG BIRYANI- FULL/</option>
                                    <option value="CHICKEN BIRYANI- FULL/">CHICKEN BIRYANI. FULL/</option>
                                    <option value="LEMON CHICKEN-FULL/">LEMON CHICKEN-FULL/</option>
                                    <option value="BUTTER CHICKEN-FULL/">BUTTER CHICKEN-FULL/</option>
                                    <option value="CHICKEN ROGAN -FULL/">CHICKEN ROGAN FULL/</option>
                                    <option value="CHICKEN RORA-FULL./">CHICKEN RORA..FULL/</option>
                                    <option value="PUNJABI CHICKEN-FULL/">PUNJABI CHICKEN-FULL/</option>
                                    <option value="KADAI CHICKEN -FULL/">KADAI CHICKEN -FULL/</option>
                                    <option value="CHICKEN CHILLI -FULL/">CHICKEN CHILLI -FULL/</option>


                                    <option value="CHICKEN MANCHURIAN-FULL/">CHICKEN MANCHURIAN-FULL/</option>
                                    <option value="CHICKEN PAKORA-FULL/">CHICKEN PAKORA-FULL/</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-1">

                            <label for="field-1-2">Tax</label>
                            <div class="form-group">
                                <select name="food_tax" id="food_tax" required="true" class="form-control">
                                    <?php
                                    for($i=0;$i<21;$i++){
                                        ?>
                                        <option value="<?=$i;?>" <?=($Food_tax==$i)?"selected='selected'":""?>><?=$i;?>%</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Select GST</label>
                            <div class="form-group">
                                <select name="food_tax_type" id="food_tax_type" required="true" class="form-control">
                                    <option value="1" <?=($Food_tax_type=="1")?"selected='selected'":""?>>SGST & Cgst</option>
                                    <option value="2" <?=($Food_tax_type=="2")?"selected='selected'":""?>>IGST</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Tax</label>
                            <div class="form-group">
                                <input type="text" name="food_taxable_amount_show" id="food_taxable_amount_show" value="" disabled filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Calculated with gst</label>
                            <div class="form-group">
                                <input type="text" name="food_total_with_tax_show" disabled value="<?=$Food_amount_with_tax?>" id="food_total_with_tax_show" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Amount in word</label>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>												</div>

                        </div>
                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Mode of payment</label>
                            <div class="form-group">
                                <select name="paymentmode" id="paymentmode" required="true" class="form-control">
                                    <option value="">Select Payment Type</option>
                                    <option value="CASH" <?=($Payment_mode=="CASH")?"selected='selected'":""?>>Cash</option>
                                    <option value="PAYTM" <?=($Payment_mode=="PAYTM")?"selected='selected'":""?>>Paytm</option>
                                    <option value="DEBITCREDITCARD" <?=($Payment_mode=="DEBITCREDITCARD")?"selected='selected'":""?>>Debit/creadit</option>
                                    <option value="ONLINEWEBSITE" <?=($Payment_mode=="ONLINEWEBSITE")?"selected='selected'":""?>>Online/Website</option>
                                    <option value="CHECK" <?=($Payment_mode=="CHECK")?"selected='selected'":""?>>Cheque</option>
                                    <option value="BANKTOBANK" <?=($Payment_mode=="BANKTOBANK")?"selected='selected'":""?>>Bank to Bank</option>
                                    <option value="OTHER" <?=($Payment_mode=="OTHER")?"selected='selected'":""?>>Other</option>

                                </select>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-2">

                            <label for="field-1-2">Advance Received</label>
                            <div class="form-group">
                                <input type="text" disabled name="advanceshow" id="advanceshow" filter="advanceshow" value="<?=$Advance?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6">

                            <label for="field-1-2">Costomer GSTIN Number</label>
                            <div class="form-group">
                                <input type="text" name="customergstin" id="customergstin" maxlength="15" filter="customergstin" value="<?=$Gst_no?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                            </div>

                        </div>
                        <input type="hidden" name="food_total_with_tax" value="<?=$Food_amount_with_tax?>" id="food_total_with_tax" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                        <input type="hidden" name="food_taxable_amount" id="food_taxable_amount" value="" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                        <input type="hidden" value="<?=$Room_amount_with_tax?>" name="room_rent_with_taxable_amount" id="room_rent_with_taxable_amount" filter="Persons" class="form-control" required="true" data-invalid="Must be a valid email address">
                        <input type="hidden" name="room_rent_taxable_amount"  id="room_rent_taxable_amount" filter="taxable_amount" value="<?=$Advance?>" class="form-control" required="true" data-invalid="Must be a valid email address">
                        <input type='hidden' id="departuretime" name="departuretime" value="<?=date("H:i A")?>" class="form-control" />
                        <input type="hidden" name="grandtotal" id="grandtotal" value=""/>
                        <input type="hidden" disabled name="advance" id="advance" filter="advance" value="<?=$Advance?>" class="form-control">
                    </div>

                    <hr>
                    <h2 align="right">TOTAL AMOUNT <span>Rs. <strong id="total"><?=$Advance?></strong></span></h2><br/>
                    <h2 align="right">Advance Recived amount <span>Rs. <strong id="adv"><?=$Advance?></strong></span></h2><br/>
                    <h2 align="right">Payable AMOUNT <span>Rs. <strong id="payable">0</strong></span></h2><br/>
                    <hr>


                    <p>
                        <input type="submit" id="print_bill" name="print_bill" id="print_bill" value="Print bill" class="btn btn-danger">

                    </p>
                </form>

            </div>
        </div>
    </div>


    <div class="clearfix"> </div>
</div>
</body>
</html>
<script>
    $(".selectdropdownsimple").select2();
    function calculatetotal(bill,tax,taxtype){
        let taxcalculated=0;
        let billed = isNaN(bill)?0:parseFloat(bill);
        //let advanced = isNaN(advance)?0:parseFloat(advance);
        let taxed = isNaN(tax)?0:parseFloat(tax);
        let taxedtype = isNaN(taxtype)?0:parseFloat(taxtype);
        //let taxableval = billed + advanced;
        //console.log(taxableval * parseFloat(tax));
        if(taxedtype==1){
            let cgst =(billed * taxed) / (2*100);
            let sgst =(billed * taxed) / (2*100);
            taxcalculated=(cgst + sgst);
            //console.log(taxcalculated);

        }else if(taxedtype==2){
            taxcalculated=(billed + advanced)* taxed / 100;
        }
        //console.log(taxcalculated);
        return taxcalculated;
    }
    $("#food_bill").keyup(function () {
        let foodbill=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let foodtax=isNaN(parseFloat($("#food_tax").val()))?0:parseFloat($("#food_tax").val());
        let taxtype=isNaN(parseFloat($("#food_tax_type").val()))?0:parseFloat($("#food_tax_type").val());
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());;
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#food_taxable_amount").val(tax);
        $("#food_total_with_tax").val(tax+foodbill);
        $("#food_taxable_amount_show").val(tax);
        $("#food_total_with_tax_show").val(tax+foodbill);
        let roomtotal =isNaN(parseFloat($("#room_rent_with_taxable_amount").val()))?0:parseFloat($("#room_rent_with_taxable_amount").val());
        let total = tax+foodbill + roomtotal;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    $("#room_rent").keyup(function () {
        let foodbill=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let foodtax=isNaN(parseFloat($("#room_rent_tax").val()))?0:parseFloat($("#room_rent_tax").val());
        let taxtype=isNaN(parseFloat($("#room_rent_tax_type").val()))?0:parseFloat($("#room_rent_tax_type").val());
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#room_rent_taxable_amount").val(tax);
        $("#room_rent_with_taxable_amount").val(tax+foodbill);
        $("#room_rent_taxable_amount_show").val(tax);
        $("#room_rent_with_taxable_amount_show").val(tax+foodbill);
        let foodtotal =isNaN(parseFloat($("#food_total_with_tax").val()))?0:parseFloat($("#food_total_with_tax").val());
        let total =foodtotal + tax+foodbill;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    /* $("#advance").keyup(function () {
         let foodbill=isNaN(parseFloat($("#room_rent").val))?0:parseFloat(this.value);
         let foodtax=isNaN(parseFloat($("#room_rent_tax").val()))?0:parseFloat($("#room_rent_tax").val());
         let taxtype=isNaN(parseFloat($("#room_rent_tax_type").val()))?0:parseFloat($("#room_rent_tax_type").val());
         let advance=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
         let tax = calculatetotal(foodbill,foodtax,taxtype);
         $("#room_rent_taxable_amount").val(tax);
         $("#room_rent_with_taxable_amount").val(tax+foodbill);
         $("#room_rent_taxable_amount_show").val(tax);
         $("#room_rent_with_taxable_amount_show").val(tax+foodbill);
         let foodtotal =isNaN(parseFloat($("#food_total_with_tax").val()))?0:parseFloat($("#food_total_with_tax").val());
         let total =foodtotal + tax+foodbill;
         $("#grandtotal").val(total);
         $("#total").html(total);
         $("#payable").html(total-advance);
     });*/
    $("#food_tax_type").change(function () {
        let foodbill=isNaN(parseFloat($("#food_bill").val()))?0:parseFloat($("#food_bill").val());
        let foodtax=isNaN(parseFloat($("#food_tax").val()))?0:parseFloat($("#food_tax").val());
        let taxtype=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#food_taxable_amount").val(tax);
        $("#food_total_with_tax").val(tax+foodbill);
        $("#food_taxable_amount_show").val(tax);
        $("#food_total_with_tax_show").val(tax+foodbill);
        let roomtotal =isNaN(parseFloat($("#room_rent_with_taxable_amount").val()))?0:parseFloat($("#room_rent_with_taxable_amount").val());
        let total = tax+foodbill+roomtotal;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    $("#room_rent_tax_type").change(function () {
        let foodbill=isNaN(parseFloat($("#room_rent").val()))?0:parseFloat($("#room_rent").val());
        let foodtax=isNaN(parseFloat($("#room_rent_tax").val()))?0:parseFloat($("#room_rent_tax").val());
        let taxtype=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#room_rent_taxable_amount").val(tax);
        $("#room_rent_with_taxable_amount").val(tax+foodbill);
        $("#room_rent_taxable_amount_show").val(tax);
        $("#room_rent_with_taxable_amount_show").val(tax+foodbill);
        let foodtotal =isNaN(parseFloat($("#food_total_with_tax").val()))?0:parseFloat($("#food_total_with_tax").val());
        let total =foodtotal + tax+foodbill;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    $("#food_tax").change(function () {
        let foodbill=isNaN(parseFloat($("#food_bill").val()))?0:parseFloat($("#food_bill").val());
        let foodtax=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let taxtype=isNaN(parseFloat($("#food_tax_type").val()))?0:parseFloat($("#food_tax_type").val());
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#food_taxable_amount").val(tax);
        $("#food_total_with_tax").val(tax+foodbill);
        $("#food_taxable_amount_show").val(tax);
        $("#food_total_with_tax_show").val(tax+foodbill);
        let roomtotal =isNaN(parseFloat($("#room_rent_with_taxable_amount").val()))?0:parseFloat($("#room_rent_with_taxable_amount").val());
        let total = tax+foodbill + roomtotal;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    $("#room_rent_tax").change(function () {
        let foodbill=isNaN(parseFloat($("#room_rent").val()))?0:parseFloat($("#room_rent").val());
        let foodtax=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
        let taxtype=isNaN(parseFloat($("#room_rent_tax_type").val()))?0:parseFloat($("#room_rent_tax_type").val());
        let advance=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
        let tax = calculatetotal(foodbill,foodtax,taxtype);
        $("#room_rent_taxable_amount").val(tax);
        $("#room_rent_with_taxable_amount").val(tax+foodbill);
        $("#room_rent_taxable_amount_show").val(tax);
        $("#room_rent_with_taxable_amount_show").val(tax+foodbill);
        let foodtotal =isNaN(parseFloat($("#food_total_with_tax").val()))?0:parseFloat($("#food_total_with_tax").val());
        let total =foodtotal + tax+foodbill;
        $("#grandtotal").val(total);
        $("#total").html(total);
        $("#payable").html(total-advance);
    });
    $('.datepick').Zebra_DatePicker({
        format: 'd-m-Y'
    });
    $(".numpoint").keypress(function(e) {
        let num=$(this).val();
        if(num.length>7)
        {
            return false;
        }
        if(e.charCode<46 || e.charCode>58)
        {
            return false;
        }
    });
    let roombill=isNaN(parseFloat($("#room_rent").val()))?0:parseFloat($("#room_rent").val());
    let roomtax=isNaN(parseFloat($("#room_rent_tax").val()))?0:parseFloat($("#room_rent_tax").val());
    let roomtaxtype=isNaN(parseFloat($("#room_rent_tax_type").val()))?0:parseFloat($("#room_rent_tax_type").val());
    let advanceroom=isNaN(parseFloat($("#advance").val()))?0:parseFloat($("#advance").val());
    let taxroom = calculatetotal(roombill,roomtax,roomtaxtype);
    $("#room_rent_taxable_amount").val(taxroom);
    $("#room_rent_with_taxable_amount").val(taxroom+roombill);
    $("#room_rent_taxable_amount_show").val(taxroom);
    $("#room_rent_with_taxable_amount_show").val(taxroom+roombill);

    let foodbill=isNaN(parseFloat($("#food_bill").val()))?0:parseFloat($("#food_bill").val());
    let foodtax=isNaN(parseFloat($("#food_tax").val()))?0:parseFloat($("#food_tax").val());
    let foodtaxtype=isNaN(parseFloat(this.value))?0:parseFloat(this.value);
    let advancefood=0;
    let taxfood = calculatetotal(foodbill,foodtax,foodtaxtype);
    $("#food_taxable_amount").val(taxfood);
    $("#food_total_with_tax").val(taxfood+foodbill);
    $("#food_taxable_amount_show").val(taxfood);
    $("#food_total_with_tax_show").val(taxfood+foodbill);
    let total =roombill + taxroom + foodbill + taxfood;
    $("#grandtotal").val(total);
    $("#total").html(total);
    $("#payable").html(total-advanceroom);
    $("#print_bill").click(function () {
        if($("#customergstin").val()!=""){
            if($("#customergstin").val().length!=15){
                alert("GSTIN No must have length 15 character");
                return false;
            }

        }
    })
</script>