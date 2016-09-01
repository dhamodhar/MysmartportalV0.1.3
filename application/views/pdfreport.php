<?php
if($type == 3 or $type == 5)
{
$title1 = 'Invoice Copy';
$order_title = '<td align="left">Invoice#:</td><td>'.$invoice_numb.'</td>';
$ordertext = '<td width="72%" align="left" style="border:0.5px solid #f7f7f7; background-color:#f7f7f7;">
	<strong>
	***** IMPORTANT UPDATE &amp; INFORMATION REQUEST *****<br />
      </strong>
	  You can now pay invoices online using TermSync. Please log into your TermSync account or <b>CLICK ON THE LINK</b> provided within your reminder emails and select <b>MAKE ONLINE PAYMENT.</b><br><br>Payments can be one time or autopay and all major credit cards, ACH and EFT are accepted.<br><br>
<b>FOR QUESTIONS REGARDING INVOICE OR PAYMENT CONTACT SKYE GARDNER AT (810) 534-1661</b>
	 </td>';

}else{

if($order_status == "RMA")
{
$ordnumb = str_replace(' ', '', @$order_numb)."-RMA";

}else
{
$ordnumb = @$order_numb;

}


$title1 = 'Order Copy';
$order_title = '<td align="left">Order#:</td><td>'.$ordnumb.'</td>';
$ordertext = '<td width="72%" align="left" style="border:0.5px solid #000; background-color:#f7f7f7;">
	<p style="font-size:8px; align="justify"">NOTE: Label Order quantities may reflect a 10% overage /underage due to gains or losses in manufacturing.<br>

* Freight and Taxes are calculated at time of invoicing based on freight terms and taxable status.</p><br />
    </td>  ';
}


tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Lowry Solutions Inc.                                                                     ".$title1;
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
$pgno1= $obj_pdf->getAliasNumPage();
$pgno2= $obj_pdf->getAliasNbPages(); 
ob_start();
$content = ob_get_contents();
$content .='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled_Document</title>
</head>

<body style="margin:0px;padding:0px;">
<div style="width:100%; margin:0 auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td align="left">Remit Payment USD To:<br />Lowry Solutions, Inc.<br />9420 MAI-TBY ROAD<br />BRIGHTON, Ml 48116
    </td>
    <td align="center" valign="top">(810) 229-7200<br />9420 MALTBY ROAD<br />BRIGHTON, Ml 48116 </td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>'.$order_title.'</tr>
      <tr>
        <td align="left">Date:</td>
        <td>'.$order_date.'</td>
      </tr>
      <tr>
        <td align="left">Page</td>
        <td align="left" width="60%">Page '.$pgno1.' of '.$pgno2.'</td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td align="left" width="47%">Bill To:</td>
    <td width="8%">&nbsp;</td>
    <td width="47%" align="left">Ship To:</td>
  </tr>
  <tr>
    <td align="left" width="47%" valign="top" style="border:0.5px solid #000;padding:0px;">'.$billadd1.'<br />'.$billname.'<br />'.trim($billcity, " ").', '.trim($billst," ").', '.$billzip.'
      </td>
      <td width="8%">&nbsp;</td>
    <td align="left" width="47%" valign="top" style="border:0.5px solid #000;padding:0px;">'.$shipadd1.'<br />'.@$shipadd2.'<br>'.$shipname.'<br />'.trim($shipcity," ").', '.trim($shipst," ").', '.$shipzip.'</td>
  </tr>
</table> 



<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:0.5px solid #000;">
  <tr >
    <td align="left" valign="top" width="19.5%" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Customer#</strong></span><br />
      '.$this->session->userdata("cust_code").' </td>
    <td align="left" valign="top" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Order#</strong></span><br />
      '.$order_numb.'-'.$rel_numb.'</td>
    <td align="left" valign="top" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Order Date</strong></span><br />
      '.$order_date.'</td>
    <td align="left" valign="top" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Ship Date</strong></span><br />
      '.$ship_date.'</td>
    <td align="left" valign="top" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Terms</strong></span><br />
      NET '.$terms_code.' DAYS</td>
    <td align="left" valign="top" style="border-bottom:0.5px solid #000;border-right:0.5px solid #000;"><span style="color:#000"><strong>Due Date</strong></span><br />
      '.$due_date.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>Client PO</strong></span><br />
      '.$cust_po.'</td>
    <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>Cost Center</strong></span><br />
      '.$costcenter.'</td>
    <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>Consolidation</strong></span> <br />
      '.$consolidation.'</td>
    <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>Ship Via</strong> </span><br />
     '.$shipvia.'</td>
	  <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>PPD/COLL </strong> </span><br />
     '.$ppdcoll.'</td>
    <td align="left" valign="top" style="border-right:0.5px solid #000;"><span style="color:#000"><strong>PPS#</strong></span> <br />'.$pps.'</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:0.5px solid #000;">
  <tr>
    <td width="7%" height="30" align="center" style="border-right:0.5px solid #000;font-size:8px;"><strong>ITEM</strong></td>
    <td width="38%" align="center" style="border-right:0.5px solid #000;font-size:8px;"><strong>DESCRIPTION</strong></td>


      <td width="11%" align="center" style="border-right:0.5px solid #000;font-size:8px;"><strong>QTY ORDERED</strong></td>
	    <td width="11%" align="center" style="border-right:0.5px solid #000;font-size:8px;"><strong>QTY SHIPPED</strong></td>
	    <td width="9%" align="center" style="border-right:0.5px solid #000;font-size:8px;"><strong>UOM</strong></td>  
  <td width="13%" align="right" style="border-right:0.5px solid #000;font-size:8px;"><strong>UNIT PRICE</strong></td>
    <td width="14%" align="right" style="border-right:0.5px solid #000;font-size:8px;"><strong>NET PRICE</strong></td>
  </tr>';
 $m=1;
 $tcount = 0;
  foreach($params as $paramsdata){
  
  
  $total_val = $paramsdata['item_price']*$paramsdata['qty'];
 $content .='<tr>
    <td align="center" style="border-right:0.5px solid #000; border-top:0.5px solid #000;">'.$paramsdata['item_no'].'</td>
    <td align="center" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">'.$paramsdata['part_desc'].','.$paramsdata['part_code'].'</td>

<td align="center" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">'.$paramsdata['qtyordered'].'</td>
   	 
	 <td align="center" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">'.$paramsdata['totshipqty'].'</td>
  <td align="center" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">'.$paramsdata['uom'].'</td>
      
   <td align="right" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">$ '.number_format($paramsdata['item_price'], 2).'</td>
    <td align="right" style="border-right:0.5px solid #000;border-top:0.5px solid #000;">$ '.number_format($total_val, 2).'</td>
  </tr>';
  
  $tcount = ((number_format((float)$tcount, 2, '.', ''))+(number_format((float)$total_val, 2, '.', '')));
  $m++;
  }
  
