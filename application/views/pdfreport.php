<?php
if($type == 3 or $type == 5)
{
$title1 = 'Invoice Copy';
$order_title = '<td align="left">Invoice#:</td><td>'.$invoice_numb.'</td>';
$ordertext = '<td width="72%" align="left" style="border:1px solid #000; background-color:#f7f7f7;">
	<strong>
	***** IMPORTANT UPDATE &amp; INFORMATION REQUEST *****<br />
      </strong>We are moving to an Automated invoicing System. Please provide us your Accounts Payable Contact Email &amp; Email <br />
      Address where invoices should be send. Lastly, if tax exempt please provide an updated Tax Exemption Certificate.<br />
     <span style="font-weight:bold; text-decoration:underline;"> Please email the requested information above to skye@lowrysolutions.com and reference the invoice. FOR QUESTIONS REGARDING THIS INVOICE CONTACT SKYE GARDNER AT (810) 534-1661</span></td>';

}else{
$title1 = 'Order Copy';
$order_title = '<td align="left">Order#:</td><td>'.$order_numb.'</td>';
$ordertext = '<td width="72%" align="left" style="border:1px solid #000; background-color:#f7f7f7;">
	<p style="font-size:8px">All sales of goods by Lowry are subject exclusively to Lowry’s then-current Terms and Conditions of Sale, available at http://www.lowrycomputer.com/sites/lowrycomputer.com/files/SalesTermsGoods.pdf. All equipment maintenance services are subject exclusively to Lowry’s then-current Equipment Maintenance Terms and Conditions, available at http://www.lowrycomputer.com/sites/lowrycomputer.com/files/EquipmentMaintenance.pdf All professional services other than equipment maintenance services and software maintenance or support are subject exclusively to Lowry’s then-current Professional Services Agreement Terms and Conditions available at http://www.lowrycomputer.com/sites/lowrycomputer.com/files/ProfessionalServices.pdf If Lowry software is provided and it is not otherwise subject to a particular Lowry license agreement, the Software License Agreement at http://www.lowrycomputer.com/sites/lowrycomputer.com/files/SoftwareLicense.pdf will apply to such software. Any software maintenance or support will be governed by Lowry’s then-current Software Maintenance and Support Agreement available at http://www.lowrycomputer.com/sites/lowrycomputer.com/files/SoftwareMaintenance.pdf. If any of the above terms are first tendered to the customer before the customer tenders a purchase order or similar document to Lowry, the above terms are in lieu of any terms later submitted by the customer and Lowry rejects all additional or different terms and conditions of the customer, whether confirmatory or otherwise. If Lowry tenders these terms after the tender by the customer of other terms, whether as part of a purchase order or otherwise, then Lowry’s acceptance of any offer by the customer associated with the customer’s terms is expressly conditioned upon customer’s acceptance of the above terms exclusively and to the exclusion of any proffered customer terms or conditions, regardless of whether the above terms contain any terms additional to, or different from, any terms proffered by the customer</p><br />
     <span style="font-weight:bold; text-decoration:underline;"> FOR ORDER ISSUES, PLEASE CALL 800-733-0210.</span></td>';
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

<body style="margin:0px;">
<div style="width:800px; margin:0 auto;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
    <td align="center"><span style="font-size:20px;"> </span><br />
      <span style="font-size:30px;font-weight:bold; text-decoration:underline; color:#a3a3a3;"><br />
      </span></td>
    <td align="left" valign="top"><span style="font-size:30px; font-weight:bold;"><br />
      </span></td>
  </tr>
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
        <td>Page '.$pgno1.' of '.$pgno2.'</td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">Bill To:</td>
    <td>&nbsp;</td>
    <td align="left">Ship To:</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border:1px solid #000;padding:10px;">'.$billadd1.'<br />'.$billname.'<br />'.trim($billcity, " ").', '.trim($billst," ").', '.$billzip.'<br />
      <br /></td>
      <td>&nbsp;</td>
    <td align="left" valign="top" style="border:1px solid #000;padding:10px;">'.$shipadd1.'<br />'.@$shipadd2.'<br>'.$shipname.'<br />'.trim($shipcity," ").', '.trim($shipst," ").', '.$shipzip.'<br /><br /></td>
  </tr>
</table> <br />



<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #000;">
  <tr >
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Customer#<br />
      '.$this->session->userdata("cust_code").' </td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Order#<br />
      '.$order_numb.'-'.$rel_numb.'</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Order Date<br />
      '.$order_date.'</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Ship Date<br />
      '.$ship_date.'</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Terms<br />
      NET 30 DAYS</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Due Date<br />
      '.$post_date.'</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border-right:1px solid #000;">Client PO<br />
      '.$cust_po.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Cost Center<br />
      '.$costcenter.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Consolidation <br />
      '.$consolidation.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Ship Via <br />
     '.$shipvia.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">PPD/COLL/PP&A <br /> '.$ppdcoll.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">PPS# <br />'.$pps.'</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #000;">
  <tr>
    <td align="center" style="border-right:1px solid #000;">ITEM</td>
    <td align="center" style="border-right:1px solid #000;">DESCRIPTION</td>
    <td align="center" style="border-right:1px solid #000;">UOM</td>
    <td align="center" style="border-right:1px solid #000;">BACK ORD.</td>
    <td align="center" style="border-right:1px solid #000;">QTY SHIPPED</td>
    <td align="center" style="border-right:1px solid #000;">UNIT PRICE</td>
    <td align="center" style="border-right:1px solid #000;">NET PRICE</td>
  </tr>';
 $m=1;
  foreach($params as $paramsdata){
  $total_val = $paramsdata['item_price']*$paramsdata['qty'];
 $content .='<tr>
    <td align="center" style="border-right:1px solid #000; border-top:1px solid #000;">'.$m.'</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">'.$paramsdata['part_desc'].','.$paramsdata['part_code'].'</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">'.$paramsdata['uom'].'</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;"></td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">'.$paramsdata['qty'].'</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">$ '.number_format((float)$paramsdata['item_price'], 2, '.', '').'</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">$ '.number_format((float)$total_val, 2, '.', '').'</td>
  </tr>';
  $m++;
  }
  
$content .='</table>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>'.$ordertext.'
	<td width="28%" rowspan="2" align="right" valign="top"><table width="90%" border="0" cellspacing="5" cellpadding="5">
       <tr>
        <td align="left"><strong>Sub Total:</strong></td>
        <td align="left">$ '.number_format((float)($item_price*$qty), 2, '.', '').'</td>
      </tr>
   
      <tr>
        <td align="left">Freight:</td>
        <td align="left">$ '.number_format((float)$shipping_charge, 2, '.', '').'</td>
      </tr>
      <tr>
        <td align="left">Sales Tax:</td>
        <td align="left">$ '.$totaltax.'</td>
      </tr>
      <tr>
        <td align="left"><strong>TOTAL USD:</strong></td>
        <td align="left">$ '.$totalamount.'</td>
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
$fileatt = $obj_pdf->Output('Order'.$order_numb.'.pdf', 'D');
exit;
}else if($type == 5)
{
$fileatt = $obj_pdf->Output('Invoice.pdf', 'D');
exit;

}else{
$fileatt = $obj_pdf->Output($_SERVER['DOCUMENT_ROOT'].'Order_and_invoice.pdf', 'F');
if($type == 3)
{
$fileName = 'Invoice.pdf';
}else{
$fileName = 'Order'.$order_numb.'.pdf';
}

// $html = file_get_contents($content);

$to = $usemail;
$subject = 'Lowry - Your Requested Email Copy';
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
$mail->FromName = "Lowrysmartportal.com";			
           
        $mail->Subject    = $subject;  
        $mail->Body      = "Hello, you have requested an email copy. If you have received this email in error, please notify the sender. If you are not the named addressee you should not disseminate, distribute or copy this email. Please notify the sender immediately by email if you have received this email by mistake and delete this email from your system. If you are not the intended recipient you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited.";
		$mail->AddAttachment($download_file);
        
		
        $destino = $usemail;
        $mail->addAddress($destino, "test");
          
         if(!$mail->Send()) {  
           
        } else {  
          
        } 


if($type == 3)
{
redirect(base_url()."index.php/welcome/invoice_view/".str_replace(" ","",$invoice_numb));
}else{
redirect(base_url()."index.php/welcome/order_view/".str_replace(" ","",$order_numb)."-".$rel_numb);
}

}
?>


