<?php
$data = $this->services_model->get_services_master_id($services_master_id_pri)->row();
$shop = $this->services_model->get_shop($data->shop_id_pri)->row();
$image = $this->services_model->get_image($shop->image_id)->row()->image_name;
?>
<html>
    <head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">   
        <style>
            @page  {
                /*margin: 8mm 10mm 0mm 10mm;*/
            }
            td{                
                border: 0px solid black;
                /*vertical-align: central;*/
            }
            p{
                font-size: 14pt;
            }
        </style>
    </head>   
    <body>
        <table height="42mm" style="width: 100%;margin-bottom: 0.05in; border-collapse: collapse;"> 
            <tr>
                <td style="padding-left: 10px; border: 1px solid black;">
                    <table height="42mm" width="115mm" style="border-collapse: collapse;"> 
                        <tr style="border-collapse: collapse">
                            <td style="font-weight:bold;"  height="6mm" width="17mm">
                                <p><?php echo 'ชื่อผู้ติดต่อ' ?></p>
                            </td>
                            <td colspan="2" width="98mm">
                                <p><?php echo $data->customer_name ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; vertical-align: top;"  height="6mm" >
                                <p><?php echo 'ที่อยู่' ?></p>
                            </td>
                            <td colspan="2" width="98mm" style="vertical-align: top;"  height="6mm">
                                <p><?php echo $data->customer_address.' '.$data->customer_district.' '.$data->customer_amphoe.' '.$data->customer_province.' '.$data->customer_zipcode; ?></p>                            
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;" height="6mm">
                                <p><?php echo 'โทร' ?></p>
                            </td>
                            <td width="38mm">
                                <p><?php echo $data->customer_tel; ?></p>
                            </td>
                            <td width="60mm">
                                <span style="font-size: 14pt;"><b><?php echo 'เลขประจำตัวผู้เสียภาษี'; ?></b></span>&nbsp;&nbsp;<span style="font-size: 14pt;"><?php echo $data->customer_tax_id; ?></span>
                            </td>
                        </tr>                      
                        <tr>
                            <td style="font-weight:bold; vertical-align: central" height="6mm">
                                <p><?php echo 'ชื่อบริษัท' ?></p>
                            </td>
                            <td colspan="2">
                                <p><?php echo $data->customer_tax_shop ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;"  height="6mm">
                                <p><?php echo 'สาขา' ?></p>
                            </td>
                            <td colspan="2" width="98mm">
                                <p><?php echo $data->customer_tax_shop_sub ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; vertical-align: top;"  height="6mm" >
                                <p><?php echo 'ที่อยู่' ?></p>
                            </td>
                            <td colspan="2" width="98mm" style="vertical-align: top;">
                                <p><?php echo $data->customer_tax_address; ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="2mm">

                </td>
                <td style="padding-left: 10px ;border: 1px solid black;">
                    <table height="42mm" width="73mm" style="border-collapse: collapse;">                         
                        <tr>
                            <td style="font-weight:bold; vertical-align: central;"  height="6mm" width="28mm">
                                <p><?php echo 'ประเภทภาษี' ?></p>
                            </td>
                            <td>
                                <p><?php echo $this->services_model->ref_type_tax($data->type_tax_id)->row()->type_tax_name; ?></p>
                            </td>
                        </tr>
                        <tr style="border-collapse: collapse">
                            <td style="font-weight:bold;"  height="6mm" width="28mm">
                                <p><?php echo 'สถานะบริการ' ?></p>
                            </td>
                            <td>
                                <?php if($data->services_status == 1){ ?>
                                <p><?php echo 'รอดำเนินการ'; ?></p>
                                <?php } else if($data->services_status == 2){ ?>
                                <p><?php echo 'ดำเนินการเสร็จสิ้น'; ?></p>
                                <?php } else{ ?>
                                <p><?php echo 'ยกเลิก'; ?></p>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;"  height="6mm" width="28mm">
                                <p><?php echo '' ?></p>
                            </td>
                            <td>
                                <p><?php echo ''; ?></p>
                            </td>                          
                        </tr>F
                        <tr>
                            <td style="font-weight:bold; vertical-align: top;"  height="6mm" width="28mm">
                                <p><?php echo '' ?></p>
                            </td>
                            <td>
                                <p><?php echo '' ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;"  height="6mm" width="28mm">
                                <p><?php echo '' ?></p>
                            </td>
                            <td>
                                <p><?php echo '' ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;"  height="9mm" width="28mm">
                                <p><?php echo '' ?></p>
                            </td>
                            <td>
                                <p><?php echo '' ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>