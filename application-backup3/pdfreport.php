<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Lowry Solutions Inc.                                                                     Invoive";
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
ob_start();
    // we can have any view part here like HTML, PHP etc
	  $content = ob_get_contents();
	$content .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
      <tr>
        <td align="left">Invoice#:</td>
        <td>'.$invoice_numb.'</td>
      </tr>
      <tr>
        <td align="left">Date:</td>
        <td>01/27/2016</td>
      </tr>
      <tr>
        <td align="left">Page</td>
        <td>Page 1 of 1</td>
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
    <td align="left" valign="top" style="border:1px solid #000;padding:10px;">'.$billadd1.'<br />'.$billname.'<br />'.$billcity.' , '.$billst.' ,'.$billzip.'<br />ADA, Ml 49355
    
      <br /></td>
      <td>&nbsp;</td>
    <td align="left" valign="top" style="border:1px solid #000;padding:10px;">'.$shipadd1.'<br />'.$shipname.'<br />'.$shipcity.' , '.$shipst.' ,'.$shipzip.'<br /><br /></td>
  </tr>
</table> <br />



<table width="100%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #000;">
  <tr >
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Customer#<br />
      11920-000 </td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Order#<br />
      '.$order_numb.' - 001</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Order Date<br />
      '.$order_date.'</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Ship Date<br />
      '.$ship_date.'</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;">Terms<br />
      NET 30 DAYS</td>
    <td align="left" valign="top" style="border-bottom:1px solid #000;border-right:1px solid #000;"> Due Date<br />
      12/25/2015</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border-right:1px solid #000;">Client PO<br />
      '.$cust_po.'</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Cost Center<br />
      201</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Consolidation<br />
      #977526</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">Ship Via<br />
      GROUND</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">PPD/COLL/PP&amp;A<br />
      PREPAID AND ADD</td>
    <td align="left" valign="top" style="border-right:1px solid #000;">PPS#<br />
      D1086512</td>
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
  </tr>
  <tr>
    <td align="center" style="border-right:1px solid #000; border-top:1px solid #000;">1</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">CONTRACT RENEWAL DEPOT</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">EA</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">0.00</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">20.00</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">324.00</td>
    <td align="center" style="border-right:1px solid #000;border-top:1px solid #000;">6,480.00</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="72%" align="left" style="border:1px solid #000; background-color:#f7f7f7;"><strong>***** IMPORTANT UPDATE &amp; INFORMATION REQUEST *****<br />
      </strong>We are moving to an Automated invoicing System. Please provide us your Accounts Payable Contact Email &amp; Email <br />
      Address where invoices should be send. Lastly, if tax exempt please provide an updated Tax Exemption Certificate.<br />
     <span style="font-weight:bold; text-decoration:underline;"> Please email the requested information above to skye@lowrysolutions.com and reference the invoice</span></td>
    <td width="28%" rowspan="2" align="right" valign="top"><table width="90%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td align="left">Sub Total:</td>
        <td align="left">6,480.00</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">0.00</td>
      </tr>
      <tr>
        <td align="left">Freight</td>
        <td align="left">0.00</td>
      </tr>
      <tr>
        <td align="left">Sales Tax</td>
        <td align="left">'.$totalamount.'</td>
      </tr>
      <tr>
        <td align="left"><strong>TOTAL </strong></td>
        <td align="left">'.$totalamount.'</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left">FOR QUESTIONS REGARDING THIS INVOICE CONTACT SKYE GARDNER AT (810) 534-1661</td>
    </tr>
</table>


</div>
</body>
</html>
';
 
ob_end_clean();
$obj_pdf->writeHTML($content);
$fileatt = $obj_pdf->Output('output.pdf', 'E');

$fileName = 'Invoice.pdf';
$to = $usemail;
$subject = 'Lowry Invoice';
$repEmail = 'lowry@gmail.com';
$attachment = chunk_split($fileatt);
$eol = PHP_EOL;
$separator = md5(time());

$headers = 'From: Sender <'.$repEmail.'>'.$eol;
$headers .= 'MIME-Version: 1.0' .$eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

$message = "--".$separator.$eol;
$message .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$message .= "Order Invoice.".$eol;

$message .= "--".$separator.$eol;
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$message .= "Content-Transfer-Encoding: 8bit".$eol.$eol;

$message .= "--".$separator.$eol;
$message .= "Content-Type: application/pdf; name=\"".$fileName."\"".$eol; 
$message .= "Content-Transfer-Encoding: base64".$eol;
$message .= "Content-Disposition: attachment".$eol.$eol;
$message .= $attachment.$eol;
$message .= "--".$separator."--";

if (mail($to, $subject, $message, $headers)){
//echo "Email sent";
}

else {
//echo "Email failed";
}

?>