$content .='</table>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>'.$ordertext.'
	<td rowspan="2" align="right" valign="top">
	<table border="0" align="right" cellpadding="3" cellspacing="3">
       <tr>
        <td align="right" width="30%"><strong>Sub Total:</strong></td>
        <td width="27%" align="right">$ '.number_format($tcount, 2).'</td>
      </tr>
   
      <tr>
        <td align="right">Freight:</td>
        <td align="right">$ '.number_format((float)$shipping_charge, 2, '.', '').'</td>
      </tr>
      <tr>
        <td align="right">Sales Tax:</td>
        <td align="right">$ '.number_format($totaltax, 2).'</td>
      </tr>
      <tr>
        <td align="right" width="30%"><strong>TOTAL USD:</strong></td>
        <td align="right">$ '.number_format($totalamount, 2).'</td>
      </tr>
    </table></td>
  </tr>

 </table>


</div>
</body>
</html>
';




ob_end_clean();
$obj_pdf->writeHTML($content);
if($type == 2){
$fileatt = $obj_pdf->Output('Order_'.@$order_numb.'.pdf', 'D');
exit;
}else if($type == 5)
{
$invoicefilename = "Invoice_".$invoice_numb.".pdf";
$fileatt = $obj_pdf->Output($invoicefilename, 'D');
exit;

}else{
$fileatt = $obj_pdf->Output($_SERVER['DOCUMENT_ROOT'].'Order_and_invoice.pdf', 'F');
if($type == 3)
{
$fileName = 'Invoice_'.$invoice_numb.'.pdf';
}else{
$fileName = 'Order_'.$order_numb.'.pdf';
}

// $html = file_get_contents($content);


if($order_numb!="")
{

$to = $usemail;
if($type == 3)
{
$subject = 'Invoice_'.$invoice_numb.' - Email Copy';
}else
{
$subject = 'Order_'.$order_numb.' - Email Copy';

}
$repEmail = 'lowrysma@box547.bluehost.com';
$attachment = chunk_split($fileatt);
$eol = PHP_EOL;
$separator = md5(time());
$download_file = $_SERVER['DOCUMENT_ROOT'].'Order_and_invoice.pdf';

$this->load->library('my_phpmailer');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "box547.bluehost.com";
$mail->SMTPAuth = true;
$mail->Username = "admin@lowrysmartportal.com";
$mail->Password = "Lowry123$"; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;         
$mail->From = "admin@lowrysmartportal.com";
$mail->FromName = "Lowry Smart Portal";	
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);		
           
        $mail->Subject    = $subject;  
        $mail->Body      = "Hello, <br><br> You have requested an email copy. If you have received this email in error, please notify the sender. If you are not the named addressee you should not disseminate, distribute or copy this email. Please notify the sender immediately by email if you have received this email by mistake and delete this email from your system. If you are not the intended recipient, you are notified that disclosing, copying, distributing, or taking any action in reliance on the contents of this information is strictly prohibited.<br><br>Thank you,<br>
Admin<br>
Lowry Smart Portal";
		$mail->AddAttachment($download_file);
        
		
        $destino = $usemail;
        $mail->addAddress($destino);
          
         if(!$mail->Send()) {  
           
        } else {  
          
        } 
}

if($type == 3)
{
$inv = urlencode(base64_encode(str_replace(" ","",$invoice_numb)));



//redirect(base_url()."index.php/welcome/invoice_view/".$inv);
}else{


$ord = urlencode(base64_encode(str_replace(" ","",$order_numb)."-".$rel_numb));
redirect(base_url()."index.php/welcome/order_view/".$ord);
}

}
?>


