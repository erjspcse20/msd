<html">

<head>
</head>

<body>
<table width="1100" style="border:1px solid #333333;" cellspacing="0" cellpadding="0" align="center" >

    <tr>
        <td style="height:30px; border-bottom:1px solid;" valign="top">
            <p style="margin-left: 250px;"><img height="100" width="150"  src="<?=base_url('assets')?>/images/logo.png" alt="" /></p>
        </td>
    </tr>
    <tr>
        <td style="height:30px; border-bottom:1px solid;" valign="top">
            <h1 style="text-align:center; font-weight:bolder; text-transform:uppercase; margin-top:3px; margin-bottom:3px;"><b>Tax Invoice</b></h1>
        </td>
    </tr>

    <tr>
        <td style="height:60px;" valign="top">

            <table width="1100px" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="550" style="height:60px; border-right:1px solid;">
                        <p style="font-size:25px; font-weight:bolder; text-align:center;">HOTEL GRAND INN</p>
                        <p style="font-size:14px; text-align:center">restaurants & party hall</p>
                    </td>
                    <td width="550" style="height:60px;" valign="top">
                        <p style="text-align:center; font-weight:bold; margin-bottom:0px; margin-top:4px;">Gulab Singh Chowk, Near Bus Stand , City Thana Road , </p>
                        <p style="text-align:center; font-weight:bold; margin-top:4px; margin-bottom:0px;">Hisar, Haryana 125001 ( INDIA)</p>
                        <p style="text-align:center; font-weight:bold; margin-bottom:0px; margin-top:4px;"><i class="fa fa-phone" aria-hidden="true"></i>+91 9355556661, 9354446661</p>
                        <p style="text-align:center; font-weight:bold;  margin-top:4px; margin-bottom:4px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@msdbooking.com | <i class="fa fa-globe" aria-hidden="true"></i> www.msdbooking.com</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td width="1100">
            <table width="1100" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="550" style="border-top:1px solid; height:100px; border-right:1px solid; padding-left:10px;" valign="top">
                        <!-- Invoice Details -->
                        <table>
                            <tr>
                                <td style="height:25px;">GSTIN Number </td>
                                <td>: 06AGLPV9986H1ZC</td>
                            </tr>
                            <tr>
                                <td style="height:25px;">Invoice Number </td>
                                <td>: <?=$Billno;?></td>
                            </tr>
                            <tr>
                                <td style="height:25px;">Invoice Date</td>
                                <td>: <?=date("d-m-Y",strtotime($BillDate));?></td>
                            </tr>
                        </table>
                        <!-- Invoice Details -->
                    </td>
                    <td width="550" style="border-top:1px solid; padding-left:10px;" valign="top">
                        <!-- Invoice Other Details -->
                        <table >
                            <tr>
                                <td style="height:20px;">Transaction mode</td>
                                <td>: <?=$Paymentmode?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Bill Number  </td>
                                <td>: <?=$Billno?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Arrival Time  </td>
                                <td>: <?=$Arrivaldate." ".$Arrivaltime?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Departure Time  </td>
                                <td>: <?=$Departuredate." ".$Departuretime?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Days </td>
                                <td>: <?=$Days?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Nationality  </td>
                                <td>: <?=$Nationality?></td>
                            </tr>


                        </table>
                        <!-- Invoice Other Details -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td width="1100">
            <table width="1100" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="550" style="border-top:1px solid; height:25px; border-right:1px solid; background-color:#eaeaea; text-align:center;">Billed to: <?=$Name?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td width="1100">
            <table width="1100" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="1100" style="border-top:1px solid; height:110px; border-right:1px solid; padding-left:10px;" valign="top">
                        <!--Billed To Details -->

                        <table >
                            <tr>
                                <td style="height:20px;">Name</td>
                                <td>: <?=$Name?></td>
                            </tr>

                            <tr>
                                <td style="height:20px;">Mobile No.</td>
                                <td>: <?=$Mobile?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Adult</td>
                                <td>: <?=$Adult?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Children</td>
                                <td>: <?=$Children?></td>
                            </tr>
                            <tr>
                                <td style="height:20px;">Room No</td>
                                <td>: <?=$Roomno?></td>
                            </tr>

                            <tr>
                                <td style="height:20px;">Customer GSTIN Number</td>
                                <td>: <?=$customerGst?></td>
                            </tr>
                        </table>



                        <!--Billed To Details -->
                    </td>

                </tr>
            </table>
        </td>
    </tr>


    <tr>
        <td width="1100">
            <table cellspacing="0" cellpadding="0" width="1100">
                <tr>
                    <td style="border-top:1px solid; border-right:1px solid; height:20px; text-align:center;" width="150">Payment For</td>
                    <td width="600" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;">Description of Goods</td>
                    <td width="200" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;">Amount</td>




                </tr>
                <tr>
                    <td style="border-top:1px solid; border-right:1px solid; height:20px; text-align:center;" width="150">Room Rent</td>
                    <td width="600" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;">Room</td>
                    <td width="200" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;"> <?=$Room_rent_with_taxable_amount?></td>




                </tr>
                <tr>
                    <td style="border-top:1px solid; border-right:1px solid; height:20px; text-align:center;" width="150">Food</td>
                    <td width="600" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;"> <?php for ($i=0;$i<count($Food_description);$i++){
                            echo $Food_description[$i];
                        }
                        ?>
                    </td>
                    <td width="200" style="border-top:1px solid; border-right:1px solid; text-align:center; height:20px;"> <?=$Food_total_with_tax?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><td style="height:150px;"></td></tr>

    <tr>
        <td width="1100">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td style="border-top:1px solid;  height:35px; text-align:center;" width="800"></td>

                    <td width="300" style="border-top:1px solid;  text-align:center; height:20px;">
                        <table width="300" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="" style="border-right:1px solid; height:35px;"></td>
                                <td width="150">Total Amount before Tax</td>
                            </tr>
                        </table>
                    </td>
                    <td width="150" style="border-top:1px solid; border-left:1px solid;  text-align:center; height:20px;">Rs.  <?=($Food_bill+$Room_rent+$Advance)?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="1100">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td style="border-top:1px solid;  height:35px; text-align:center;" width="800">Hotal</td>

                    <td width="300" style="border-top:1px solid;  text-align:center; height:20px;">
                        <table width="300" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="" style="border-right:1px solid; height:35px;"></td>
                                <td width="150"><?=($Room_rent_tax_type==1)?"CGST (".($Room_rent_tax/2)."%)+ SGST(".($Room_rent_tax/2)."%)":"IGST(".($Room_rent_tax)."%)";?></td>
                            </tr>
                        </table>
                    </td>
                    <td width="150" style="border-top:1px solid; border-left:1px solid;  text-align:center; height:20px;"><?=$Room_rent_taxable_amount?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="1100">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td style="border-top:1px solid;  height:35px; text-align:center;" width="800">Food</td>

                    <td width="300" style="border-top:1px solid;  text-align:center; height:20px;">
                        <table width="300" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="" style="border-right:1px solid; height:35px;"></td>
                                <td width="150"><?=($Food_tax_type==1)?"CGST (".($Food_tax/2)."%)+ SGST(".($Food_tax/2)."%)":"IGST(".($Food_tax)."%)";?></td>
                            </tr>
                        </table>
                    </td>
                    <td width="150" style="border-top:1px solid; border-left:1px solid;  text-align:center; height:20px;"><?=$Food_taxable_amount?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td width="1100">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td style="border-top:1px solid;  height:35px; text-align:center;" width="800"></td>

                    <td width="300" style="border-top:1px solid;  text-align:center; height:20px;">
                        <table width="300" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="" style="border-right:1px solid; height:35px;"></td>
                                <td width="150">Total Amount After Tax</td>
                            </tr>
                        </table>
                    </td>
                    <td width="150" style="border-top:1px solid; border-left:1px solid;  text-align:center; height:20px;"><?=($Food_total_with_tax+$Room_rent_with_taxable_amount)?></td>
                </tr>
            </table>
        </td>
    </tr>




    <table cellspacing="0" cellpadding="0" width="1100" align="center" border="1">
        <tr>
            <td style="border-top:1px solid; border-right:1px solid;  height:35px; padding-left:10px; padding-bottom:50px;" width="550">
                <p style="text-align:left:">Note:</p>
                <p style="text-align:left:">* Agree that i am responsible for full payment of the bill in the event is not paid by the company/organisation or person indicate.
                </p>
                <p style="text-align:left:">* All disputes are subject to HISAR Jurisdiction only</p>
                <br>
                <br>
                <h3 style="text-align:right !important; margin-top:20px; margin-left:50px;" align="right">Guest's Signature</h3>
            </td>
            <td style="border-top:1px solid; border-right:1px solid;  height:35px; padding-left:10px; padding-bottom:50px;" width="550">
                <h3 style="text-align:right !important; margin-top:20px;" align="right"> Cashier/Reception :</h3>

            </td>

        </tr>
    </table>

</table>



</body>

</html>
